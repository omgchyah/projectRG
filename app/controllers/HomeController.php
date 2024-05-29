<?php

//llamar modelos de tasques
require_once "app/models/Task.php";

class HomeController {

    private $model;
    public function __construct() {
       $this->model = new Task();

    //require_once "app/views/home/index.php";
    }


    public function Home() {
        //Calling the database
        //$db = DataBase::connect(); No es necesario porque ya se conecta en el construct de Task
        //calling styles CSS

        $tasks = $this->model->getTasks();

        //Orders matters
        require_once "app/views/header.php";
        require_once "app/views/home/index.php";
        require_once "app/views/footer.php";

    }


}