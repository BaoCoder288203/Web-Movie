<?php
$apiKey = '98a2a64b29e9bd8166136cd45510218b';
$genresApiUrl = "https://api.themoviedb.org/3/genre/movie/list?api_key=$apiKey&language=en-US";
$moviesApiUrl = "https://api.themoviedb.org/3/movie/popular?api_key=$apiKey&language=en-US&page=";

require '../config.php';
require '../connectDB.php';

// Lấy danh sách thể loại phim từ API và chèn vào bảng TheLoai
$response = file_get_contents($genresApiUrl);
$genresData = json_decode($response, true);

if ($genresData && isset($genresData['genres'])) {
    foreach ($genresData['genres'] as $genre) {
        $maTheLoai = $genre['id'];
        $tenTheLoai = $conn->real_escape_string($genre['name']);

        $sql = "INSERT INTO TheLoai (maTheLoai, tenTheLoai)
                VALUES ('$maTheLoai', '$tenTheLoai')
                ON DUPLICATE KEY UPDATE tenTheLoai='$tenTheLoai'";

        if ($conn->query($sql) !== TRUE) {
            echo "Error inserting record in TheLoai: " . $conn->error . "\n";
        }
    }
}

// Lấy danh sách phim từ API và chèn vào bảng PHIM
$page = 1;
$insertedMovies = 0; // Đếm số lượng phim đã chèn

do {
    $apiUrl = $moviesApiUrl . $page;
    $response = file_get_contents($apiUrl);
    $data = json_decode($response, true);

    // Lấy tổng số trang
    $totalPages = $data['total_pages'];

    // Lấy danh sách phim
    $movies = $data['results'];

    // Chèn phim vào bảng PHIM
    foreach ($movies as $movie) {
        $maPhim = $movie['id'];
        $tenPhim = $conn->real_escape_string($movie['title']);
        $noiDungPhim = $conn->real_escape_string($movie['overview']);
        $soDiemPhim = $movie['vote_average'];
        $namRaMat = substr($movie['release_date'], 0, 4);

        // Kiểm tra điều kiện năm phát hành
        if ($namRaMat < 2023) {
            continue; // Bỏ qua phim không thỏa mãn điều kiện năm phát hành
        }

        $anhBia = $conn->real_escape_string("https://image.tmdb.org/t/p/w500" . $movie['poster_path']);
        $anhNen = $conn->real_escape_string("https://image.tmdb.org/t/p/w500" . $movie['backdrop_path']);
        $thoiLuongPhim = 0; // Khởi tạo thoiLuongPhim mặc định là 0
        $yeuThich = 0; // Mặc định là chưa yêu thích

        // Lấy chi tiết phim bao gồm thời lượng
        $detailsUrl = 'https://api.themoviedb.org/3/movie/' . $maPhim . '?api_key=' . $apiKey . '&language=en-US';
        $detailsResponse = file_get_contents($detailsUrl);
        $details = json_decode($detailsResponse, true);

        if (isset($details['runtime'])) {
            $thoiLuongPhim = $details['runtime'];
        }

        $sql = "INSERT INTO PHIM (maPhim, tenPhim, noiDungPhim, soDiemPhim, namRaMat, anhBia, anhNen, thoiLuongPhim, yeuThich)
                VALUES ('$maPhim', '$tenPhim', '$noiDungPhim', '$soDiemPhim', '$namRaMat', '$anhBia', '$anhNen', '$thoiLuongPhim', '$yeuThich')
                ON DUPLICATE KEY UPDATE tenPhim='$tenPhim', noiDungPhim='$noiDungPhim', soDiemPhim='$soDiemPhim', namRaMat='$namRaMat', anhBia='$anhBia', anhNen='$anhNen', thoiLuongPhim='$thoiLuongPhim', yeuThich='$yeuThich'";

        if ($conn->query($sql) !== TRUE) {
            $_SESSION['message'] = "Error inserting record in PHIM: " . $conn->error . "\n";
            header('Location: CheckInsert.php');
            exit();
        }

        // Chèn tất cả thể loại của phim vào bảng Phim_TheLoai
        if (isset($movie['genre_ids'])) {
            foreach ($movie['genre_ids'] as $maTheLoai) {
                $sql = "INSERT INTO Phim_TheLoai (maPhim, maTheLoai)
                        VALUES ('$maPhim', '$maTheLoai')
                        ON DUPLICATE KEY UPDATE maPhim='$maPhim', maTheLoai='$maTheLoai'";

                if ($conn->query($sql) !== TRUE) {
                    $_SESSION['message'] = "Error inserting record in Phim_TheLoai: " . $conn->error . "\n";
                    header('Location: CheckInsert.php');
                    exit();
                }
            }
        }

        $insertedMovies++; // Tăng số lượng phim đã chèn

        // Dừng khi đạt 100 phim
        if ($insertedMovies >= 100) {
            break 2; // Thoát khỏi cả hai vòng lặp
        }
    }

    $page++;
} while ($page <= $totalPages);

$_SESSION['message'] = "Congratulations!". "\n";
header('Location: CheckInsert.php');
exit();

// Đóng kết nối
$conn->close();
?>