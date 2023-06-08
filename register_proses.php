<?php
require_once "db.php";
$db = new DB();
$db->connect();

$namalengkap = $_POST['namalengkap'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($db->con, "SELECT * FROM users WHERE username='$username'");
if (mysqli_num_rows($query) > 0) {
    header("location: register.php?error=username_taken");
    exit();
}

$insertQuery = mysqli_query($db->con, "INSERT INTO users (namalengkap, username, password) VALUES ('$namalengkap', '$username', '$password')");

if ($insertQuery) {
    header("location: login.php?success=registration_successful");
    exit();
} else {
    header("location: register.php?error=registration_failed");
    exit();
}

$db->disconnect();
?>
