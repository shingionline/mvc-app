<?php

namespace App\Controllers;

use Core\View;
use Core\Controller;

class Home extends Controller
{
    public function indexAction()
    {
        View::renderTemplate('Home/index.html', [
            'name'    => 'Dave',
            'colours' => ['red', 'green', 'blue']
        ]);
    }

    public function before()
    {
    }

    public function after()
    {
        }

}