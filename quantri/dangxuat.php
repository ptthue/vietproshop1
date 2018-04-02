<?php
session_start();

if (isset($_COOKIE['ghiNho'])) {
    setcookie('ghiNho', $email, time() - 1000000);
    header('location:index.php');
} else {
    header('location:index.php');
}
if (isset($_SESSION['email'])) {
    session_destroy();
    header('location:index.php');
} else {
    header('location:index.php');
}
?>