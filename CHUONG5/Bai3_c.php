<?php
    do{
        $Sx = rand(1,100);
        $Sy = rand(1,100);
    }
    while($Sx <= $Sy);

    echo "<h2>PHÉP TOÁN (Sx > Sy)</h2>";

    echo "Sx = $Sx <br>";
    echo "Sy = $Sy <br><br>";

    echo "Cộng: ".($Sx + $Sy)."<br>";
    echo "Trừ: ".($Sx - $Sy)."<br>";
    echo "Nhân: ".($Sx * $Sy)."<br>";
    echo "Chia: ".($Sx / $Sy)."<br>";
    echo "Chia dư: ".($Sx % $Sy)."<br>";
?>