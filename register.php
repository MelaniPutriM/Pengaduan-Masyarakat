<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
    <div class="container">
    <div class="register">
    <h1>Register</h1>
    <form action="register_proses.php" method="POST">
    <hr>
        <p>Layanan Pengaduan Masyarakat</p>
        <label for="">Username</label>
        <input type="text" name="username" placeholder="Username" required><br>
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Password" required><br>
        <label for="">Nama Lengkap</label>
        <input type="text" name="name" placeholder="Nama Lengkap" required><br>
        <button type="submit">Register</button>
        <?php
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            
            if ($error == "username_taken") {
                echo "<div id='error-notification'>Username telah terdaftar</div>";
            } else if ($error == "registration_failed") {
                echo "<div id='error-notification'>Registrasi gagal. Mohon coba lagi.</div>";
            }
        }
        if (isset($_GET['success'])) {
            $success = $_GET['success'];
            
            if ($success == "registration_successful") {
                echo "<div id='success-notification'>Registrasi berhasil. Silakan masuk menggunakan akun baru Anda.</div>";
            }
        }
        ?>


    </form>
    <p>Sudah memiliki akun? <a href="login.php">Login</a></p>
    </div>
    </div>
    <script type="text/javascript">
    setTimeout(function(){
        document.getElementById('error-notification').style.display = 'none';
        document.getElementById('success-notification').style.display = 'none';
    }, 5000);
    </script>

</body>
</html>


