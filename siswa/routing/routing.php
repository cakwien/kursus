<?php
    if (empty($_GET['p']))
    {
        include('public/index.php');
    }


    else
    {
        $p=strtolower($_GET['p']);
        if ($p=="login")
        {
            include('view/login.php');
        }
    }
?>