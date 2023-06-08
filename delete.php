<?php
require_once "db.php";
$db = new DB();
$db->connect();

$id = $_GET['id'];

$query = mysqli_query($db->con, "DELETE FROM complaints WHERE id='$id'");

if ($query) {
    header("location: complaints.php");
} else {
    header("location: complaints.php");
}

$db->disconnect();
?>
