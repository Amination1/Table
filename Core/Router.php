<?php


namespace Core;
class Router
{
    public $dir;
    public function base($url)
    {
        $this->dir = '../'.__DIR__ . '\\' . $url;
        echo $this->dir;
    }
}