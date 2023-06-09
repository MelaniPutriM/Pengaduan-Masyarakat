<?php
require_once "db.php";
$db = new DB();
$db->connect();

$isi_pengaduan = $_POST['isi_pengaduan'];
$tanggal = date('Y-m-d');

$query = mysqli_query($db->con, "INSERT INTO complaints (isi_pengaduan, tanggal, status) VALUES ('$isi_pengaduan', '$tanggal', 'Pending')");

if ($query) {
    header("location: complaints.php");
} else {
    header("location: create.php");
}

$db->disconnect();
?>
