<?php 
    require '../layout/header.php';
?>

<!-- Main -->
<main>

    <!-- Slider navbar -->
    <?php 
        require '../layout/sliderNavbar.php';
    ?>

    </div>
    <div class="container">
        <div class="new-film">
            <h2>NEW</h2>
            <hr>
            <div class="list-category">
                <button class="category-button left-button-category"><i class="fa-solid fa-caret-left"></i></button>
                <ul class="categories">
                    <?php
                    foreach ($categories as $category):
                    ?>
                    <li><a href="#">
                            <?= $category['tenTheLoai'] ?>
                        </a>
                    </li>
                    <?php
                    endforeach;
                    ?>
                </ul>

                <button class="category-button right-button-category"><i class="fa-solid fa-caret-right"></i></button>
            </div>
            <div class="slider-container">
                <button class="nav-button left-button-slider">&#8249;</button>
                <div class="list-new-film">
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <button class="nav-button right-button-slider">&#8250;</button>
            </div>
        </div>
        <div class="old-film">
            <h2>MOVIE</h2>
            <hr>
            <div class="list-category">
                <button class="category-button left-button-category"><i class="fa-solid fa-caret-left"></i></button>
                <ul class="categories">
                    <?php
                    foreach ($categories as $category):
                    ?>
                    <li><a href="#">
                            <?= $category['tenTheLoai'] ?>
                        </a>
                    </li>
                    <?php
                    endforeach;
                    ?>
                </ul>
                <button class="category-button right-button-category"><i class="fa-solid fa-caret-right"></i></button>
            </div>
            <div class="sort-by">
                <h3>Sort by: </h3>
                <form action="#">
                    <button type="submit">Latest</button>
                </form>

                <div class="submit-year">
                    <button type="submit">Year <i class="fa-solid fa-sort-down"></i></button>
                    <div class="years">
                        <form action="#">
                            <?php 
                            foreach($years as $year):
                            ?>
                            <button type="submit"><?= $year['namRaMat']?></button>
                            <?php 
                            endforeach;
                            ?>
                            <!-- <button type="submit">2023</button>
                            <button type="submit">2022</button>
                            <button type="submit">2021</button>
                            <button type="submit">2020</button>
                            <button type="submit">2019</button>
                            <button type="submit">2018</button>
                            <button type="submit">2017</button>
                            <button type="submit">2016</button>
                            <button type="submit">2015</button> -->
                        </form>
                    </div>
                </div>

                <div class="submit-alpha">
                    <button type="submit">A-Z <i class="fa-solid fa-sort-down"></i></button>
                    <div class="alpha">
                        <form action="#">
                            <button type="submit">A-Z</button>
                            <button type="submit">Z-A</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="list-films">
                <div class="list-new-film ">
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="film">
                        <div class="poster-film">
                            <div class="watch-film">
                                <div class="watch-film-button">
                                    <button type="submit" class="">
                                        Watch
                                        <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                    <button type="submit" class="">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/e444/0d93/87d10a5f3b90721661aed5f8885d201c?Expires=1723420800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=j0IG2EihOhHUxdD-k2YJkD0szJdizcSBgtuJ-pPQhIjlpcwMTahBPH1kagGjvo1DgIO9n-sbfwlChLjYm2H7VoVN8opdoHAmVzP-X-XNIfX6CW2vq5J5jGYldczxPUYjJuBZ5x6LJ1tRFILEP9AZcMV4WCuKj1ALJ7cg4so9XmhKKNJ49PZrMrQvaDUlBRuOlmF9WhQlJRed7Ik2G-LuQCmMiHT24ZGclEdl529LoxmbsAqID2Da69J0jazo5KidzTWHYmO1tKg40ShXPCE62WsLGlTjvd2h6qz9Ih53DchNYam0UAGd0JF2fYIne2vtrDCVa7-mtimk7yh6gUomqA__"
                                alt="">
                        </div>
                        <p class="title-film">
                            Lorem ipsum dolor sit .
                        </p>
                        <div class="info-film">
                            <span>2024</span>
                            <div class="love-film">
                                <i class="fa-solid fa-heart"></i>
                                <p><i class="fa-solid fa-star"></i>
                                    <span class="ml-1">9.0</span>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="page-num mt-4">
                <button class="page-num-button left-button-page">&#8249;</button>
                <form action="">
                    <button class="active" type="submit">1</button>
                    <button type="submit">2</button>
                    <button type="submit">...</button>
                    <button type="submit">8</button>
                    <button type="submit">9</button>
                </form>
                <button class="page-num-button left-button-page">&#8250;</button>
            </div>
            <hr>
        </div>
    </div>
</main>

<?php 
    require '../layout/footer.php';
?> require '../layout/footer.php';
?>