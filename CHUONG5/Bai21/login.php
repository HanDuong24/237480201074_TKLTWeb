<?php
    session_start();

    $valid_user = "user1";
    $valid_email = "user1@gmail.com";
    $valid_password = "abcd1234";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($username === $valid_user && $email === $valid_email && $password === $valid_password) {
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            echo "<h1 style='font-family: Arial; color: #007bff; padding: 3px; text-align: center;'>Trang xử lý thông tin đăng nhập</h1><hr>";
            echo "<p>Thông tin đăng nhập hợp lệ</p>";
            echo "<form action='mainpage.php' method='get'><button type='submit' style='width: 20%; padding: 10px; background-color: #007bff; border: none; border-radius: 5px; color: #fff; font-weight: bold; cursor: pointer;'>Trang chính</button></form>";
        } else {
            echo "<h1>Trang xử lý thông tin đăng nhập</h1><hr>";
            echo "<p>Thông tin đăng nhập không hợp lệ</p>";
            echo "<a href='login.html'><button type='button'>Thử lại</button></a>";
        }
    }
?>
