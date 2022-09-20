<?php

$answer = null;

do {
    echo "В каком году произошло крещение Руси? \n";
    echo "Варианты ответов: \n";
    echo "810 \n";
    echo "988 \n";
    echo "740 \n";
    $answer = readline("Введите ответ: ");
} while ($answer != "810" && $answer != "988" && $answer != "740");
if ($answer == "810" || $answer == "740") {
    echo "Ответ не правильный.\n";
} else {
    echo "Поздравляю Вы ответили правильно!!!\n";
}