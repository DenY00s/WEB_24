<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['last_name'] = $_POST['last_name']; // изменено last_name
    $_SESSION['first_name'] = $_POST['first_name']; // изменено first_name
    $_SESSION['age'] = $_POST['age'];
    header("Location: secondindex_t2.b.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Your Information</title>
</head>
<body>
<div>
    <form action="index_t2.b.php" method="post"> <!-- изменено на index_t2.b.php -->
        <label>
            Введите Вашу фамилию:
            <input name="last_name" type="text" placeholder="Фамилия">
        </label>
        <label>
            Введите Ваше имя:
            <input name="first_name" type="text" placeholder="Имя">
        </label>
        <label>
            Введите Ваш возраст:
            <input name="age" type="text" placeholder="Возраст">
        </label>
        <input type="submit">
    </form>
</div>
</body>
</html>