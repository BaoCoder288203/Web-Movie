<?php
        
        // Truy vấn để lấy các poster phim
        $sql1 = "SELECT anhNen,noiDungPhim,soDiemPhim,thoiLuongPhim,namRaMat,tenPhim FROM PHIM";
        $result = $conn->query($sql1);

        $movies = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $movies[] = $row;
            }
        }
        // Lấy năm hiện tại
        $currentYear = date('Y');

        $sql2 = "SELECT tenTheLoai FROM THELOAI";
        $result2 = $conn->query($sql2);

        $categories = [];
        if ($result2->num_rows > 0) {
            while ($row = $result2->fetch_assoc()) {
                $categories[] = $row;
            }
        }

        $sql3 = "SELECT DISTINCT namRaMat FROM PHIM";
        $result3 = $conn->query($sql3);

        $years = [];
        if ($result3->num_rows > 0) {
            while ($row = $result3->fetch_assoc()) {
                $years[] = $row;
            }
        }
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
                if ($movie['namRaMat'] == $currentYear && !empty($movie['anhNen'])): ?>
            <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                <?php $backdropPath = "https://image.tmdb.org/t/p/w1280" . $movie['anhNen']; ?>
                <img src="<?= htmlspecialchars($backdropPath) ?>" class="d-block w-100" alt="<?= $movie['tenPhim']?>">
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