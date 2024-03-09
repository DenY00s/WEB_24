<?php


// Доступ по ссылке
$very_bad_unclear_name = "15 chicken wings";
$order = &$very_bad_unclear_name;
$order .= " and fries for Denis Novikov";
echo "\nYour order is: $very_bad_unclear_name.";

// Числа
$integer_variable = 5;
echo "<br>";
echo $integer_variable;
echo "\n";
$float_variable = 3.14;
echo $float_variable;
echo "<br>";
echo (10 + 2);

// Расходы в прошлом и этом месяце
$last_month = 1187.23;
$this_month = 1089.98;

$expenses_difference = $last_month - $this_month;
echo "<br>Difference in expenses between last month and this month: $expenses_difference<br>";

// Создание переменной и присвоение значений
$num_languages = 4; // количество языков программирования, Мэг к сожалению конкуренция в проге среди девушек очень высока, может в гуманитарий(не осуждаем)?...
$months = 11; // количество месяцев обучения проведенное в академе, ибо учись она в универе выучилась бы гораздо быстрее)
$days_per_month = 16; // количество дней в месяце, когда Мэг действительно училась, вот что значит лень, а у кого-то от силы один день выходной, у кого же....)))

// Вычисление общего количества дней, и то если Мэг не соврала...
$days = $months * $days_per_month;

// Вычисление среднего количества дней на изучение каждого языка
$days_per_language = $days / $num_languages;

// Вывод грустного результата
echo "Average days spent learning each language: $days_per_language<br>";
// степень
echo 8 ** 2; // а я хотел в кубе(((
echo "<br>"; // эт я чтоб в браузере было по царски)
// Создаем переменную и присваиваем ей любое число
$my_num = 10;

// Создаем вторую переменную и присваиваем ей значение первой переменной
$answer = $my_num;

// Используем операторы присваивания для изменения значения $answer
$answer += 2; // добавляем 2
$answer *= 2; // умножаем на 2
$answer -= 2; // вычитаем 2
$answer /= 2; // делим на 2
$answer -= $my_num; // вычитаем исходное число

// Выводим результат
echo $answer;
echo "<br>";
