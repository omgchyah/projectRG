<?php

class Task {

    private $pdo;
    private $task_id;
    private $task_name;
    private $task_description;
    private $task_status;
    private $task_created_at;
    private $task_updated_at;
    private $task_user_id;

    //timer

    public function __construct(/*$pdo, $task_id, $task_name, $task_description, $task_status, $task_created_at, $task_updated_at, $task_user_id*/) {
        $this->pdo = DataBase::connect();
    }

    public function set_task_id($task_id) {
        $this->task_id = $task_id;
    }

    public function set_task_name($task_name) {
        $this->task_name = $task_name;
    }

    public function set_task_description($task_description) {
        $this->task_description = $task_description;
    }

    public function set_task_status($task_status) {
        $this->task_status = $task_status;
    }

    public function set_task_created_at($task_created_at) {
        $this->task_created_at = $task_created_at;
    }

    public function set_task_updated_at($task_updated_at) {
        $this->task_updated_at = $task_updated_at;
    }

    public function set_task_user_id($task_user_id) {
        $this->task_user_id = $task_user_id;
    }

    public function get_task_id(): int {
        return $this->task_id;
    }

    public function get_task_name(): string {
        return $this->task_name;
    }

    public function get_task_description(): string {
        return $this->task_description;
    }

    public function get_task_status() {
        return $this->task_status;
    }

    public function get_task_created_at() {
        return $this->task_created_at;
    }

    public function get_task_updated_at() {
        return $this->task_updated_at;
    }

    public function get_task_user_id() {
        return $this->task_user_id;
    }

    public function getAll($id) {
        try {
            $query = $this->pdo->query("SELECT * FROM tasks WHERE id=?;");
            $query->execute(array($id));
            $r = $query->fetch(PDO::FETCH_OBJ);
            $task = new Task();
            $task->set_task_id($r->id);
            $task->set_task_name($r->name);
            $task->set_task_description($r->descrip);
            $task->set_task_status($r->status);
            $task->set_task_created_at($r->created);
            $task->set_task_updated_at($r->updated);
            $task->set_task_user_id($r->user_id);
            
            /*
            $query = $this->pdo->prepare("SELECT SUM(tasks) as Number_tasks FROM tasks;");
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
            */

        } catch(Exception $e) {
        }

    }


    public function getTasks() {
        try {
            $query = $this->pdo->query("SELECT * FROM tasks");
            return $query->fetchall(PDO::FETCH_OBJ); 
            
            /*
            $query = $this->pdo->prepare("SELECT SUM(tasks) as Number_tasks FROM tasks;");
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
            */

        } catch(Exception $e) {
        }

    }

    public function insertTask(Task $task) {

        
        try{
            $query = "INSERT INTO tasks(name, descrip, created, updated, user_id) VALUES (?, ?, NOW(), NOW(), ?);";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute(array(
                $task->get_task_name(),
                $task->get_task_description(),
                $task->get_task_user_id()
            ));
        } catch(exception $e) {
            die($e->getMessage());
    }
}

    
}