<?php

class MainController extends Controller
{

    function __construct()
    {
        $this->model = new MainModel();
        $this->view = new View();
    }

    function action_index()
    {   
        $data = $this->model->get_data();
        $this->view->generate('main.php', 'template.php', $data);
    }
}