<?php

$data = [
  0 => ['name' => 'Вася', 'age' => 19],
  1 => ['name' => 'Петя', 'age' => 23],
  2 => ['name' => 'Коля', 'age' => 21],
];

// Как мне посчитать сумму возрастов?

// 1. Сначала положим в возраст 0
$age_itogo = 0;

// 2. Будем перебирать все значения массива
foreach ($data as $key => $value) {
  // 3. Вкаждом отдельном проходе текущий возраст будет равер:
  $age_current =  $value['age'];
  // 4. Добавим полученный возраст к итоговому
  $age_itogo = $age_itogo + $age_current;
}

// 5. Суммарный возраст
print $age_itogo;
