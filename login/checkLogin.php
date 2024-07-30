<?php 
require '../config.php';
require '../connectDB.php';

// Bắt đầu phiên làm việc 
session_start();

// Lấy thông tin đăng nhập
$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['username']) || isset($_POST['password'])) {
    $sql = "SELECT email, matkhau, sdt FROM KH WHERE email = '$username' OR sdt = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($password === $row['matkhau']) { // Nếu bạn đang lưu mật khẩu đã mã hóa
            // Đăng nhập thành công
            $_SESSION['username'] = $row['email'] ?: $row['sdt'];
            header('Location: MainPage.php');
            exit();
        } else {
            // Mật khẩu không đúng
            $_SESSION['error'] = 'Sai mật khẩu!';
            header('Location: index.php');
            exit();
        }
    } else {
        // Không tìm thấy người dùng
        $_SESSION['error'] = 'Tên người dùng không tồn tại!';
        header('Location: index.php');
        exit();
    }
}
?>