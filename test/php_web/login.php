<?php
session_start();

if ($_SESSION['login'] == true) {
    header('Location: member.php');
    exit();
}

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['username'] == 'affan' && $_POST['password'] == 'leafa') {
        $_SESSION['login'] = true;
        $_SESSION['username_login'] = 'affan';
        header('Location: member.php');
        exit();
    } else {
        $error = "Login Gagal";
    }
}
