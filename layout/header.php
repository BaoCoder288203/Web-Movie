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
<?php require '../config.php';
    require '../connectDB.php'; ?>

<body>
    <?php 
    // Xóa dấu / trước và sau chuỗi 
    $request_uri = trim($_SERVER['REQUEST_URI'], '/');

    // Cắt chuỗi dựa vào dấu / thành 1 array
    $temp = explode('/', $request_uri);

    // Lấy tên module (trang) từ URL
    $moduleName = $temp[0];
    ?>
    <header id="header">
        <div class="container d-flex justify-content-center align-items-center justify-content-between">
            <i class="fa-solid fa-bars"></i>
            <div class="menu">
                <div class="header-menu d-flex justify-content-center align-items-center justify-content-between">
                    <img src="../upload/logo.png" alt="">
                </div>
                <div class="main-menu align-items-center">
                    <ul>
                        <p>Menu</p>
                        <li><a class="<?= $moduleName == '' ? 'active' : '' ?>" href="/"><i
                                    class="fa-solid fa-house"></i>Home</a></li>
                        <li><a class="<?= $moduleName == 'old-movie' ? 'active' : '' ?>" href="../layout/oldFilm.php"><i
                                    class="fa-solid fa-tv"></i>Series movies</a></li>
                    </ul>
                    <ul>
                        <p>Function</p>
                        <li><a class="<?= $moduleName == '' ? 'active' : '' ?>" href="/"><i
                                    class="fa-solid fa-door-open"></i>Create room</a></li>
                        <li><a class="<?= $moduleName == '' ? 'active' : '' ?>" href="/"><i
                                    class="fa-solid fa-rectangle-list"></i>List movie</a></li>
                    </ul>
                    <ul>
                        <p>Setting</p>
                        <li><a class="<?= $moduleName == 'faq' ? 'active' : '' ?>" href="/"><i
                                    class="fa-solid fa-circle-question"></i>FAQ</a></li>
                        <li><a class="<?= $moduleName == 'account' ? 'active' : '' ?>" href="/"><i
                                    class="fa-solid fa-image-portrait"></i>Account</a></li>
                    </ul>
                </div>
            </div>
            <div class="header-right d-flex justify-content-center align-items-center justify-content-between">
                <div class="search d-flex justify-content-center align-items-center">
                    <form action="search.php" method="get">
                        <input type="text">
                    </form>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div class="information d-flex justify-content-center align-items-center">
                    <img class="mr-2" src="../upload/5f37bf13ba1f1faae18f64fbddb988b2.ico" alt="">
                    <i class="fa-solid fa-caret-down"></i>
                </div>
            </div>
        </div>
    </header>