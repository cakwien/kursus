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

    elseif ($p=="ceklogin")
    {
        session_start();
        if (empty($_SESSION['email']))
        {
            header('location:?p=login');
        }else
        {
            $emailaktif = $_SESSION['email'];
            header('location:?p=home');
        }
    }

    // elseif ($p=="daftarkelas")
    // {
    //     include('view/index.php');
    // }

    // elseif ($p=="daftarprivat")
    // {
    //     include('view/index.php');
    // }
    

    elseif ($p == "logout") {
        session_start();
        session_destroy();
        header('location:?p=login');
    }

    elseif($p=="account")
    {
        include('view/index.php');
    }

    elseif($p=="daftarkelas")
    {
        
        
        include('view/index.php');
    }





    elseif ($p=="home")
    {
        include('view/index.php');
    }

    elseif($p=="timelinekelas")
    {
        if (!empty($_GET['kel']))
        {
            $id_kelas = $_GET['kel'];
            $datakelas = $kelas->index($con, $id_kelas);
            $datatentor = $tentor->indexByKelas($con, $id_kelas);
        }

        include('view/index.php');
    }

    else{
        include('view/index.php');
    }

}
else
{
    include('view/index.php');
}
