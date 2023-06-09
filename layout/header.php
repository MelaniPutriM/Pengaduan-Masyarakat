<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        box-sizing: border-box;
    }
    .header {
        width:100%;
        height: 13vh;
        background: #000942;
        padding-left: 11%;
        padding-right: 8%;
    }
    .top-nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 30px 0 15px;
        border-bottom: 1px solid #bababa;
    }
    .top-nav ul li{
        list-style: none;
        display: inline-block;
        margin-right: 30px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .top-nav ul li a{
        text-decoration: none;
        color: #fff;
        font-size: 15px;
    }
    .button {
        background: #e91e63;
        color: #fff;
        border: 0;
        outline: 0;
        border-radius: 30px;
        padding: 10px 20px;
        cursor: pointer;
    }
    </style>
</head>
<body>
    <div class="header">
        <div class="top-nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="complaints.php">Daftar Pengaduan</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <a href="login.php" class="button">Login</a>
</div>
</div>
</body>
</html>