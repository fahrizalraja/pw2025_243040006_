<?php
$mahasiswa = [
    [
        "Nama" => "Fahrizal Raja",
        "NRP" => "243040006",
        "Email" => "fhrzlrja@gmail.com",
        "Jurusan" => "Teknik Informatika"
    ],

    [
        "Nama" => "Axelle Vittoria Beatrix",
        "NRP" => "24300013",
        "Email" => "Axelelle@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Tugas" => [90, 80, 100]
    ],

    [
        "Nama" => "Alex Morgan",
        "NRP" => "24300017",
        "Email" => "Alexmorgan@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Tugas" => [90, 80, 100]
    ],

    [
        "Nama" => "Allexia Puttelas",
        "NRP" => "24300095",
        "Email" => "Allexiaputtelas@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Tugas" => [90, 80, 100]
    ],

    [
        "Nama" => "Becky Saureburn",
        "NRP" => "24300026",
        "Email" => "Beckysaureburn@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Tugas" => [90, 80, 100]
    ],

    [
        "Nama" => "Aitana Bontani",
        "NRP" => "24300037",
        "Email" => "Aitanabontani@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Tugas" => [90, 80, 100]
    ],

    [
        "Nama" => "Kristie Mewis",
        "NRP" => "Kristiemewis24300038",
        "Email" => "Axelelle@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Tugas" => [90, 80, 100]
    ],

    [
        "Nama" => "Sam Mewis",
        "NRP" => "24300039",
        "Email" => "Sammewis@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Tugas" => [90, 80, 100]
    ],

    [
        "Nama" => "Emily Fox",
        "NRP" => "24300040",
        "Email" => "EmilyFox@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Tugas" => [90, 80, 100]
    ],

    [
        "Nama" => "Naomi Girma",
        "NRP" => "24300041",
        "Email" => "NaomiGirma@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Tugas" => [90, 80, 100]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["Nama"]; ?></li>
            <li>NRP : <?= $mhs["NRP"]; ?></li>
            <li>Jurusan : <?= $mhs["Jurusan"]; ?></li>
            <li>Email : <?= $mhs["Email"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>