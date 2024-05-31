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

    public function createTask() {
        // Check if all required POST parameters are set
        /*if (!isset($_POST["task_name"]) || !isset($_POST["task_descrip"]) || !isset($_POST["user_id"])) {
            die("Missing required POST parameters.");
        }*/


        $task = new Task();

        //$task->get_task_id($_GET["task_id"]);
        $task->set_task_name($_POST["task_name"]);
        $task->set_task_description($_POST["task_descrip"]);
        $task->set_task_user_id($_POST["user_id"]);

        $this->model->insertTask($task);

        header ("location:?c=task");
        exit;
    }

    public function FormUpdate() {


        if(isset($_GET['id'])) {
            $t = $this->model->getAll($_GET['id']);

        }

        require_once "app/views/header.php";
        require_once "app/views/tasks/update.php";
        require_once "app/views/footer.php";

    }

    public function updateTask() {

        $task = new Task();

        //$task->get_task_id($_GET["task_id"]);
        $task->set_task_name($_POST["task_name"]);
        $task->set_task_description($_POST["task_descrip"]);
        $task->set_task_user_id($_POST["user_id"]);
        $task->set_task_user_id($_GET["user_id"]);

        $this->model->insertTask($task);

        header ("location:?c=task");
        exit;
    }
    
}