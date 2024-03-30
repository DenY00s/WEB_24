<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display User Information</title>
</head>
<body>
<h2>Ваши данные:</h2>
<p>Фамилия: <?php echo $_SESSION['last_name']; ?></p>
<p>Имя: <?php echo $_SESSION['first_name']; ?></p>
<p>Возраст: <?php echo $_SESSION['age']; ?></p>
<a href="index_t2.b.php">Изменить данные</a>
</body>
</html>