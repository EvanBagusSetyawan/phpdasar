<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa"); 

// koneksi ke database
// $conn = mysqli_connect("localhost", "root", "", "phpdasar");


// ambil data dari tabel mahasiswa / query data mahasiswa
// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() : mengembalikan array numerik
// mysqli_fetch_assoc() : mengembalikan array associative
// mysqli_fetch_array() : mengembalikan keduanya
// mysqli_fetch_object() : mengembalikan object

// $mhs = mysqli_fetch_row($result);
// var_dump($mhs[3]);

// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs['nama']);
// }

// $mhs =mysqli_fetch_object($result);
// var_dump($mhs->nama);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">


        <tr>
            <th>No.</th>
            <th>aksi</th>
            <th>gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $row):?>
            <tr>
                <td><?php echo $i; ?></td>
                <td>
                    <a href="">ubah</a> |
                    <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick ="return confirm('apakah anda yakin boss?');">hapus</a>
                </td>
                <td><img src="img/<?php echo $row['gambar']; ?>" alt=""></td>
                <td><?php echo $row["nrp"]; ?></td>
                <td><?php echo $row["nama"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</body>
</html>