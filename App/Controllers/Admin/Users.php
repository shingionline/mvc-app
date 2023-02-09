<?php

namespace App\Controllers\Admin;

use Core\Controller;

class Users extends Controller
{
    protected function before()
    {
    }

    protected function after()
    {
    }

    public function indexAction()
    {
        echo 'User admin index';
    }
}