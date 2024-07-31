<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $apiKey = '98a2a64b29e9bd8166136cd45510218b';
//     $genresApiUrl = "https://api.themoviedb.org/3/genre/movie/list?api_key=$apiKey&language=en-US";
//     $moviesApiUrl = "https://api.themoviedb.org/3/movie/popular?api_key=$apiKey&language=en-US&page=";

    require '../config.php';
    require '../connectDB.php';
    
//     // Lấy danh sách thể loại phim từ API và chèn vào bảng TheLoai
//     $response = file_get_contents($genresApiUrl);
//     $genresData = json_decode($response, true);

//     if ($genresData && isset($genresData['genres'])) {
//         foreach ($genresData['genres'] as $genre) {
//             $maTheLoai = $genre['id'];
//             $tenTheLoai = $conn->real_escape_string($genre['name']);

//             $sql = "INSERT INTO TheLoai (maTheLoai, tenTheLoai)
//                     VALUES ('$maTheLoai', '$tenTheLoai')
//                     ON DUPLICATE KEY UPDATE tenTheLoai='$tenTheLoai'";

//             if ($conn->query($sql) !== TRUE) {
//                 echo "Error inserting record in TheLoai: " . $conn->error . "\n";
//             }
//         }
//     }

//     // Lấy và chèn tất cả các phim từ API vào bảng PHIM
//     $page = 1;

//     do {
//         $apiUrl = $moviesApiUrl . $page;
//         $response = file_get_contents($apiUrl);
//         $data = json_decode($response, true);

//         // Lấy tổng số trang
//         $totalPages = $data['total_pages'];

//         // Lấy danh sách phim
//         $movies = $data['results'];

//         // Chèn phim vào bảng PHIM
//         foreach ($movies as $movie) {
//             $maPhim = $movie['id'];
//             $tenPhim = $conn->real_escape_string($movie['title']);
//             $noiDungPhim = $conn->real_escape_string($movie['overview']);
//             $soDiemPhim = $movie['vote_average'];
//             $namRaMat = substr($movie['release_date'], 0, 4);
//             $anhBia = $conn->real_escape_string("https://image.tmdb.org/t/p/w500" . $movie['poster_path']);
//             $yeuThich = 0; // Mặc định là chưa yêu thích

//             $sql = "INSERT INTO PHIM (maPhim, tenPhim, noiDungPhim, soDiemPhim, namRaMat, anhBia, yeuThich)
//                     VALUES ('$maPhim', '$tenPhim', '$noiDungPhim', '$soDiemPhim', '$namRaMat', '$anhBia', '$yeuThich')
//                     ON DUPLICATE KEY UPDATE tenPhim='$tenPhim', noiDungPhim='$noiDungPhim', soDiemPhim='$soDiemPhim', namRaMat='$namRaMat', anhBia='$anhBia', yeuThich='$yeuThich'";

//             if ($conn->query($sql) !== TRUE) {
//                 echo "Error inserting record in PHIM: " . $conn->error . "\n";
//             }

//             // Chèn tất cả thể loại của phim vào bảng Phim_TheLoai
//             if (isset($movie['genre_ids'])) {
//                 foreach ($movie['genre_ids'] as $maTheLoai) {
//                     $sql = "INSERT INTO Phim_TheLoai (maPhim, maTheLoai)
//                             VALUES ('$maPhim', '$maTheLoai')
//                             ON DUPLICATE KEY UPDATE maPhim='$maPhim', maTheLoai='$maTheLoai'";

//                     if ($conn->query($sql) !== TRUE) {
//                         echo "Error inserting record in Phim_TheLoai: " . $conn->error . "\n";
//                     }
//                 }
//             }
//         }

//         $page++;
//     } while ($page <= $totalPages);

//     // Đóng kết nối
//     $conn->close();
// }


$apiKey = '98a2a64b29e9bd8166136cd45510218b'; // Thay YOUR_API_KEY bằng API key của bạn
$apiUrl = 'https://api.themoviedb.org/3/movie/popular?api_key=' . $apiKey . '&language=en-US&page=1';

$response = file_get_contents($apiUrl);
$data = json_decode($response, true);

if (!empty($data['results'])) {
    foreach ($data['results'] as $movie) {
        $phimID = $movie['id'];

        // Lấy chi tiết phim bao gồm thời lượng
        $detailsUrl = 'https://api.themoviedb.org/3/movie/' . $phimID . '?api_key=' . $apiKey . '&language=en-US';
        $detailsResponse = file_get_contents($detailsUrl);
        $details = json_decode($detailsResponse, true);

        if (isset($details['runtime'])) {
            $thoiLuongPhim = $details['runtime'];

            // Cập nhật thời lượng phim vào cơ sở dữ liệu
            $sql = "UPDATE PHIM SET thoiLuongPhim = ? WHERE maPhim = ?";
            $stmt = $conn->prepare($sql);
            
            if ($stmt === false) {
                die("Lỗi chuẩn bị câu lệnh: " . $conn->error);
            }

            $stmt->bind_param('ii', $thoiLuongPhim, $phimID);

            if (!$stmt->execute()) {
                echo "Lỗi: " . $stmt->error;
            } else {
                echo "Cập nhật thành công cho phim ID $phimID với thời lượng $thoiLuongPhim phút.<br>";
            }

            $stmt->close(); // Đảm bảo đóng câu lệnh sau khi thực hiện
        } else {
            echo "Không có thông tin thời lượng cho phim ID $phimID.<br>";
        }
    }
} else {
    echo "Không có phim nào được tìm thấy.<br>";
}

?>