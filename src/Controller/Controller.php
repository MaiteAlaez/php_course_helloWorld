<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class Controller
{
    private $model;
    private $view;

    public function __construct() {
        $this->model = new Model();
        $this->view = new View($this->model);
    }

    public function onLoad() {

        $action = 'action';

        if (isset($_GET[$action]) && !empty($_GET[$action])) {
            $inside_action = $_GET[$action];
        }
        else {
            $inside_action = 'none';
        }

        if ($inside_action == 'mouseButtonPressed') {
            $this->model->setMessage('Updated Hello World!');
        }
        else {
            // nothing happens
        }

        $html = $this->view->buildHtml();

        return new Response($html);
    }
}
