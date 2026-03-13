<!DOCTYPE html>
<html>
<body>
    <table border="1">
        <tr>
            <th>Số n</th>
            <th>Số n^2</th>
        </tr>

        <?php
            for($i=0;$i<=50;$i++)
            {
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>".($i*$i)."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>