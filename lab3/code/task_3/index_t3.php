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

<br><br>
<table border="1">
    <tr>
        <th>Email</th>
        <th>Категория</th>
        <th>Заголовок</th>
        <th>Текст объявления</th>
    </tr>
    <?php
    // Чтение и отображение объявлений из файлов
    $categories = array("cars", "homes", "others");
    foreach ($categories as $category) {
        $folder_path = "catigories/$category/";
        if (is_dir($folder_path)) {
            $files = scandir($folder_path);
            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..' && is_file($folder_path . $file)) {
                    $data = file("$folder_path$file");
                    echo "<tr>";
                    echo "<td>$data[0]</td>";       // Email
                    echo "<td>$category</td>";      // Категория
                    echo "<td>$file</td>";          // Заголовок
                    echo "<td>$data[1]</td>";       // Текст объявления
                    echo "</tr>";
                }
            }
        }
    }
    ?>
</table>
</body>
</html>