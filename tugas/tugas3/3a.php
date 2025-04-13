<?php
function hitungluaslingkaran($r)
{
    // Rumus luas lingkaran: π * r^2
    $luas = pi() * pow($r, 2);
    return intval($luas);
}

function hitungkelilinglingkaran($r)
{
    // Rumus keliling lingkaran: 2 * π * r
    $keliling = 2 * pi() * $r;
    return  floor($keliling * 10) / 10;
}

$jLingkaran = 10;
$jKelilingLingkaran = 20;

$print = "";
$print .= "<h4><b>Menghitung Luas Lingkaran</b></h4>
            Jari-jari = " . $jLingkaran . "
            <br>
            Luas lingkaran = " . hitungluaslingkaran($jLingkaran) . " cm<sup>2</sup>
            <hr>
            <h4><b>Menghitung Keliling Lingkaran</b></h4>
             Jari-jari = " . $jKelilingLingkaran . "
            <br>
            Luas lingkaran = " . hitungkelilinglingkaran($jKelilingLingkaran) . " cm
            <hr>";
echo $print;