<?php
// Если форма отправлена, перекидываем на ARS.php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include "ARS.php";
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>alexusMailer GUI</title>
</head>
<body>
    <h2>alexusMailer – отправка писем</h2>
    <form method="POST" action="ARS.php" enctype="multipart/form-data">
        <label>📧 Получатели (по одному на строку):</label><br>
        <textarea name="to" rows="5" cols="60" placeholder="user1@example.com\nuser2@example.com" required></textarea><br><br>

        <label>✉️ Тема письма:</label><br>
        <input type="text" name="subject" size="60" required><br><br>

        <label>📝 Текст письма:</label><br>
        <textarea name="text" rows="10" cols="60" required></textarea><br><br>

        <label>📎 Прикрепить файл:</label><br>
        <input type="file" name="attachment"><br><br>

        <input type="submit" value="🚀 Отправить письмо">
    </form>
</body>
</html>
