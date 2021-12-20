<?php

    include('config/db.php');

    include('mod/rahasia.php');
    
    include('mod/user.php');
    $user = new user;

    include('mod/tentor.php');
    $tentor = new tentor;

    include ('mod/kelas.php');
    $kelas = new kelas;

    include('mod/materi.php');
    $materi = new materi;

    include('mod/daftar.php');
    $daftar = new daftar;

    include('mod/tagihan.php');
    $tagihan = new tagihan;

    include('mod/harga.php');
    $harga = new harga;

    include('mod/pembayaran.php');
    $pembayaran = new pembayaran;

 


    include('routing/routing.php');

?>