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

    require_once __DIR__ . '/vendor/autoload.php';
    $client = new \Google_Client();
    $client->setApplicationName('WEB');
    $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
    $client->setAccessType('offline');
    try
    {
        $client->setAuthConfig(__DIR__ . '/web-lab-422214-4be8898e61f5.json');
    }
    catch (\Google\Exception $e)
    {
        echo "Ошибка!\n";
    }
    $service = new Google_Service_Sheets($client);
    $sheetID = "1gLG3a6Jb41nSH528wkfSy4ObFbmK93FITGF_S5q4VXU";

    $range = "Property";
    $values = [[$email, $category, $title, $text],];
    $body = new Google_Service_Sheets_ValueRange(['values' => $values]);
    $lastrow = sizeof(($service->spreadsheets_values->get($sheetID, $range))->getValues()) + 1;
    $params = ['valueInputOption'=>'RAW'];
    try
    {
        $service->spreadsheets_values->update($sheetID, 'Property!A'.($lastrow), $body, $params);
    }
    catch (\Google\Service\Exception $e)
    {
        echo "Ошибка!!";
    }

} else {
    die("Ошибка: Недопустимый метод запроса.");
}
?>