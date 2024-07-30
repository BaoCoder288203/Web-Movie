<?php 
require '../config.php';
require '../connectDB.php';

// Truy vấn để lấy các poster phim
$sql = "SELECT anhBia, tenPhim FROM PHIM";
$result = $conn->query($sql);

$movies = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $movies[] = $row;
    }
} 
?>