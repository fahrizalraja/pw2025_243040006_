<?php
// Date 
// (untuk menampilkan tanggal dengan format tertentu)
// echo date("l, d-M-Y");

// Time 
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejal 1 Januari 1970
// waktu mundur - maju +
// echo date("l, d M Y", time() - 60 * 60 * 24 * 100);

// mktime
// membuat sendiri detik
// mktime (0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo date("l", mktime(0, 0, 0, 7, 17, 2005));

// strtotime
// echo date("l", strtotime("17 juli 2005"));