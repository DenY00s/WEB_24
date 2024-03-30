<?php

// Задача 1: Нахождение строк по шаблону

$str = 'ahb acb aeb aeeb adcb axeb';
$pattern = '/a..b/'; // Шаблон для поиска строки с буквой 'a', двумя любыми символами, и буквой 'b'
$matches = [];

preg_match_all($pattern, $str, $matches); // Ищем строки по заданному шаблону

echo "<h2>Задача 1</h2>";
echo "<p>Исходная строка: $str</p>";
echo "<p>Найденные строки по шаблону 'a..b': ";
foreach($matches[0] as $match)
{
    echo "$match ";
}
echo "</p>";
// Задача 2: Преобразование чисел в кубы

$str2 = 'a1b2c3';
$pattern2 = '/(\d)/'; // Шаблон для поиска цифр
$replacedStr = preg_replace_callback($pattern2, function($matches) {
    return pow($matches[0], 3); // Заменяем найденное число на его куб
}, $str2);

echo "<h2>Задача 2</h2>";
echo "<p>Исходная строка: $str2</p>";
echo "<p>Измененная строка с кубами чисел: $replacedStr</p>";


?>