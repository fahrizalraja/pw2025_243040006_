<?php
//Array Associative
// Array yang indexnya berupa string yang ber-asisiasi dengan tiap elemen
$mahasiswa = [
    [
        'nama' => 'Fahrizal',
        'nim' => '243040006',
        'email' => 'fhrzlrja@gmail.com',
        'jurusan' => 'Teknik Informatika'
    ],
    [
        'nama' => 'ken',
        'nim' => '243040037',
        'email' => 'ken@gmail.com',
        'jurusan' => 'Teknik Informatika'
    ]

];
var_dump($mahasiswa);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>Nama: <?= $m['nama']; ?></li>
            <li>NIM: <?= $m['nim']; ?></li>
            <li>Email: <?= $m['email']; ?></li>
            <li>Jurusan: <?= $m['jurusan']; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>