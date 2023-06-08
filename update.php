<?php
// Koneksi ke database
require_once "db.php";
$db = new DB();
$db->connect();

// Mendapatkan data dari form pengaduan yang diupdate
$id = $_POST['id'];
$isi_pengaduan = $_POST['isi_pengaduan'];

// Mengupdate data pengaduan di database
$query = mysqli_query($db->con, "UPDATE complaints SET isi_pengaduan='$isi_pengaduan' WHERE id='$id'");

if ($query) {
    // Jika update berhasil, kembali ke halaman daftar pengaduan
    header("location: complaints.php");
} else {
    // Jika update gagal, kembali ke halaman edit pengaduan
    header("location: edit.php?id=$id");
}

$db->disconnect();
?>
