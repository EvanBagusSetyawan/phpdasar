<?php
// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam  PHP
$nama = "evan"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo "$nama" ?></h1>
    <p><?php echo "ini adalah paragraf"?></p>
    atau
    <?php
        echo"<h1>Halo, Selamat Datang Evan</h1>"
    ?>
</body>
</html>