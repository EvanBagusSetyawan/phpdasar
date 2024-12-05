<?php

$mahasiswa = [
    ["Evan Bagus", "00000000", "Rekayasa Perangkat Lunak", "Email"],
    ["Bagus", "00000003", "Teknik komputer dan jaringan", "bagus@gmail.com"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) :?>
    <ul>
        <li>Nama :<?= $mhs[0]; ?></li>
        <li>NISN :<?= $mhs[1]; ?></li>
        <li>Jurusan :<?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>