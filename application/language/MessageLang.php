<?php

class MessageLang
{

    protected $_type;
    protected $_messages;

    public function info($key)
    {
        $this->_type = 'info';
        return $this->getMessages($key);
    }

    public function warning($key)
    {
        $this->_type = 'warning';
        return $this->getMessages($key);
    }

    public function error($key)
    {
        $this->_type = 'error';
        return $this->getMessages($key);
    }


    protected function getMessages($key)
    {
        $file = $this->_type;
        $messages = include_once("message/$file");
        return isset($messages[$key]) ? $messages[$key] : null;

    }


}