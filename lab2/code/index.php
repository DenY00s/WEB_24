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