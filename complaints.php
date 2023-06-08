<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pengaduan</title>
    <link rel="stylesheet" type="text/css" href="css/complaints.css">
</head>
<body>
    <?php
    include "layout/header.php"
    ?>
    <div class="content">
    <h1>Daftar Pengaduan</h1>
    <table>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Isi Pengaduan</th>
            <th>Status</th>
            <th>Tindakan</th>
        </tr>
        <?php
            // Koneksi ke database
            require_once "db.php";
            $db = new DB();
            $db->connect();

            // Mendapatkan data pengaduan
            $query = mysqli_query($db->con, "SELECT * FROM complaints");
            $no = 1;
            while ($data = mysqli_fetch_assoc($query)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['tanggal']; ?></td>
                    <td><?php echo $data['isi_pengaduan']; ?></td>
                    <td><?php echo $data['status']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
                        <a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php
            }

            $db->disconnect();
        ?>
    </table>
    </div>
</body>
</html>
