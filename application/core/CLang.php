<?php
self::import('application.language.*');

class CLang extends CCApplication
{
    static public function page()
    {
        return new PageLang();
    }

    static public function message()
    {
        return new MessageLang();
    }

    static public function load($file)
    {
        $config = null;
        $filePath = APPPATH . 'language/' . $file . '.php';
        if (file_exists($filePath))
            $config = require($filePath);
        else {
            $filePath = $file . '.php';
            if (file_exists($filePath)) $config = require($filePath);
        }
        return $config;
    }
}