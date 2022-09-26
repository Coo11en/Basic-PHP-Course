<?php

$students = [
  'ИТ20' => [
      'Иванов Иван' => 5,
      'Кириллов Кирилл' => 4,
      'Сидоров Владислав' => 5,
      'Егоров Виталий' => 2,
      'Хакимов Егор' => 5,
      'Кабанов Павел' => 3,
      'Соловьев Игнат' => 4,
      'Достоевский Федор' => 3,
      'Путин Владимир' => 2,
      'Зеленский Владимир' => 2,
      'Дональд Байден' => 4,
      'Юсупов Феромонт' => 3,
  ],
    'БАП20' => [
        'Абрамов Егор' => 5,
        'Сухоруков Виталий' => 4,
        'Попов Владислав' => 5,
        'Степанов Павел' => 2,
        'Пушкин Сергей' => 5,
        'Дорофеев Егор' => 2,
        'Шишкин Игнат' => 4,
        'Роговой Виталий' => 3,
        'Иванов Владислав' => 2,
        'Киреев Владимир' => 3,
        'Филиппович Игорь' => 4,
        'Юров Максим' => 5,
    ]
];
$count = 0;
$sumRating = 0;
$avg = 0;
$fullAvg = 0;
$dismissed = [];
$nameGroup = '';
foreach ($students as $group => $groupStudent) {

    $sumRating = 0;
    foreach ($groupStudent as $student => $rating) {
        $sumRating += $rating;
        if ($rating < 3) {
            $dismissed[$group][] = $student;
        }
    }
    if ($avg == 0) {
        $avg = $sumRating/count($groupStudent);
        $fullAvg = $avg;
        $nameGroup = $group;
    } elseif ($avg < $sumRating/count($groupStudent)) {
        $avg = $sumRating/count($groupStudent);
        $fullAvg = $avg;
        $nameGroup = $group;
    } else {
    $avg = $sumRating/count($groupStudent);
};
};
echo 'Группа ' . $nameGroup . ' имеет средний балл выше остальных который равен ' . $fullAvg, PHP_EOL;
foreach ($dismissed as $group => $groupStudent) {
    echo  'В группе ' . $group . ' следующие студенты имеют оценку ниже 3 и будут отчисленны: ', PHP_EOL;
    foreach ($groupStudent as $count => $student) {
        echo $student, PHP_EOL;
    }
};

print_r($dismissed);