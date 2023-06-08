<!DOCTYPE html>
<html>
<head>
    <title>Buat Pengaduan Baru</title>
    <link rel="stylesheet" type="text/css" href="css/create.css">
    </head>
<body>
    <?php
    include "layout/header.php"
    ?>
     <div class="hea">
     <h1>Buat Pengaduan Baru</h1>    
    </div>
    <div class="cont">
        <form action="store.php" method="POST">
            <textarea name="isi_pengaduan" placeholder="Isi Pengaduan" required></textarea><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <?php
    include "layout/footer.php"
    ?>
</body>
</html>