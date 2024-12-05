<?php
require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ) {
    


    // cek apakah data sudah berhasil di tambahkan tau tidak
    if (tambah ($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'latihan1.php';
            </script>
        ";
    } else {
        echo "
        <script>
                alert('data gagal ditambahkan');
                document.location.href = 'latihan1.php';
            </script>
        ";
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>
    

    <form action="" method="post">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="Submit" name="submit">Tambah data!</button>
            </li>
        </ul>
    </form>
</body>
</html>