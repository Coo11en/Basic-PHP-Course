<?php

//require_once "controller/TaskController.php";
session_start();

$controller = $_GET['controller'] ?? 'login';
$routes = require 'routes.php';
var_dump($routes[$controller]);
require_once $routes[$controller] ?? Die("404");
