<?php
include_once 'db.php';

$database = new Database();
$db = $database->getConnection();

$query = "SELECT * FROM ad";
$stmt = $db->prepare($query);
$stmt->execute();

$ads = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Список объявлений</title>
</head>
<body>
<h1>Список объявлений</h1>
<?php if (count($ads) > 0): ?>
    <ul>
        <?php foreach ($ads as $ad): ?>
            <li>
                <strong><?php echo htmlspecialchars($ad['title']); ?></strong><br>
                <?php echo nl2br(htmlspecialchars($ad['description'])); ?><br>
                <em>Категория: <?php echo htmlspecialchars($ad['category']); ?></em><br>
                <em>Дата создания: <?php echo htmlspecialchars($ad['created']); ?></em>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Нет объявлений</p>
<?php endif; ?>
<a href="index.php">Добавить объявление</a>
</body>
</html>