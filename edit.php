<!DOCTYPE html>
<html>
<head>
    <title>Edit Pengaduan</title>
    <link rel="stylesheet" type="text/css" href="css/edit.css">
</head>
<body>
    <div class="edit">
    <h1>Edit Pengaduan</h1>
    </div>
    
    <?php
    require_once "db.php";
    $db = new DB();
    $db->connect();

    $id = $_GET['id'];
    $query = mysqli_query($db->con, "SELECT * FROM complaints WHERE id='$id'");
    $data = mysqli_fetch_assoc($query);
    ?>
    <div class="conter">
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <textarea name="isi_pengaduan" placeholder="Isi Pengaduan" required><?php echo $data['isi_pengaduan']; ?></textarea><br>
        <input type="submit" value="Update">
    </form>
    </div>
    <?php
    $db->disconnect();
    ?>
</body>
</html>
