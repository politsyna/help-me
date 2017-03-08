<?php
// Массив с возрастом.
$data = [
  0 => ['name' => 'Вася', 'age' => 19],
  1 => ['name' => 'Петя', 'age' => 23],
  2 => ['name' => 'Коля', 'age' => 21],
];
// Массив с ростом.
$height = [
  'Вася' => 182,
  'Петя' => 167,
  'Коля' => 285,
];
// Как мне посчитать сумму возрастов?
// 1. Сначала зададим пустые "хранилища".
$age_itogo = 0; // Число.
$string_names = ''; // Строчка.
$array_names = []; // Массив.
$array_info = [];

// 2. Будем перебирать все значения массива.
foreach ($data as $key => $value) {
  // 3. В текущем цикле у нас есть данные.
  $index_current = $key;
  $name_current = $value['name'];
  $age_current = $value['age'];
  // 4.1 Добавим полученный возраст к итоговому.
  $age_itogo = $age_itogo + $age_current;
  // 4.2 Допишем имя в конец строчки.
  $string_names .= $name_current;
  // 4.3 Допишем имя в конец массива.
  $array_names[] = $name_current;
  // 4.4 Соберём всю информацию по текущему человеку.
  $info_current = [
    'age' => $age_current,
    'name' => $name_current,
    'index' => $index_current,
    'height' => '???',
  ];
  // Положим $info в другие индексы.
  $array_info[$name_current] = $info_current;
}


// 5. Суммарный возраст.
print $age_itogo;

