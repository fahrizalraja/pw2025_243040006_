<?php
// $mahasiswa = [
//     ['Fahrizal raja', '243040006', 'fhrzlrja@gmail.com', 'Teknik Informatika'],
//     ['ken', '240000000', 'ken@gmail.com', 'Teknik Informatika']

// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        'nama' => 'Fahrizal Raja',
        'nrp' => '243040006',
        'email' => 'fhrzlrja@gmail.com',
        'jurusan' => 'Teknik Informatika',
        'gambar' => 'fhrzl.jpeg'
    ],
    [
        'nama' => 'ken',
        'nrp' => '240000000',
        'email' => 'ken@gmail.com',
        'jurusan' => 'Teknik Industri',
        'gambar' => 'ken.jpeg'
    ]

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs['gambar']; ?>">
            </li>
            <li>Nama : <?= $mhs['nama']; ?></li>
            <li>NRP : <?= $mhs['nrp']; ?></li>
            <li>Email : <?= $mhs['email']; ?></li>
            <li>Jurusan : <?= $mhs['jurusan']; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>