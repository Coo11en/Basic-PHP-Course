<?php
$number = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
function math(array $value): array|int {
    $count = 0;
    array_map(function ($i){
        global $result, $max, $min, $avg, $count;
        $count++;
        if ($count == 1) {
            $max = $i;
            $min = $i;
            $avg = 0;
        } elseif ($i > $max) {
            $max = $i;
        } elseif ($i <= $min) {
            $min = $i;
        }
        $avg += $i;
        $result = $avg / $count;
        return $result;
        }, $value);
    global $result, $max, $min;
    $maxValue['max'] = $max;
    $maxValue['min'] = $min;
    $maxValue['result'] = $result;
    return $maxValue;
}
$a = math($number);
echo "Наибольшее число равно " . $a['max'], PHP_EOL . "Наименьшее число равно " . $a['min'], PHP_EOL . "Среднее арифметическое всех чисел массива равно " . $a['result'], PHP_EOL;
