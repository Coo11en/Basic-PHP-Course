<?php
echo "Угадаю название пальца по цифре\nполученной в результате счета пальцев\nот большого в сторону мизинца\nне считая один палец два раза\n";

do {
    $number = readline("Введите получившееся число: ");
} while (!is_numeric($number) || !($number > 0));



switch (true) {
    case $number == 1 || ($number%8) == 1:
       echo "Это большой палец\n";
       break;
    case $number == 2 || ($number%8) == 0 || ($number%8) == 2:
        echo "Это указательный палец\n";
        break;
    case $number == 3 || $number == 7 || ($number%8) == 3 || ($number%8) == 7:
        echo "Это средний палец\n";
        break;
    case $number == 4 || $number == 6 || ($number%8) == 4 || ($number%8) == 6:
        echo "Это безимянный палец\n";
        break;
    case $number == 5 || ($number%8) == 5:
        echo "Это мизинец\n";
        break;
    default:
        echo "А это точно палец??\n";
        break;
};
