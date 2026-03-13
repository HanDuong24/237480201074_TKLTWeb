<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Listbox năm</title>
</head>

<body>
    <h3>Chọn năm</h3>
    <select name="nam">
        <?php
            $date = new DateTime();
            $year = $date->format("Y");   // năm hiện tại

            for($i = 1900; $i <= $year; $i++)
            {
                echo "<option>$i</option>";
            }
        ?>
    </select>
</body>
</html>