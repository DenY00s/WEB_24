<?php
include_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];

    $database = new Database();
    $db = $database->getConnection();

    $query = "INSERT INTO ad (email, title, description, category) VALUES (:email, :title, :description, :category)";
    $stmt = $db->prepare($query);

    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':category', $category);

    if ($stmt->execute()) {
        echo "Объявление успешно добавлено! <a href='index.php'>Добавить еще</a> | <a href='list.php'>Список объявлений</a>";
    } else {
        echo "Ошибка при добавлении объявления. <a href='index.php'>Попробовать снова</a>";
    }
}
?>