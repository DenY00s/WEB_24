<?php

//Буду обращаться к себе в третьем лице, можете не обращать внимания
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
$num_languages = 4; // количество языков программирования
$months = 11; // количество месяцев обучения
$days_per_month = 16; // количество дней в месяце

// Вычисление общего количества дней, и то если Мэг не соврала...
$days = $months * $days_per_month;

// Вычисление среднего количества дней на изучение каждого языка
$days_per_language = $days / $num_languages;

// Вывод грустного результата
echo "Average days spent learning each language: $days_per_language<br>";
// степень
echo 8 ** 2;
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
// Даны переменные $a=10 и $b=3. Найдите остаток от деления $a на $b.
$a = 10;
$b = 3;
$remainder = $a % $b;
echo "Остаток от деления $a на $b: $remainder<br>";

// Даны переменные $a и $b. Проверьте, что $a делится без остатка на $b.
$a = 10;
$b = 5;
if ($a % $b == 0) {
    echo "Делится: " . $a / $b . "<br>";
} else {
    echo "Делится с остатком: " . $a % $b . "<br>";
}

// Возведите 2 в 10 степень. Результат запишите в переменную $st.
$st = pow(2, 10);
echo "2 в 10 степени: $st<br>";

// Найдите квадратный корень из 245.
$sqrt_245 = sqrt(245);
echo "Квадратный корень из 245: $sqrt_245<br>";

// Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. Найдите корень из суммы квадратов его элементов.
$array = [4, 2, 5, 19, 13, 0, 10];
$sum_of_squares = 0;
foreach ($array as $element) {
    $sum_of_squares += $element * $element;//вроде похоже на то, что в видео было
}
$sqrt_sum_of_squares = sqrt($sum_of_squares);
echo "Корень из суммы квадратов элементов массива: $sqrt_sum_of_squares<br>";

// Найдите квадратный корень из 379 и округлите результат.
$sqrt_379 = sqrt(379);
echo "Квадратный корень из 379: " . round($sqrt_379) . ", " . round($sqrt_379, 1) . ", " . round($sqrt_379, 2) . "<br>";

// Найдите квадратный корень из 587 и округлите результат в большую и меньшую сторону.
$sqrt_587 = sqrt(587);
$result = ['floor' => floor($sqrt_587), 'ceil' => ceil($sqrt_587)];
echo "Квадратный корень из 587: " . json_encode($result) . "<br>";

// Даны числа 4, -2, 5, 19, -130, 0, 10. Найдите минимальное и максимальное число.
$numbers = [4, -2, 5, 19, -130, 0, 10];
$min = min($numbers);
$max = max($numbers);
echo "Минимальное число: $min, Максимальное число: $max<br>";

// Выведите на экран случайное число от 1 до 100.
$random_number = rand(1, 100);// хорошо, что здесь не надо таймнулл брать как в питоне, ибо раздражает, но здесь я так понимаю это уже включено в саму функцию...
echo "Случайное число от 1 до 100: $random_number<br>";

// Заполните массив 10-ю случайными числами.
$random_array = [];
for ($i = 0; $i < 10; $i++) {
    $random_array[] = rand();
}
echo "Массив из 10 случайных чисел: " . implode(", ", $random_array) . "<br>";

// Даны переменные $a и $b. Найдите модуль разности $a и $b.
$a = 7;
$b = 12;
$absolute_difference = abs($a - $b);
echo "Модуль разности $a и $b: $absolute_difference<br>";

// Дан массив в числами, к примеру [1, 2, -1, -2, 3, -3].
// Создайте из него новый массив так, чтобы отрицательные числа стали положительными.
$array = [1, 2, -1, -2, 3, -3];
$new_array = [];
foreach ($array as $element) {
    $new_array[] = abs($element);
}
echo "Новый массив: " . json_encode($new_array) . "<br>";//видимо так и не применю ту_ловер как в видео, но и так моя работа уже много чего повидала...

// Дано число, например 30. Сделайте массив делителей этого числа.
$number = 30;
$divisors = [];
for ($i = 1; $i <= $number; $i++) {
    if ($number % $i == 0) {
        $divisors[] = $i;
    }
}
echo "Делители числа $number: " . implode(", ", $divisors) . "<br>";

// Дан массив [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]. Должен вывести пятерку, вот бы и на экзамене...
// Сколько первых элементов массива нужно сложить, чтобы сумма получилась больше 10.
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$elements_count = 0;
foreach ($array as $element) {
    $sum += $element;
    $elements_count++;
    if ($sum > 10) {
        break;
    }
}
echo "Количество элементов для суммы больше 10: $elements_count<br>";

function printStringReturnNumber($string) {
    echo $string;
    return 61; // Просто возвращаем какое-то числовое значение (в данном случае 61-номер моего любимого футболиста, секрет какого, ибо я и так много наговорил, надеюсь вы меня не осудите, ибо я хотел сделать свою лабораторку самой оригинальной из всех, когда-нибудь я обязательно в комментариях напишу стих)
}

echo "<br>";

$my_num = printStringReturnNumber("Hello, I'm Denis!"); // Вызываем функцию и записываем возвращаемое значение в переменную $my_num

echo "<br>Returned number: $my_num<br>";
echo "<br>Функции:<br>";

// Функция increaseEnthusiasm()
function increaseEnthusiasm($string) {
    return $string . "!";
}

// Функция repeatThreeTimes()
function repeatThreeTimes($string) {
    return $string . $string . $string;
}

// Функция cut
function cut($string, $length = 10) {
    return substr($string, 0, $length);
}

// Вызов функции increaseEnthusiasm() с произвольной строкой моего имени
$result1 = increaseEnthusiasm("Denis");
echo "Результат increaseEnthusiasm(): $result1<br>";

// Вызов функции repeatThreeTimes() с произвольной строкой
$result2 = repeatThreeTimes("World");
echo "Результат repeatThreeTimes(): $result2<br>";

// Вызов функции increaseEnthusiasm() с результатом вызова repeatThreeTimes()
$result3 = increaseEnthusiasm(repeatThreeTimes("Test"));
echo "Результат вызова функции increaseEnthusiasm() с результатом вызова repeatThreeTimes(): $result3<br>";

// Функция для суммирования цифр числа, честно не понял, правильно ли я делаю, могу исправить, но я художник я так вижу
function sumDigits($number) {
    $sum = 0;
    while ($number > 0 || $sum > 9) {
        if ($number == 0) {
            $number = $sum;
            $sum = 0;
        }
        $sum += $number % 10;
        $number = (int)($number / 10);
    }
    return $sum;
}

// Пример использования функции sumDigits()
$myvelocityfrombus = 987654321;
echo "Сумма цифр числа $myvelocityfrombus: " . sumDigits($myvelocityfrombus) . "<br>";
echo "<br>Массивы:<br>";

// Заполнение массива 'x', 'xx', 'xxx', ...
$array = [];
for ($i = 1; $i <= 5; $i++) {
    $array[] = str_repeat('x', $i);
}
echo "Заполненный массив: " . json_encode($array) . "<br>";

// Функция arrayFill
function arrayFill($value, $count) {
    $result = [];
    for ($i = 0; $i < $count; $i++) {
        $result[] = $value;
    }
    return $result;
}

// Пример использования функции arrayFill
$newArray = arrayFill('x', 5);
echo "Результат вызова функции arrayFill(): " . json_encode($newArray) . "<br>";

// Двумерный массив с числами
$numbersArray = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($numbersArray as $subArray) {
    $sum += array_sum($subArray);
}
echo "Сумма элементов двумерного массива: $sum<br>";

// Создание массива [[1, 2, 3], [4, 5, 6], [7, 8, 9]]
$newArray = [];
$count = 1;
for ($i = 0; $i < 3; $i++) {
    $subArray = [];
    for ($j = 0; $j < 3; $j++) {
        $subArray[] = $count++;
    }
    $newArray[] = $subArray;
}
echo "Созданный массив: " . json_encode($newArray) . "<br>";

// Умножение элементов массива и сложение результатов
$userArray = [2, 5, 3, 9];
$result = ($userArray[0] * $userArray[1]) + ($userArray[2] * $userArray[3]);
echo "Результат умножения и сложения: $result<br>";

// Создание массива $Denis и вывод фамилии, имени и отчества
$Denis = [
    'name' => 'Denis',
    'surname' => 'Novikov',
    'patronymic' => 'Mikhailovich'
];
echo "Фамилия, имя и отчество: " . $Denis['surname'] . " " . $Denis['name'] . " " . $Denis['patronymic'] . "<br>";

// Создание массива $date и вывод даты в формате год-месяц-день
$date = [
    'year' => date('08'), //вряд ли я успею доделать это сегодня, поэтому, как говорится лучше поздно, чем никогда, поздравляю вас с 8 марта!
    'month' => date('03'),
    'day' => date('2024')
];
echo "Текущая дата: " . $date['year'] . "-" . $date['month'] . "-" . $date['day'] . "<br>";

// Подсчет количества элементов в массиве
$arr = ['a', 'b', 'c', 'd', 'e'];
echo "Количество элементов в массиве \$arr: " . count($arr) . "<br>";

// Вывод последнего и предпоследнего элементов массива
echo "Последний элемент массива \$arr: " . end($arr) . "<br>";
prev($arr);
echo "Предпоследний элемент массива \$arr: " . current($arr) . "<br>";

//Пошел новый день...
// 1. Функция, которая возвращает true, если сумма двух чисел больше 10, иначе возвращает false:
function isSumGreaterThanTen($num1, $num2) {
    return ($num1 + $num2 > 10) ? true : false;
}

// Пример вызова функции
$result1 = isSumGreaterThanTen(5, 6); // true
$result2 = isSumGreaterThanTen(2, 3); // false
echo "Результат для (5, 6): " . ($result1 ? 'true' : 'false') . "<br>";
echo "Результат для (2, 3): " . ($result2 ? 'true' : 'false') . "<br>";

// 2. Функция, которая возвращает true, если два числа равны, иначе возвращает false:
function areNumbersEqual($num1, $num2) {
    return ($num1 == $num2) ? true : false;
}

// Пример вызова функции
$result3 = areNumbersEqual(5, 5); // true
$result4 = areNumbersEqual(2, 3); // false
echo "Результат для (5, 5): " . ($result3 ? 'true' : 'false') . "<br>";
echo "Результат для (2, 3): " . ($result4 ? 'true' : 'false') . "<br>";

// 3. Переписанный код в сокращенной форме:
$test = 0;
echo ($test == 0) ? 'верно' : '';
// 4. Проверка числа в переменной $age и вывод сообщения в зависимости от условий:
$age = 55; // Пример числа
if ($age < 10 || $age > 99) {
    echo "Число не попадает в диапазон от 10 до 99";
} else {
    $sum = array_sum(str_split($age));
    if ($sum <= 9) {
        echo "Сумма цифр однозначна: $sum";
    } else {
        echo "Сумма цифр двузначна: $sum";
    }
}
echo "<br>";

// 5. Проверка массива на наличие 3 элементов и вывод суммы, если условие выполняется:
$arr = [1, 2, 3]; // Пример массива
if (count($arr) == 3) {
    echo "Сумма элементов массива: " . array_sum($arr);
}
echo "<br>";

// 6. Рисование пирамиды с 20 рядами:
for ($i = 1; $i <= 20; $i++) {
    echo str_repeat('x', $i) . "<br>";
}
// 7. Найти среднее арифметическое элементов массива без использования цикла:
$array = [1, 2, 3, 4, 5]; // Пример массива
$average = array_sum($array) / count($array);
echo "Среднее арифметическое: $average<br>";

// 8. Найти сумму чисел от 1 до 100 без использования цикла:
$sum = (1 + 100) / 2 * 100;
echo "Сумма чисел от 1 до 100: $sum<br>";

// 9. Получить массив с квадратными корнями чисел из исходного массива без использования цикла:
$array = [1, 4, 9, 16]; // Пример массива
$result = array_map('sqrt', $array);
print_r($result);
echo "<br>";

// 10. Заполнить массив числами от 1 до 26 так, чтобы ключами этих чисел были буквы английского алфавита:
$alphabet = range('a', 'z');
$numbers = range(1, 26);
$result = array_combine($alphabet, $numbers);
print_r($result);
echo "<br>";

// 11. Найти сумму пар чисел в строке без использования цикла:
$str = '1234567890'; // Пример строки
$sum = array_sum(str_split($str, 2));
echo "Сумма пар чисел: $sum<br>";
//Спасибо за внимание
