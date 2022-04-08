<?php
    // Define your location project directory in htdocs (EX THE FULL PATH: D:\xampp\htdocs\x-kang\simple-routing-with-php)
    // $project_location = "/oc/admin";
    // $me = $project_location;

    // // For get URL PATH
    // $r = $_SERVER['REQUEST_URI'];
    

   switch ($r) {
        case $me.'/' :
            require "view/home.php";
            break;
        case $me.'/datasiswa' :
            require "view/datasiswa.php";
            break;
        case $me.'/datakelas' :
            require "view/datakelas.php";
            break;
        default:
            http_response_code(404);
            echo "404";
            break;
    }