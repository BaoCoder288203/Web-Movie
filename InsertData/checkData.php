<?php
require '../config.php';
require '../connectDB.php';

$apiKey = '98a2a64b29e9bd8166136cd45510218b';
$baseApiUrl = "https://api.themoviedb.org/3/movie/popular?api_key=$apiKey&language=en-US&page=";

$page = 1;
$totalPages = 1;

while ($page <= $totalPages) {
    $apiUrl = $baseApiUrl . $page;
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
        $anhBia = $conn->real_escape_string("https://image.tmdb.org/t/p/w500" . $movie['poster_path']);
        $maTheLoai = isset($movie['genre_ids'][0]) ? $movie['genre_ids'][0] : null; // Giả định chỉ lấy thể loại đầu tiên
        $yeuThich = 0; // Mặc định là chưa yêu thích

        $sql = "INSERT INTO phim (maPhim, tenPhim, noiDungPhim, soDiemPhim, namRaMat, anhBia, maTheLoai, yeuThich)
                VALUES ('$maPhim', '$tenPhim', '$noiDungPhim', '$soDiemPhim', '$namRaMat', '$anhBia', '$maTheLoai', '$yeuThich')
                ON DUPLICATE KEY UPDATE tenPhim='$tenPhim', noiDungPhim='$noiDungPhim', soDiemPhim='$soDiemPhim', namRaMat='$namRaMat', anhBia='$anhBia', maTheLoai='$maTheLoai', yeuThich='$yeuThich'";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['error'] = 'Record inserted successfully in PHIM';
            header('Location: index.php');
            exit();
        } else {
            $_SESSION['error'] = 'Error inserting record in PHIM: " . $conn->error';
            header('Location: index.php');
            exit();
        }
    }
    $page++;
    $_SESSION['error'] .= $page;
}
// Đóng kết nối
$conn->close();
?>