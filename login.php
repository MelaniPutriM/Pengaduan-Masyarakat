<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="login">
            <h1>Login</h1>
            <form action="login_proses.php" method="POST">
                <hr>
                <p>Layanan Pengaduan Masyarakat</p>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Username" required><br>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required><br>
                <button type="submit" name="login">Login</button>
            </form>
            <p>Belum memiliki akun? <a href="register.php">Register</a></p>
        </div>
        <div class="right">
            <img src="gambar/gb.png" alt="">
        </div>
    </div>
</body>
</html>
