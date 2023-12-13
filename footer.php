
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        footer {
            width: 100%;
            height: 100px;
            background-color: #ffffff;
            border-top: 1px solid #ddd;
            padding: 10px 0;
        }

        .footer-content {
            text-align: center;
        }

        .footer-logo {
            width: 100px;
            height: 100px;
        }

        .footer-links {
            margin-top: 10px;
        }

        .footer-links li {
            list-style: none;
            display: inline-block;
            margin-right: 10px;
        }

        .footer-links a {
            color: #4DA6FF;
            text-decoration: none;
            list-style: none;
        }

        .footer-scroll {
            position: fixed;
            bottom: 0;
            right: 0;
            width: 40px;
            height: 40px;
            background-color: #000;
            color: #fff;
            text-align: center;
            line-height: 40px;
            cursor: pointer;
        }
        .icon-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 300px;
            margin: 20px auto;
        }

        .icon-link {
            color: black; 
            font-size: 36px; 
            text-decoration: none; 
}

.icon-link:hover {
    color: blue; /* Màu của icon khi rê chuột vào */
}

    </style>
  </head>
<body>
    <div class="icon-container">
        <a href="link-to-your-facebook-profile" target="_blank" class="icon-link"><i class="fab fa-facebook"></i></a>
        <a href="link-to-your-tiktok-profile" target="_blank" class="icon-link"><i class="fab fa-tiktok"></i></a>
        <a href="link-to-your-youtube-channel" target="_blank" class="icon-link"><i class="fab fa-youtube"></i></a>
        <a href="link-to-your-instagram-profile" target="_blank" class="icon-link"><i class="fab fa-instagram"></i></a>
    </div>

  <footer>
        <div class="footer-content">
            <center><img src="images/logo.jpg" class="footer-logo" alt="Logo" style= "width: 50px; height: 50px"></center>
            <ol class="footer-links">
                <li><a href="#">Liên hệ</a></li>
                <li><a href="#">Chính sách bảo mật</a></li>
                <li><a href="#">Điều khoản và điều kiện</a></li>
            </ol>
        </div>
        <div class="footer-scroll">
            <a href="#top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </footer>
</body>
</html>