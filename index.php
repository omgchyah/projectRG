<?php

require_once "app/models/DataBase.php";
//Llama a la base de datos

if(!isset($_GET["c"])) {
    require_once "app/controllers/HomeController.php";
    $controller = new HomeController();
    call_user_func(array($controller, "Home"));
} else {
    //https://localhost/PHP/projectTest/?c=home
    $controller = $_GET["c"];
    require_once "app/controllers/".$controller."Controller.php";
    $controller = ucwords($controller)."Controller";
    $controller = new $controller;
    $action = isset($_GET["a"]) ? $_GET["a"] : "Home";
    call_user_func(array($controller,$action));
}