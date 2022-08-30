<?php

class Controller
{
    public $new;
    public function view($viewURL, $data = null)
    {
        include_once "view/" . $viewURL . ".php";
    }
    public function model($modelURL)
    {
        include_once "model/Model".$modelURL.".php";
        $model = "Model".$modelURL;
        $this->new = new $model;
    }
}
