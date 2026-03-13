<?php
    session_start();
    if (!isset($_SESSION['username']) || !isset($_SESSION['email'])) {
        header('Location: login.html');
        exit();
    }

    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nguyễn Hoàng Tiến</title>
</head>
<body>
    <h1 style='font-family: Arial; color: #007bff; padding: 3px; text-align: center;'>TRANG CHÍNH</h1><hr>
    <p>Người dùng đã đăng nhập với tên <strong><?php echo htmlspecialchars($username); ?></strong> và Email là <strong><?php echo htmlspecialchars($email); ?></strong>.</p>
    <a href="logout.php"><button style='width: 20%; padding: 10px; background-color: #007bff; border: none; border-radius: 5px; color: #fff; font-weight: bold; cursor: pointer;'>Đăng xuất</button></a>
</body>
</html>
