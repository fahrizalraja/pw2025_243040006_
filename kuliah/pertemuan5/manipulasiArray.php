<?php

$hari = ["Senin", "Selasa", "Rabu"];
$angka = ["2", "4", "5", "9", "0"];
echo "Array awal : ";
echo "</hr>"; 

echo "Array setelah di Pop : ";
$hasil = array_pop($hari); // Menghapus atau mengambil elemen terakhir dari array
print_r($hari);
echo "<br>Elemen yang di pop : $hasil <hr>";

echo "Array setelah di push : ";
$hasil = array_push($hari,"Rabu", "Kamis", "Jum-at"); // Menambahkan beberapa elemen pada
print_r($hari);
echo "<hr>";

echo "Array setelah di shift : ";
$hasil = array_shift($hari); // Menghapus atau mengambil elemen pertama dari Array
print_r($hari);
echo "Elemen yang di shift : $hasil <hr>";

echo "Array setelah di Unshift : ";
$hasil = array_Unshift($hari,"Elemen", "Ditambahkan",); // Menambahkan bsatu elemen atau lebih elemen
print_r($hari);
echo "<hr>";

echo "Mengurutkan array secara menaik : ";
$hasil = rsort($angka);
print_r($angka);
echo "<hr>";

echo "Mengurutkan array secara menurun : ";
$hasil = sort($angka);
print_r($angka);
?>