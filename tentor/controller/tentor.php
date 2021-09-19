<?php

    if (!empty($_GET['to']))
    {
        $to = strtolower($_GET['to']);
        
    }else
    {
        
        include('view/login.php');
    }
?>