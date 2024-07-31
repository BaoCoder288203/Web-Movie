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

<body>
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
                    <img class="mr-2" src="../upload/5f37bf13ba1f1faae18f64fbddb988b2.ico" alt="">
                    <i class="fa-solid fa-caret-down"></i>
                </div>
            </div>
        </div>
    </header>
    <main>
        <?php
        require '../config.php';
        require '../connectDB.php';

        // Truy vấn để lấy các poster phim
        $sql = "SELECT noiDungPhim,soDiemPhim,thoiLuongPhim,namRaMat,backdrop_path, tenPhim FROM PHIM ORDER BY backdrop_path DESC";
        $result = $conn->query($sql);

        $movies = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $movies[] = $row;
            }
        }
        // Lấy năm hiện tại
        $currentYear = date('Y');
        ?>


        <div id="slide">
            <div id="movieCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php
            $index = 0;
            foreach ($movies as $movie):
                if ($movie['namRaMat'] == $currentYear): ?>
                    <li data-target="#movieCarousel" data-slide-to="<?php echo $index; ?>"
                        class="<?php echo $index === 0 ? 'active' : ''; ?>"></li>
                    <?php
                    $index++;
                endif;
            endforeach;
            ?>
                </ol>
                <div class="carousel-inner">
                    <?php
            $index = 0;
            foreach ($movies as $movie):
                if ($movie['namRaMat'] == $currentYear && !empty($movie['backdrop_path'])): ?>
                    <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                        <img src="<?= $movie['backdrop_path']?>" class="d-block w-100" alt="<?= $movie['tenPhim']?>">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="carousel-content">
                                <p>Time: <?= floor($movie['thoiLuongPhim'] / 60)?>h <?= $movie['thoiLuongPhim'] % 60?>m
                                </p>
                                <p><i class="fa-solid fa-star"></i>
                                    <span><?= round($movie['soDiemPhim'],1)?></span>
                                </p>
                                <h5><?= $movie['tenPhim']?></h5>
                                <p><?= $movie['noiDungPhim']?></p>
                            </div>
                            <div class="carousel-love">
                                <form action="" method="POST">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        List
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                    $index++;
                endif;
            endforeach;
            ?>
                </div>

            </div>
        </div>

        </div>
        <div class="container">
        </div>

    </main>
    <footer>

    </footer>
    <script src="https://kit.fontawesome.com/b563499548.js" crossorigin="anonymous"></script>
    <script src="../public/vendor/jquery-3.5.1.min.js"></script>
    <script src="../public/vendor/popper.min.js"></script>
    <script src="../public/vendor/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script src="../public/js/script.js"></script>

</html>