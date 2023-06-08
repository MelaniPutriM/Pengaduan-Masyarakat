<?php
// Koneksi ke database
require_once "db.php";
$db = new DB();
$db->connect();

// Mendapatkan data dari form pengaduan
$isi_pengaduan = $_POST['isi_pengaduan'];
$tanggal = date('Y-m-d');

// Menyimpan data pengaduan ke database
$query = mysqli_query($db->con, "INSERT INTO complaints (isi_pengaduan, tanggal, status) VALUES ('$isi_pengaduan', '$tanggal', 'Pending')");

if ($query) {
    // Jika penyimpanan berhasil, kembali ke halaman daftar pengaduan
    header("location: complaints.php");
} else {
    // Jika penyimpanan gagal, kembali ke halaman buat pengaduan baru
    header("location: create.php");
}

$db->disconnect();
?>
