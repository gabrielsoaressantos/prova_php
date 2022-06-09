<?php 
    $class = $_REQUEST["class"];
    $method = $_REQUEST["method"];

    $class .= "Controller";

    require_once "../controller/".$class.".class.php";

    $object = new $class();
    $object->$method();

    /*header("Location: view/inicio.php")*/
