<?php

class admin{
    function login($con,$username,$password){
        $q=mysqli_query($con,"Select * from admin where username = '$username' and password = '$password'");
        $qcek = mysqli_fetch_array($q);

        if(!empty($qcek))
        {
            session_start();
            $_SESSION['username'];
            header('location:'.base_url().'');
        }else
        {
            header('location:' . base_url() . '?login=fail');
        }
    }
}