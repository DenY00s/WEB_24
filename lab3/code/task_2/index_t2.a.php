<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word and Character Counter</title>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Word and Character Counter</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
            }
            form {
                margin: 20px auto;
                max-width: 600px;
                padding: 10px;
                border: 2px solid #ccc;
                background-color: #fff;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }
            textarea {
                width: 100%;
                height: 100px;
                margin: 10px 0;
                padding: 5px;
                box-sizing: border-box;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 14px;
            }
            input[type="submit"] {
                padding: 5px 10px;
                background-color: #4CAF50;
                color: white;
                border: none;
                border-radius: 3px;
                cursor: pointer;
            }
            input[type="submit"]:hover {
                background-color: #45a049;
            }
            .result {
                border: 2px solid #ccc;
                padding: 10px;
                margin: 10px;
                background-color: #f9f9f9;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
    <form method="post" action="">
        <textarea name="text"></textarea>
        <br>
        <input type="submit" value="Count Words & Characters">
    </form>
    <?php
    if (isset($_POST['text'])) {
        $text = $_POST['text'];

        $words = str_word_count($text);
        $characters = strlen($text);

        echo "<div class='result'>";
        echo "Words: $words, Characters: $characters<br>";
        echo "<textarea style='width: 100%; height: 100px;' readonly>$text</textarea>";
        echo "</div>";
    }
    ?>
    </body>
    </html>
