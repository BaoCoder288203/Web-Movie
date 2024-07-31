<?php
// Bật hiển thị lỗi
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

set_time_limit(300); // Tăng thời gian thực thi lên 300 giây (5 phút)

require '../config.php';
require '../connectDB.php';

$apiKey = '98a2a64b29e9bd8166136cd45510218b';
$baseApiUrl = "https://api.themoviedb.org/3/movie/popular?api_key=$apiKey&language=en-US&page=";

// Chèn thể loại vào bảng THELOAI
$genresApiUrl = "https://api.themoviedb.org/3/genre/movie/list?api_key=$apiKey&language=en-US";
$response = file_get_contents($genresApiUrl);
if ($response === FALSE) {
    $_SESSION['message'] = "Error fetching genres from API.";
    header('Location: CheckInsert.php');
    exit();
}

$genresData = json_decode($response, true);
if ($genresData === NULL) {
    $_SESSION['message'] = "Error decoding genres JSON response.";
    header('Location: CheckInsert.php');
    exit();
}

if (isset($genresData['genres'])) {
    foreach ($genresData['genres'] as $genre) {
        $maTheLoai = $genre['id'];
        $tenTheLoai = $conn->real_escape_string($genre['name']);

        $sql = "INSERT INTO THELOAI (maTheLoai, tenTheLoai)
                VALUES ('$maTheLoai', '$tenTheLoai')
                ON DUPLICATE KEY UPDATE tenTheLoai='$tenTheLoai'";

        if ($conn->query($sql) !== TRUE) {
            $_SESSION['message'] = "Error inserting genre into THELOAI: " . $conn->error;
            header('Location: CheckInsert.php');
            exit();
        }
    }
}

// Chèn phim vào bảng PHIM và Phim_TheLoai
$page = 1;
$totalPages = 5; // Giới hạn số trang để chỉ lấy 100 bộ phim (5 trang x 20 bộ phim mỗi trang)

while ($page <= $totalPages) {
    $apiUrl = $baseApiUrl . $page;
    $response = file_get_contents($apiUrl);
    if ($response === FALSE) {
        $_SESSION['message'] = "Error fetching data from API.";
        header('Location: CheckInsert.php');
        exit();
    }

    $data = json_decode($response, true);
    if ($data === NULL) {
        $_SESSION['message'] = "Error decoding JSON response.";
        header('Location: CheckInsert.php');
        exit();
    }

    $movies = $data['results'];

    foreach ($movies as $movie) {
        $maPhim = $movie['id'];
        $tenPhim = $conn->real_escape_string($movie['title']);
        $noiDungPhim = $conn->real_escape_string($movie['overview']);
        $soDiemPhim = $movie['vote_average'];
        $namRaMat = substr($movie['release_date'], 0, 4);
        $anhBia = $conn->real_escape_string("https://image.tmdb.org/t/p/w500" . $movie['poster_path']);
        $yeuThich = 0; // Mặc định là chưa yêu thích

        $sql = "INSERT INTO PHIM (maPhim, tenPhim, noiDungPhim, soDiemPhim, namRaMat, anhBia, yeuThich)
                VALUES ('$maPhim', '$tenPhim', '$noiDungPhim', '$soDiemPhim', '$namRaMat', '$anhBia', '$yeuThich')
                ON DUPLICATE KEY UPDATE tenPhim='$tenPhim', noiDungPhim='$noiDungPhim', soDiemPhim='$soDiemPhim', namRaMat='$namRaMat', anhBia='$anhBia', yeuThich='$yeuThich'";

        if ($conn->query($sql) !== TRUE) {
            $_SESSION['message'] = "Error inserting movie into PHIM: " . $conn->error;
            header('Location: CheckInsert.php');
            exit();
        }

        if (isset($movie['genre_ids'])) {
            foreach ($movie['genre_ids'] as $maTheLoai) {
                $sql = "INSERT INTO Phim_TheLoai (maPhim, maTheLoai)
                        VALUES ('$maPhim', '$maTheLoai')
                        ON DUPLICATE KEY UPDATE maPhim='$maPhim', maTheLoai='$maTheLoai'";

                if ($conn->query($sql) !== TRUE) {
                    $_SESSION['message'] = "Error inserting record into Phim_TheLoai: " . $conn->error;
                    header('Location: CheckInsert.php');
                    exit();
                }
            }
        }
    }

    $page++;
}

$_SESSION['message'] = "All data inserted successfully.";
header('Location: CheckInsert.php');
exit();
?>
