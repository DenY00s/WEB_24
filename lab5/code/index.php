<!DOCTYPE html>
<html>
<head>
    <title>Добавить объявление</title>
</head>
<body>
<form action="save.php" method="post">
    Email: <input type="email" name="email" required><br>
    Заголовок: <input type="text" name="title" required><br>
    Описание: <textarea name="description" required></textarea><br>
    Категория: <input type="text" name="category" required><br>
    <input type="submit" value="Добавить">
</form>
</body>
</html>