<?php
include('../mod/db.php');
include('../mod/utama.php');
$utama = new utama;

if (!empty($_POST['username'] && !empty($_POST['password'])))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $utama->login($con,$username,$password);
}

?>