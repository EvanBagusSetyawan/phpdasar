<?php

require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum

// ambil data di url
$id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;
// Pastikan id valid sebelum query
if ($id > 0) {
    // Query data mahasiswa berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id");
}


if ( isset($_POST["submit"]) ) {
    


    // cek apakah data sudah berhasil di tambahkan tau tidak
    if (ubah ($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'latihan1.php';
            </script>
        ";
    } else {
        echo "
        <script>
                alert('data gagal diubah');
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
    <title>ubah data mahasiswa</title>
</head>
<body>
    <h1>ubah data mahasiswa</h1>
    

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required value = "<?= $mhs["nrp"]; ?>"; >
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value = "<?= $mhs["nama"]; ?>";>
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" required value = "<?= $mhs["email"]; ?>";>
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required value = "<?= $mhs["jurusan"]; ?>";>
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" id="gambar" value = "<?= $mhs["gambar"]; ?>";>
            </li>
            <li>
                <button type="Submit" name="submit">ubah data!</button>
            </li>
        </ul>
    </form>
</body>
</html>