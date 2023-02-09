<?php

namespace App\Controllers;

use Core\Controller;

class Home extends Controller
{
    public function indexAction()
    {
        echo 'Hello from the index action in the Home controller!';
    }

    public function before()
    {
        echo '(before) ';
        return false;
    }

    public function after()
    {
        echo ' (after)';
    }

}