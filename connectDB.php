<?php
//kết nối

$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} else {
    echo "Kết nối thành công.\n"; // Debugging line to check database connection
}
mysqli_set_charset($conn, "utf8");


?>