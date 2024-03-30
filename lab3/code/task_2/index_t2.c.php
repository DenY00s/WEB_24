<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_data = array(
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'salary' => $_POST['salary'],
        'other_info' => $_POST['other_info']
    );

    $_SESSION['user_data'] = $user_data;
    header("Location: secondindex_t2.c.php");
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
<form method="post">
    Имя: <input type="text" name="name"><br>
    Возраст: <input type="text" name="age"><br>
    Зарплата: <input type="text" name="salary"><br>
    Дополнительная информация: <input type="text" name="other_info"><br>
    <input type="submit" value="Сохранить">
</form>
</body>
</html>
