<?php


// Доступ по ссылке
$very_bad_unclear_name = "15 chicken wings";
$order = &$very_bad_unclear_name;
$order .= " and fries for Denis Novikov";
echo "\nYour order is: $very_bad_unclear_name.";


