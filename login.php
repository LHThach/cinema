<?php
include_once 'header.php';
?>

<html>

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <!--Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-swA9Q11t4o/VRa9RtMazbNJ53Z/EPrzQbhQn8HwN/CmXn5i7WaxEf8xz/5q5MWZn" crossorigin="anonymous"></script>
</head>
<style>
    input:valid {
        border: 1px solid black;
    }

    body>p {
        font-family: monospace;
        font-size: 250%;
        font-weight: normal;
        color: white;
        font-style: bold;
        justify-content: space-between;
    }

    body {
        background-image: url("images/sign2.jpg");
        -moz-background-size: cover;
        -webkit-background-size: cover;
        background-size: 100% 110vh;
        background-position: top center !important;
        background-repeat: no-repeat !important;
        background-attachment: fixed;
    }

    .form {
        background-color: #fff;
        display: block;
        padding: 1rem;
        max-width: 350px;
        border-radius: 0.5rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        height: 100%;
        margin: auto;

    }

    .form-title {
        font-size: 1.25rem;
        line-height: 1.75rem;
        font-weight: 600;
        text-align: center;
        color: #000;
    }

    .input-container {
        position: relative;
    }

    .input-container input,
    .form button {
        outline: none;
        border: 1px solid #e5e7eb;
        margin: 8px 0;
    }

    .input-container input {
        background-color: #fff;
        padding: 1rem;
        padding-right: 3rem;
        font-size: 0.875rem;
        line-height: 1.25rem;
        width: 300px;
        border-radius: 0.5rem;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    }

    .input-container span {
        display: grid;
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        padding-left: 1rem;
        padding-right: 1rem;
        place-content: center;
    }

    .input-container span svg {
        color: #9CA3AF;
        width: 1rem;
        height: 1rem;
    }

    .submit {
        display: block;
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        padding-left: 1.25rem;
        padding-right: 1.25rem;
        background-color: #4F46E5;
        color: #ffffff;
        font-size: 0.875rem;
        line-height: 1.25rem;
        font-weight: 500;
        width: 100%;
        border-radius: 0.5rem;
        text-transform: uppercase;
    }

    .signup-link {
        color: #6B7280;
        font-size: 0.875rem;
        line-height: 1.25rem;
        text-align: center;
    }

    .signup-link a {
        text-decoration: underline;
    }
</style>

<body style=" color:white;">

    <form class="form" action="includes/login.inc.php" method="POST">
        <p class="form-title">Sign in to your account</p>
        <div class="form-group input-container">
            <input class="form-control" placeholder="Tên đăng nhập/ email" type="email" name="email">
            <span class="input-group-addon">
            </span>
        </div>
        <div class="form-group input-container">
            <input class="form-control" placeholder="Mật khẩu" type="password" name="password" id="password-field">
            <span class="input-group-addon password-toggle" onclick="togglePasswordVisibility('password-field')">
            </span>
        </div>

        <button class="btn btn-primary submit" type="submit" name="submit">
            Đăng nhập
        </button>

        <p class="signup-link">
            Bạn không có tài khoản?
            <a href="signup.php">Đăng ký</a>
        </p>
    </form>
    <script>
        function togglePasswordVisibility(fieldId) {
            var passwordField = document.getElementById(fieldId);
            var fieldType = passwordField.getAttribute('type');

            // Đảo ngược giữa 'password' và 'text'
            passwordField.setAttribute('type', fieldType === 'password' ? 'text' : 'password');
        }
    </script>

</body>