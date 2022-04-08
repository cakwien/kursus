<?php
include('mod/kiniksi.php');
include('mod/baseurl.php');
include('mod/basic.php');
include('mod/pesan.php');

include('mod/siswa.php');
$siswa = new siswa;
include('mod/tentor.php');
$tentor = new tentor;
include('mod/kelas.php');
$kelas = new kelas;
include('mod/pembayaran.php');
$payment = new payment;
include('mod/admin.php');
$admin = new admin;



include('control/routing2.php');
?>