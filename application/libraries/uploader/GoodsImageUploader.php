<?php

/**
 * 商品图片上传类
 *
 * @author Jermyn.shi
 * @date: 2014-05-04
 */

class GoodsImageUploader extends ImageUploader
{
    /**
     * @var 目标目录
     */
    protected $_targetDir = '/imgserver2/goods/';
    protected $_thumbWidth = 88;
    protected $_thumbHeight = 88;

}