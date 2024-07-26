<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/vendor/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/vendor/fontawesome-free-5.15.1-web/css/all.min.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>NeftChill</title>
</head>

<body>
    <header id="header">
        <div class="container d-flex justify-content-center align-items-center justify-content-between">
            <i class="fa-solid fa-bars"></i>
            <div class="menu">
                <div class="header-menu d-flex justify-content-center align-items-center justify-content-between">
                    <img src="./upload/logo.png" alt="">
                </div>
                <div class="main-menu align-items-center">
                    <ul>
                        <p>Menu</p>
                        <li><a class="active" href="#"><i class="fa-solid fa-house"></i>Home</a></li>
                        <li><a href="#"><i class="fa-solid fa-tv"></i>Series movies</a></li>
                    </ul>
                    <ul>
                        <p>Function</p>
                        <li><a href="#"><i class="fa-solid fa-door-open"></i>Create room</a></li>
                        <li><a href="#"><i class="fa-solid fa-rectangle-list"></i>List movie</a></li>
                    </ul>
                    <ul>
                        <p>Setting</p>
                        <li><a href="#"><i class="fa-solid fa-circle-question"></i>FAQ</a></li>
                        <li><a href="#"><i class="fa-solid fa-image-portrait"></i>Account</a></li>
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
                    <img class="mr-2" src="./upload/5f37bf13ba1f1faae18f64fbddb988b2.ico" alt="">
                    <i class="fa-solid fa-caret-down"></i>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/upload/slide1.png" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="/upload/slide2.png" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="/upload/slide4.png" class="d-block w-100" alt="Slide 3">
                </div>
            </div>
        </div>
        <div class="container">
        </div>

    </main>
    <footer>

    </footer>
    <script src="https://kit.fontawesome.com/b563499548.js" crossorigin="anonymous"></script>
    <script src="./public/vendor/jquery-3.5.1.min.js"></script>
    <script src="./public/vendor/popper.min.js"></script>
    <script src="./public/vendor/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script src="./public/js/script.js"></script>

</html>