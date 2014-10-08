<?php

/**
 * 图片上传基类
 *
 * @author Jermyn.shi
 * @date 2014-05-05
 */
class GImageUploader
{
    /**
     * @var 文件域变量名
     */
    protected $_name;

    /**
     * @var 待处理的图片文件对象集
     */
    protected $_imgFiles;

    /**
     * @var 允许的图片类型m
     */
    protected $_mimeType = ['jpeg', 'jpg', 'gif', 'png'];

    /**
     * @var 用户自定义过滤条件
     */
    protected $_filter;

    /**
     * @var 允许的图片尺寸
     */
    protected $_allowedSize = 10241000;

    /**
     * @var 错误
     */
    protected $_errors = null;

    /**
     * @var 是否产生缩略图
     */
    protected $_saveThumb = false;

    /**
     * 过滤文件的mime类型
     * @param string $file 文件路径
     * @return boolean
     */
    protected function filterMimeType($file)
    {
        if ($imgAttr = getimagesize($file)) {
            $ext = CUploadedFile::getExtNameByMIME($imgAttr['mime']);
            $filter = isset($this->_filter['mime']) && is_array($this->_filter['mime']) ? $this->_filter['mime'] : $this->_mimeType;
            if ($ext != '' && in_array(strtolower($ext), $filter)) return true;
        }
        return false;
    }

    /**
     * 过滤文件的尺寸类型
     * @param int $size
     * @return boolean
     */
    protected function filterSize($size)
    {
        $limitSize = isset($this->_filter['size']) ? (int)$this->_filter['size'] : $this->_allowedSize;
        if ($size > $limitSize) return false;
        return true;
    }

    public function mkDirectory($dst)
    {
        $return = true;
        if (!is_dir($dst))
            $return = CFileHelper::mkdir($dst, []);
        return $return;
    }

    public function saveThumb($is)
    {
        $this->_saveThumb = $is;
    }

}