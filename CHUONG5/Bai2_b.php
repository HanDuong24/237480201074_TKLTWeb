<form method="post">
    Họ tên: <input type="text" name="hoten"><br><br>
    Ngày sinh: <input type="text" name="ngaysinh"><br><br>
    Lớp: <input type="text" name="lop"><br><br>
    Điểm: <input type="text" name="diem"><br><br>

    <input type="submit" value="Hiển thị">
</form>

<?php
    if(isset($_POST["hoten"])) {
        echo "<h3>Thông tin sinh viên</h3>";
        echo "Họ tên: ".$_POST["hoten"]."<br>";
        echo "Ngày sinh: ".$_POST["ngaysinh"]."<br>";
        echo "Lớp: ".$_POST["lop"]."<br>";
        echo "Điểm: ".$_POST["diem"]."<br>";
    }
?>