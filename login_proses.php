<?php
session_start();
require_once "db.php";

$db = new DB();

if ($db->connect()) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($db->con, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    $data = mysqli_fetch_assoc($query);

    if ($data) {
        $_SESSION['username'] = $data['username'];
        header("location: index.php");
        exit();
    } else {
        header("location: login.php");
        exit();
    }
}

$db->disconnect();
?>
