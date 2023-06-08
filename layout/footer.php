<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
        }

        body {
            font-family: 'Segoe UI';
            font-weight: 200;
            background-color: #ededed;
            display: flex;
            flex-direction: column;
        }

        .footer {
            padding: 15px 0;
            background-color: #fff;
            background: #666b8d;
            margin-top: auto;
        }

        .footer .social {
            text-align: center;
            padding-bottom: 25px;
            color: #4b4c4d;
        }

        .footer .social a {
            font-size: 24px;
            color: inherit;
            border: 1px solid #ccc;
            width: 40px;
            height: 40px;
            line-height: 38px;
            display: inline-block;
            text-align: center;
            border-radius: 50%;
            margin: 0 8px;
            opacity: 0.75;
        }

        .footer .social a:hover {
            opacity: 0.9;
        }

        .footer ul {
            margin-top: 0;
            padding: 0;
            list-style: none;
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 0;
            text-align: center;
        }

        .footer ul a {
            color: inherit;
            text-decoration: none;
            opacity: 0.8;
        }

        .footer ul li {
            display: inline-block;
            padding: 0 15px;
        }

        .footer ul li a:hover {
            opacity: 1;
        }

        .footer .copyright {
            margin-top: 15px;
            text-align: center;
            font-size: 13px;
            color: #aaa;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <section class="footer">
        <div class="social">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
        </div>

        <ul class="list">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Service</a>
            </li>
            <li>
                <a href="#">Terms</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
        </ul>
        <p class="copyright">
            Layanan Pengaduan @2023
        </p>
    </section>
</body>
</html>
