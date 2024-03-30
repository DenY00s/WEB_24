<!DOCTYPE html>
<html lang="en">
<head>
    <title>Доска объявлений</title>
</head>
<body>
<form action="save_post.php" method="post">
    <label for="email">Email:</label>
    <input type="email" name="email" required><br><br>

    <label for="category">Категория:</label>
    <select name="category">
        <?php
        $folders = array("cars", "homes", "others");
        foreach ($folders as $folder) {
            echo "<option value='$folder'>$folder</option>";
        }
        ?>
    </select><br><br>

    <label for="title">Заголовок объявления:</label>
    <input type="text" name="title" required><br><br>

    <label for="text">Текст объявления:</label><br>
    <textarea name="text" rows="4" cols="50" required></textarea><br><br>

    <input type="submit" value="Добавить">
</form>
</body>
</html>
