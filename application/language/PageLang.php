<?php

class PageLang
{
    /**
     * 返回页面标题
     */
    public function title($key)
    {
        $titles = include_once('page/title.php');
        return isset($titles[$key]) ? $titles[$key] : null;
    }

}