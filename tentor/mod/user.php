<?php
class user{
    function login($con,$email,$password)
    {
        $q=mysqli_query($con,"select * from tentor where email = '$email' and password = '$password'");
        $cek = mysqli_fetch_array($q);
        if (!empty($cek[0]))
        {
            session_start();
            $_SESSION['email'] = $email;
            header('location:?to=home');
        }
    }
}
?>