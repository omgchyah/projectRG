<?php

//llamar modelos de tasques
require_once "app/models/Task.php";

class TaskController {

    private $model;

    public function __construct() {
        $this->model = new Task();
    }

    public function Home() {

        $tasks = $this->model->getTasks();

        //Orders matters
        require_once "app/views/header.php";
        require_once "app/views/tasks/index.php";
        require_once "app/views/footer.php";

    }

    public function FormCreate() {

        require_once "app/views/header.php";
        require_once "app/views/tasks/form.php";
        require_once "app/views/footer.php";


    }
    
}