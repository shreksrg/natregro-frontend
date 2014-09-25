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

}