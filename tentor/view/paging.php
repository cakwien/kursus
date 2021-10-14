<?php

if (!empty($p)) {
    if ($p == "home") {
        require_once('home.php');
    } elseif ($p == "kelas") {
        require_once('kelas_detail.php');
    } elseif ($p == "user") {
        require_once('useraccount.php');
    }
} else {
    header('location:?to=home');
}
