<?php

/**
 * 商品图片上传类
 *
 * @author Jermyn.shi
 * @date: 2014-05-04
 */
Gmall::import('application.components.utils.*');

class ImageUploader extends GImageUploader
{
    /**
     * @var 目标目录
     */
    protected $_targetDir = '/imgserver2/goods/';
    protected $_urls;
    protected $_targetFiles;


    /**
     * @var mime类型错误
     */
    const  ERR_MIME_ALLOWED = 1001;

    /**
     * @var 超过允许尺寸
     */
    const  ERR_SIZE_ALLOWED = 1002;

    /**
     * @var 创建目标文件失败
     */
    const  ERR_DST_FAILURE = 1003;

    /**
     * @var 创建缩略图失败
     */
    const  ERR_THUMB_FAILURE = 1004;

    /**
     * @var 保存文件失败
     */
    const  ERR_SAVE_FAILURE = 1005;


    public function __construct($name, array $filter = [])
    {
        $this->_name = $name;
        $this->_filter = $filter;
    }

    public function initImages()
    {
        CUploadedFile::getInstancesByName($this->_name);
        $this->_imgFiles = CUploadedFile::getFiles();
        $this->setFilesId();
    }

    public function initImage()
    {
        CUploadedFile::reset();
        $this->_imgFiles =  CUploadedFile::getInstanceByName($this->_name);
        $this->setFilesId();
    }

    protected function setFilesId()
    {
        if ($this->_imgFiles) {
            if (is_array($this->_imgFiles)) {
                foreach ($this->_imgFiles as $key => &$obj) {
                    //$_id = $this->_name . '[' . $key . ']';
                    $obj->setId($key);
                }
            } else $this->_imgFiles->setId($this->_name);
        }
    }

    public function setThumbWH($width, $height)
    {
        $this->_thumbWidth = $width;
        $this->_thumbHeight = $height;
    }

    public function getThumbWH()
    {
        return ['width' => $this->_thumbWidth, 'height' => $this->_thumbHeight];
    }

    public function getTargetFiles()
    {
        return $this->_targetFiles;
    }

    public function getUrls()
    {
        return $this->_urls;
    }

    //验证上传限制,尺寸和mime类型
    public function verification()
    {
        if ($this->_imgFiles) {
            if (is_array($this->_imgFiles)) {
                foreach ($this->_imgFiles as $key => $obj) {
                    $this->filterRules($obj);
                }
            } else  $this->filterRules($this->_imgFiles);
        }
    }

    public function filterRules($fileInst)
    {
        $_id = $fileInst->getId();
        $return = $this->filterMimeType($fileInst->getTempName());
        if ($return === false) $this->setErrors($_id, self::ERR_MIME_ALLOWED);
        $return = $this->filterSize($fileInst->getSize());
        if ($return === false) $this->setErrors($_id, self::ERR_SIZE_ALLOWED);
    }

    /**
     * 执行文件上传
     */
    public function upload()
    {
        $this->verification();
        if ($this->_errors) return $this->_errors;
        $this->saveAs();
        return $this->_errors ? $this->_errors : true;
    }

    /**
     * 保存文件
     */
    public function saveAs()
    {
        if ($this->_imgFiles) {
            $this->setDirectory(); //设置目录
            if (is_array($this->_imgFiles)) {
                foreach ($this->_imgFiles as $key => $obj) {
                    $this->saveAsFile($obj);
                }
            } else  $this->saveAsFile($this->_imgFiles);
        }
    }

    protected function saveAsFile($fileInst)
    {
        $_id = $fileInst->getId();
        if (isset($this->_errors[$_id])) return false;
        //创建目标文件
        $tarFile = $this->setTargetFile();
        if ($tarFile === false) {
            $this->setErrors($_id, self::ERR_DST_FAILURE);
            return false;
        }

        //创建缩略图
        $thumbFile = null;
        if ($this->_saveThumb == true) {
            $tempFile = $fileInst->getTempName();
            $thumbFile = $this->getThumbTarFile($tarFile);
            $return = $this->createThumbImage($tempFile, ROOT_PATH . $thumbFile);
            if ($return === false) {
                $this->setErrors($_id, self::ERR_THUMB_FAILURE);
                return false;
            }
        }

        //保存目标文件
        $return = $fileInst->saveAs(ROOT_PATH . $tarFile);
        if ($return === false) $this->setErrors($_id, self:: ERR_SAVE_FAILURE);
        if ($thumbFile) $thumbFile = SITE_URL . $thumbFile;
        $this->_urls[$_id] = ['img' => SITE_URL . $tarFile, 'thumb' => $thumbFile];
        $this->_targetFiles[$_id] = $tarFile;
        return $return;
    }

    /**
     * 获取目标文件路径
     * @return mixed 获取成功返回文件路径,否则返回false;
     */
    protected function setTargetFile()
    {
        $re = $this->mkDirectory(ROOT_PATH . $this->_targetDir);
        if ($re) {
            $fst = $this->setFileName();
            return $this->_targetDir . $fst;
        }
        return false;
    }

    /**
     * 获取缩略图目标文件
     * @param string $resFile
     * @return string
     */
    public function getThumbTarFile($resFile)
    {
        return $tarFile = $resFile . '_!!' . $this->_thumbWidth . 'x' . $this->_thumbHeight . '.jpg';
    }

    /**
     * 设置目标文件目录
     */
    public function setDirectory($dst = null)
    {
        if ($dst !== null) $this->_targetDir = $dst;
        else $this->_setDirectory();
    }

    protected function _setDirectory()
    {
        $_prefix = ['i' => 1, 't' => 2, 'm' => 3];
        //  $_index = rand(1, 20);
        $_index = date('d', time());
        $subDir = array_rand($_prefix, 1) . $_index;
        $this->_targetDir .= $subDir . '/';
    }

    /**
     * 设置文件名
     */
    public function setFileName()
    {
        return UUID::randString() . UUID::fast_uuid() . '.jpg';
    }

    /**
     * 设置错误
     */
    protected function setErrors($id, $errCode)
    {
        $this->_errors[$id][] = $errCode;
    }

    /**
     * 生成缩略图
     */
    public function createThumbImage($resFile, $tarFile)
    {
        $_width = $this->_thumbWidth;
        $_height = $this->_thumbHeight;
        //  $tarFile = $resFile . '.!!' . $_width . '×' . $_height . '.jpg';
        $return = GraphicsHandler::img2thumb($resFile, $tarFile, $_width, $_height);
        return $return;
    }
}