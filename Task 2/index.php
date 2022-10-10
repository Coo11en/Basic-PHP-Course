<?php

require_once "Task.php";
require_once "User.php";
require_once "Comment.php";
require_once "TaskService.php";

//$comment = new Comment();
$taskService = new TaskService();
$user = new User('Woollen', 'Coolen@yandex.ru');
$task = new Task($user, 'Task 11111', 3);


TaskService::addComment($user, $task, 'Привет!!!!!!!!!!!!!!!!!!!!!');
TaskService::addComment($user, $task, 'Goodbay?????????');

//var_dump($comment);
//var_dump($taskService);
//var_dump($user);
var_dump($task);