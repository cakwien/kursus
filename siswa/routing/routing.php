<?php

// KONEKSI DATABASE==============================================
include('config/db.php');
// ==============================================================



if (!empty($_GET['p'])) {
    $p = strtolower($_GET['p']);

    if ($p == "login") {
        include('view/login.php');
    } elseif ($p == "logout") {
        session_start();
        session_destroy();
        header('location:?p=login');
    }

    elseif ($p=="home")
    {
        include('view/index.php');
    }

    else{
        include('view/index.php');
    }




}
