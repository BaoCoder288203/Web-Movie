<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Database</title>
</head>
<body>
    <?php
    if (isset($_SESSION['message'])) {
        echo "<p>" . $_SESSION['message'] . "</p>";
        // Xóa thông báo sau khi đã hiển thị
        unset($_SESSION['message']);
    }
    ?>

    <!-- Nội dung của trang web ở đây -->

</body>
</html>
