<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Web Pengaduan Masyarakat</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<?php
include "layout/header.php";
?>
<div class="container">
    <div class="content">
        <h1>Layanan Pengaduan</h1>
        <?php if (isset($_SESSION['username'])) { ?>
            <p>Selamat datang, <?php echo $_SESSION['username']; ?>! Silakan ajukan pengaduan Anda di sini.</p>
            <form action="store.php" method="POST">
                <label for="isi_pengaduan">Isi Pengaduan:</label>
                <textarea name="isi_pengaduan" id="complaint" rows="5" required></textarea>
                <button type="submit">Kirim</button>
            </form>
        <?php } else { ?>
            <p>Silakan <a href="login.php" style="color: white;">login</a> untuk mengakses layanan pengaduan.</p>
        <?php } ?>
    </div>
</div>
<?php
include "layout/footer.php";
?>
</body>
</html>
