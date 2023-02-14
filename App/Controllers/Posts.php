<?php

namespace App\Controllers;

use Core\View;
use Core\Controller;

class Posts extends Controller
{
    public function indexAction()
    {
        View::renderTemplate('Posts/index.html');
    }

    public function addNewAction()
    {
        echo 'Hello from the addNew action in the Posts controller!';
    }

    public function editAction()
    {
        echo 'Hello from the edit action in the Posts controller!';
        echo '<p>Route parameters: <pre>' .
            htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
    }

}