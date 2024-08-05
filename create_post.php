<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.html');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $filename = 'posts.txt';
    $currentContent = file_get_contents($filename);
    $currentContent .= "عنوان: " . $title . "\n";
    $currentContent .= "محتوا: " . $content . "\n";
    $currentContent .= "------------------------\n";
    file_put_contents($filename, $currentContent);

    // هدایت به صفحه مدیریت یا صفحه تایید
    header('Location: admin.php');
    exit;
}
?>
