<?php
$number = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$b = array_map(function ($value) {
    if (($value % 2) > 0) {
        return ($value . ' - нечетное');
    } else {
        return ($value . ' - четное');
    }
}, $number);
print_r($b);