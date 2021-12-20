<?php

//KONEKSI KE DATABASE
$hostDB         = "localhost";
$usernameDB      = "root";
$passwordDB      = "";
$namaDB         = "kursus";

$con = mysqli_connect($hostDB, $usernameDB, $passwordDB, $namaDB);

//CEK KONEKSI
if (mysqli_connect_error()) {
   echo "GAGAL";
   die;
}

//SET TIMEZONE
date_default_timezone_set('Asia/Jakarta');
    

?>