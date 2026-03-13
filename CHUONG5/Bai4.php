<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tính toán số học</title>

        <style>
            body{
                font-family: Arial;
            }

            .khung{
                width: 420px;
                margin: 50px auto;
                border: 3px solid black;
                border-radius: 25px;
                padding: 20px;
            }

            h2{
                text-align:center;
            }

            input[type=text]{
                width:150px;
                margin-bottom:10px;
            }

            .nut{
                margin-top:10px;
            }

            .nut input{
                padding:6px 12px;
                margin-right:5px;
            }
        </style>
    </head>

    <body>
        <?php
            $a = "";
            $b = "";
            $kq = "";

            if(isset($_POST["a"])) $a = $_POST["a"];
            if(isset($_POST["b"])) $b = $_POST["b"];

            if(isset($_POST["cong"])) $kq = $a + $b;
            if(isset($_POST["tru"])) $kq = $a - $b;
            if(isset($_POST["nhan"])) $kq = $a * $b;

            if(isset($_POST["chia"])){
                if($b != 0)
                    $kq = $a / $b;
                else
                    $kq = "Không chia được";
            }

            if(isset($_POST["mod"])) $kq = $a % $b;
        ?>

        <div class="khung">
            <h2>TÍNH TOÁN SỐ HỌC</h2>
            <form method="post">
                Số thứ 1: <input type="text" name="a" value="<?php echo $a; ?>"><br>
                Số thứ 2: <input type="text" name="b" value="<?php echo $b; ?>"><br>
                Kết quả: <input type="text" value="<?php echo $kq; ?>" readonly><br>

                <div class="nut">
                    <input type="submit" name="cong" value="Cộng">
                    <input type="submit" name="tru" value="Trừ">
                    <input type="submit" name="nhan" value="Nhân">
                    <input type="submit" name="chia" value="Chia">
                    <input type="submit" name="mod" value="Mod">
                </div>
            </form>
        </div>
    </body>
</html>