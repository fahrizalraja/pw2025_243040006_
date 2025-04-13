<?php
$angka = isset($_GET['angka']) ? (int)$_GET['angka'] : 0;

// Warna 
$color1 = "#C9184A";
$color2 = "#FFF0F3";

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6b</title>
    <style>
        .box {
            display: inline-block;
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            margin: 2px;
            border: 1px solid black;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <form method="get">
        <label for="angka">Masukan Angka :</label>
        <input type="number" name="angka" id="angka" required>
        <button type="submit">Tampilkan</button>
    </form>
    <br>

    <?php
    if ($angka > 0) {
        echo "<div>";

        for ($i = $angka; $i >= 1; $i--) {
            // warna selang-seling
            $color = ($i % 2 == 0) ? $color1 : $color2;

            for ($j = 1; $j <= $i; $j++) {
                echo "<div class='box' style='background-color: $color;'>$i</div>";
            }
            echo "<br>";
        }

        echo "</div>";
    }
    ?>

</body>

</html>