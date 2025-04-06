<?php
session_start();

$email = strip_tags($_POST['email']);
$id = strip_tags($_POST['id']);
$username = strip_tags($_POST['username']);
$role = strip_tags($_POST['role']);

if (isset($email) && isset($id) && isset($username) && isset($role)) {
    if ($email == "admin@gmail.com" && $id == 1 && $username == "admin" && $role == "admin") {
        $_SESSION['user'] = $email;
        header("Location:Admin/adminhome.php");
    } else {
        header("Location:home.php");
    }
}
