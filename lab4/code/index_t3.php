<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Доска объявлений</title>
</head>
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
        $idSheet = "1gLG3a6Jb41nSH528wkfSy4ObFbmK93FITGF_S5q4VXU";
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
    require __DIR__ . "/vendor/autoload.php";
    $client = new Google_Client();
    $client->setApplicationName('WEB');
    $client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
    $client->setAccessType('offline');
    try
    {
        $client->setAuthConfig(__DIR__ . 'web-lab-422214-4be8898e61f5.json');
    }
    catch (\Google\Exception $e)
    {
        echo "Ошибка!\n";
    }
    $service = new Google_Service_Sheets($client);
    $sheetID = "1sqD2bb63yP-HTXuHtXvBcv6_k_FcEtamjRtTdn731MY";
    ?>

    <table border="1" width="60%" cellpadding="5">
        <thead>
        <?php
        $range1 = "Property!A1:D1";
        $res1 = null;
        try
        {
            $res1 = ($service->spreadsheets_values->get($sheetID, $range1))->getValues();
        }
        catch (\Google\Service\Exception $e)
        {
            echo "Ошибка при получении заголовков в таблицу\n";
        }
        if (null != $res1)
        {
            foreach ($res1 as $row)
            {
                foreach ($row as $item)
                    echo "<th>$item</th>";
            }
        }
        ?>
        </thead>
        <tbody>
        <?php
        $range2 = "Property!A2:D999";
        $res2 = null;
        try
        {
            $res2 = ($service->spreadsheets_values->get($sheetID, $range2))->getValues();
        }
        catch (\Google\Service\Exception $e)
        {
            echo "Ошибка при получении данных в таблицу\n";
        }
        if (null != $res2)
        {
            foreach ($res2 as $row)
            {
                echo "<tr>";
                foreach ($row as $item)
                {
                    echo "<td>", $item, "</td>";
                }
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>