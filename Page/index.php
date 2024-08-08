<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/vendor/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/vendor/fontawesome-free-5.15.1-web/css/all.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>NeftChill</title>
</head>
<?php session_start(); ?>

<body>
    <?php 
    $message = '';
    if (isset($_SESSION['error'])) {
    $message = '<p>'.$_SESSION['error'].'</p>';
    unset($_SESSION['error']); // Xóa thông báo lỗi sau khi hiển thị
    }
    ?>

    <div class="container-login">

        <img src="../upload/poster_login.png" alt="">
        <div class="main-login">
            <form action="../controller/checkLogin.php" method="POST">
                <label class="message">
                    <input type="checkbox" class="alertCheckbox" autocomplete="off" />
                    <div class="alert <?= $message ? 'error' : ''?>">
                        <span class="alertClose" onclick="this.parentElement.style.display='none'">X</span>
                        <span class="alertText"><?= $message ?></span>
                    </div>
                </label>
                <h1>LOG IN</h1>
                <input type="text" name="username" placeholder="Email or Number of Phone">
                <input type="text" name="password" placeholder="Password">
                <div class="forgot-password">
                    <div class="remember">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember password</label>
                    </div>
                    <a href="#">Forgot password ?</a>
                </div>
                <button id="login-button" type="submit">Login</button>
                <div class="logout">
                    <a href="#">Are you a new person here ?</a>
                    <a href="#">Log out now ?</a>
                </div>
                <p>Login with</p>
                <div class="link-login">
                    <a href="#">
                        <img src="../upload/logos_facebook_login.png" alt="">
                        <p>FACEBOOK</p>
                    </a>
                    <a href="#">
                        <img src="../upload/logos_google_login.png" alt="">
                        <p>GOOGLE</p>
                    </a>
                </div>
            </form>
        </div>
    </div>



    <script src="https://kit.fontawesome.com/b563499548.js" crossorigin="anonymous"></script>
    <script src="../public/vendor/jquery-3.5.1.min.js"></script>
    <script src="../public/vendor/popper.min.js"></script>
    <script src="../public/vendor/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script src="../public/js/script.js"></script>

</html>