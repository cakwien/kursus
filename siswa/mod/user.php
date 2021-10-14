<?php

class user{
    function login($con,$email,$password) // Proses Login
    {
        $qcek = mysqli_query($con,"select * from siswa where email = '$email' and password= '$password'");
        $dtcek = mysqli_fetch_array($qcek);
        if (!empty($dtcek[0]))
        {
            session_start();
            $_SESSION['id'] = $dtcek['id'];
            header('location:?p=home');
        }else   
        {
            header('location:?p=login&log=fail');
        }
    }

    function index($con,$id) // Munculkan data siswa berdasarkan id siswa
    {
        $q=mysqli_query($con,"select * from siswa where id = '$id'");
        $dt = mysqli_fetch_array($q);
        return $dt;
    }    


    function cekSession($con,$session)
    {
       
        if(empty($session))
        {
                header('location:?p=login');
        }else
        {
            $q = mysqli_query($con, "select * from siswa where id = '$session'");
            $dt = mysqli_fetch_array($q);
            return $dt;
        }

    }



    
    

    
}

?>