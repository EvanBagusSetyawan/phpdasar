<?php
// user-defined function adalah fungsi yang kita bikin sendiri 
function salam($waktu, $nama) {
    return "Selamat $waktu, $nama";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan function</title>
</head>
<body>
    <h1><?php echo salam("Sore", "evan"); ?></h1>
</body>
</html>