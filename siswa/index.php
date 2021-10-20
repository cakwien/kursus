<?php

    include('config/db.php');

    include('mod/rahasia.php');
    
    include('mod/user.php');
    $user = new user;

    include ('mod/kelas.php');
    $kelas = new kelas;

    include('mod/materi.php');
    $materi = new materi;


    include('routing/routing.php');

?>