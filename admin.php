<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SEESION['loggedin'] != true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدیریت</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>مدیریت</h1>
    <form id="postForm">
        <input type="text" id="title" placeholder="عنوان" required>
        <textarea id="content" placeholder="محتوا" required></textarea>
        <button type="submit">ایجاد پست</button>
    </form>
    <div id="posts">
        <h2>پست‌ها</h2>
    </div>
    <script src="js/app.js"></script>
</body>
</html>