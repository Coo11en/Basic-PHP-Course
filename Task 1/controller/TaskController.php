<?php
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';

$user = null;
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];

} else {
    header("Location: /");
    die();
}


$taskProvider = new TaskProvider();
//    $f1 =$_POST;
//var_dump($f1);
if (isset($_POST['task'])) {
    var_dump(1111);
    ['task' => $task] = $_POST;
    $taskProvider->addTask(new Task($task));
    header("Location: /?controller=tasks");

    die();
} else {

    require_once 'view/view.php';
}

$tasks = $taskProvider->getUndoneList();

require_once 'view/view.php';