<?php

if (!empty($_GET['p'])) {
    $p = strtolower($_GET['p']);

    if ($p == "login") 
    {
        if (!empty($_POST['email']) && !empty($_POST['password']))
        {
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            
            $user->login($con, $email, $password);
        }
        include('view/login.php');
    } 

    elseif ($p == "logout") {
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
