<?php

class user{
    function login($con,$email,$password,$loc)
    {
        $qcek = mysqli_query($con,"select * from siswa where email = '$email' and password= '$password'");
        $dtcek = mysqli_fetch_array($qcek);
        if (!empty($dtcek[0]))
        {
            session_start();
            $_SESSION['id'] = $dtcek['id'];
            header('location:'.$loc);
        }
    }

    function index($con,$id)
    {
        $q=mysqli_query($con,"select * from siswa where id = '$id'");
        $dt = mysqli_fetch_array($q);
        return $dt;
    }    
    
    

    
}

?>