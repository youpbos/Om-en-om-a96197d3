<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <table name="checkerboard">
        <?php
        for ($i = 0; $i <= 8; $i++) {
            echo "<tr>";
            for ($collom = 1; $collom <= 8; $collom++) {
                $totaal = $collom + $i;
                if ($totaal % 2 == 0) {
                    echo "<td height=100px width=100px bgcolor=#000000></td>";
                } else {
                    echo "<td height=100px widht=100px bgcolor=#FFFFF></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>