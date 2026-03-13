<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tính USCLN và BSCNN</title>

    <style>

        body{
            font-family: Arial;
        }

        .khung{
            width:420px;
            margin:50px auto;
            border:3px solid black;
            border-radius:25px;
            padding:20px;
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
            padding:6px 15px;
            margin-right:10px;
        }
    </style>
</head>
<body>

    <?php
        $a="";
        $b="";
        $kq="";

        function USCLN($a,$b)
        {
            while($b!=0)
            {
                $r=$a%$b;
                $a=$b;
                $b=$r;
            }
            return $a;
        }

        if(isset($_POST["a"])) $a=$_POST["a"];
        if(isset($_POST["b"])) $b=$_POST["b"];

        if(isset($_POST["uscln"]))
        {
            $kq=USCLN($a,$b);
        }

        if(isset($_POST["bscnn"]))
        {
            $ucln=USCLN($a,$b);
            $kq=($a*$b)/$ucln;
        }
    ?>

    <div class="khung">
        <h2>TÍNH USCLN VÀ BSCNN</h2>

        <form method="post">
            Số thứ 1: <input type="text" name="a" value="<?php echo $a ?>"><br>
            Số thứ 2: <input type="text" name="b" value="<?php echo $b ?>"><br>
            Kết quả: <input type="text" value="<?php echo $kq ?>" readonly><br>

            <div class="nut">
                <input type="submit" name="uscln" value="USCLN">
                <input type="submit" name="bscnn" value="BSCNN"> 
            </div>
        </form>
    </div>
</body>
</html>