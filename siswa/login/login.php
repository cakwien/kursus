<?php
    include('../mod/db.php');
    include('../mod/rhs.php');
    $username = $_POST['username'];
    $password = $_POST['password'];

     if(!empty($username) || !empty($password))
     {
         $q=mysqli_query($con,"select * from siswa where email = '$username' and password = '$password'");
         $cek=mysqli_fetch_array($q);
         if(!empty($cek[0]))
         {
             session_start();
             $_SESSION['username']= $username;
             $_SESSION['password']= $password;
             $_SESSION['id_siswa'] = $id_siswa;
             header('location:../');
         }else
         {
            header('location:../login/?pse='.rhs("Password dan Username Salah, Silahkan masukkan data dengan benar"));
         }
     }
 
?>