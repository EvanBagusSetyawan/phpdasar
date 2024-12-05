<?php

// Selengkapnya ada di php.net

// echo date ("l");
// L untuk menampilkan hari saja

// echo date ("d");
// d untuk menampilkan tanggal

// echo date ("M");
// M untuk menampilkan bulan

// echo date ("Y");
// Y untuk menampilkan tahun

// echo date ("l, d-M-Y")
// untuk menmpilkan semuanaya




// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januarai 1970
// echo time ();

// echo date ("l", time()+172800); 
// atau
// echo date ("l", time() +60*60*24*2 );
// untuk mengetahui 2 hari yang akan datang 
// 172800 adalah detik 2 hari kedepan
// cara kedua untuk memudahkan kita untuk tidak menghitung sendiri

// echo date ("l-d-M-Y", time()-60*60*24*100)
// l-d-M-Y untuk melihat hari, tanggal, bulan, tahun
// tanda (-) untuk mengetahui hari/tanggal/bulan/tahun yang telah berlalu



// mktime
// membuat detik sendiri
// mktime (0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo mktime(0, 0, 0, 8, 1, 2008);
// untuk mengetahui detik yang terjadi sejak 1 januari 1970 sampai 1 agustus 2008
// echo date("l", mktime(0, 0, 0, 8, 1, 2008));
// untuk mengrtahui hari apa pada 1 agustus 2008



// strtotime
// echo strtotime ("1 aug 2008");
// echo date("l", strtotime ("1 august 2008"));


?>