<?php

    include('mod/db.php');
    include('mod/rhs.php');
    include('mod/pesan.php');

    include('mod/user.php');
    $user = new user;

    include('mod/kelas.php');
    $kelas = new kelas;

    include('mod/materi.php');
    $materi = new materi;

    include('mod/privat.php');
    $privat = new privat;

    include('mod/siswa.php');
    $siswa = new siswa;

    include('controller/tentor.php');

?>