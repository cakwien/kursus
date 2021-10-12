<?php
<<<<<<< HEAD
// KONEKSI DATABASE================================
// INISIALISASI DATABASE TERLEBIH DAHULU===========
$dbname = 'kursus';
$dbuser = 'root';
$dbhost = 'localhost';
$dbpass = '';
// ================================================

// VARIABLE KONEKSI DATABASE=======================
$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
// ================================================

// CEK KONEKSI DATABASE============================
if (mysqli_connect_error())
{
    echo "Gagal Koneksi";
    die();
}
// ================================================


// SET TIMEZONE====================================
date_default_timezone_set('Asia/Jakarta');
// ================================================



?>
=======

//KONEKSI KE DATABASE
$hostDB			= "localhost";
$usernameDB		= "root";
$passwordDB		= "";
$namaDB			= "kursus";

$con = mysqli_connect($hostDB,$usernameDB,$passwordDB,$namaDB);

//CEK KONEKSI
if(mysqli_connect_error())
{
	echo "GAGAL";
	die;
}

//SET TIMEZONE
date_default_timezone_set('Asia/Jakarta');




?>

>>>>>>> cb492ad015b568ed068e53662c936e0a9c007f43
