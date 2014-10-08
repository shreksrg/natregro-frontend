<?php

/**
 * 文件上传基类
 *
 * @author Jermyn.shi
 * @date 2014-10-08
 */
class FileUploader
{
    /**
     * @var 文件域变量名
     */
    protected $_name;

    /**
     * @var 待处理的文件对象集
     */
    protected $_files;

    /**
     * @var 允许的图片类型
     */
    protected $_mimeType = ['txt', 'doc', 'docx', 'pdf', 'rar', 'zip'];

    /**
     * @var 用户自定义过滤条件
     */
    protected $_filter;

    /**
     * @var 允许的文件尺寸
     */
    protected $_allowedSize = 10241000;

    /**
     * @var 错误
     */
    protected $_errors = null;


    /**
     * 过滤文件的mime类型
     * @param string $file 文件路径
     * @return boolean
     */
    protected function filterMimeType($file)
    {
        if ($imgAttr = getimagesize($file)) {
            $ext = $this->getExtNameByMIME($imgAttr['mime']);
            $filter = isset($this->_filter['mime']) && is_array($this->_filter['mime']) ? $this->_filter['mime'] : $this->_mimeType;
            if ($ext != '' && in_array(strtolower($ext), $filter)) return true;
        }
        return false;
    }

    public static function getExtNameByMIME($name)
    {
        if (($pos = strrpos($name, '/')) !== false)
            return (string)substr($name, $pos + 1);
        else
            return '';
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

}