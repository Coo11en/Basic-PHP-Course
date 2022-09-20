<?php

$numberTasks = readline("Сколько запланированно задач на день? ");
$task = "Иван, сегодня у вас запланировано " . $numberTasks . " приоритетных задачи на день: \n";
for ($number = 1; $numberTasks >= $number; ++$number) {
    $taskNew = readline("Какая задача стоит перед вами сегодня? \n");
    $timeTask = readline("Сколько примерно времени эта задача займет? \n");
    $task = $task."- ".$taskNew." (".$timeTask.=")\n";
}
echo $task;