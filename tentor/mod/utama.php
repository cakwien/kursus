<?php

class utama{
    function login($con,$username,$password)
    {
        if(!empty($username) || !empty($password))
        {
            $q=mysqli_query($con,"select * from tentor where email = '$username' and password = '$password'");
            $cek=mysqli_fetch_array($q);
            if(!empty($cek[0]))
            {
                session_start();
                $_SESSION['username']= $username;
                header('location:../');
            }else
            {
                echo '<script>window.alert("USERNAME DAN PASSWORD SALAH, ULANGI KEMBALI");window.location.href="../login"</script>';
            }
        }
    }

    function tentoraktif($con,$username)
    {
        $q=mysqli_query($con,"select * from tentor where email = '$username'");
        $dt=mysqli_fetch_array($q);
        return $dt;
    }

    

    
}

?>