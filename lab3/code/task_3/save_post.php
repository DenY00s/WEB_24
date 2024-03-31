<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $text = $_POST['text'];

    // Проверка на пустые поля
    if (empty($email) || empty($category) || empty($title) || empty($text)) {
        die("Пожалуйста, заполните все поля.");
    }

    $folder_path = "catigories/$category";
    if (!file_exists($folder_path)) {
        die("Категория \"$category\" не существует.");
    }

    $file_path = "$folder_path/$title.txt";
    $data = "$email\n$text";

    // Запись информации в файл
    if (false === file_put_contents($file_path, $data)) {
        die("Не удалось добавить объявление.");
    }

    echo "Объявление успешно добавлено.";
} else {
    die("Ошибка: Недопустимый метод запроса.");
}
?>