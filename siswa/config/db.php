<?php
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