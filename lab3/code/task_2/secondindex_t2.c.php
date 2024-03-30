<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
</head>
<body>
<ul>
    <?php
    foreach ($_SESSION['user_data'] as $key => $value) {
        echo "<li><strong>{$key}:</strong> {$value}</li>";
    }
    ?>
</ul>
<a href="index_t2.c.php">Изменить данные</a>
</body>
</html>
