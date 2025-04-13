<?php
//Array Bersarang / Nested Array
$mahasiswa = [
    ['Fahrizal', '243040006', 'fhrzlrja@gmail.com', 'Teknik Informatika'],
    ['david', '243040027', 'david@gmail.com', 'Teknik Informatika'],
    ['konan', '243040055', 'konan@gmail.com', 'Teknik Informatika']
];
// echo $mahasiswa[1][2];
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
            <li>Nama: <?= $m[0]; ?></li>
            <li>NIM: <?= $m[1]; ?></li>
            <li>Email: <?= $m[2]; ?></li>
            <li>Jurusan: <?= $m[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>