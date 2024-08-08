<?php
//kết nối

$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
if ($conn->connect_error) {
    die("Kết nối thất bại, vui lòng thử lại sau " . $conn->connect_error);
} else {
    // echo "Kết nối thành công.\n"; // Debugging line to check database connection
    mysqli_set_charset($conn, "utf8");
}