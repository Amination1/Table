<?php

namespace Core;

class Session
{
    public $admin;
    public function admin()
    {
        $_SESSION['admin'] = true;
        $_SESSION['user'] = 'admin';
        $this->admin = $_SESSION['admin'];
    }
}