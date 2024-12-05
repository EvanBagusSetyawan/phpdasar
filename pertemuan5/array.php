<?php

// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda

// membuat array 
// cara lama
$hari = array("senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$van = [123, "ppp", false];

// menampilkan array
// var_dump() / print_r
// var_dump($bulan);
// echo"<br>";
// print_r($hari);
// echo"<br>";

// menampilkan 1 elemen pada array
// echo $van[0];
// echo"<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "juum'at";
echo "<br>";
var_dump ($hari)

?>