<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $text = $_POST['text'];

    // Проверка на пустые поля
    if (empty($email) || empty($category) || empty($title) || empty($text)) {
        die("Пожалуйста, заполните все поля.");
    }

    // Создание категорий, если они не существуют
    if (!file_exists($category)) {
        mkdir($category);
    }

    $file = "$category/$title.txt";
    $data = "$email\n$text";

    // Запись информации в файл
    file_put_contents($file, $data);

    echo "Объявление успешно добавлено.";
} else {
    echo "Ошибка: Недопустимый метод запроса.";
}
?>
