<?php
require_once "db.php";
$db = new DB();
$db->connect();

$id = $_POST['id'];
$isi_pengaduan = $_POST['isi_pengaduan'];

$query = mysqli_query($db->con, "UPDATE complaints SET isi_pengaduan='$isi_pengaduan' WHERE id='$id'");

if ($query) {
    header("location: complaints.php");
} else {
    header("location: edit.php?id=$id");
}

$db->disconnect();
?>
