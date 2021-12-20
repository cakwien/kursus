<?php
include('kon.php');
if (!empty($_POST['username']) && !empty($_POST['password']))
{
   $username = $_POST['username'];
   $password = $_POST['password'];
   $qcek= mysqli_query($con,"select * from siswa where email = '$username' and password = '$password'");
   $dtcek = mysqli_fetch_array($qcek);

   if (!empty($dtcek[0]))
   {
      session_start();
      $_SESSION['username'] = $username;
      header('location:listsoal.php');
   }else
   {
      header('location:login.php?msg=fail');
   }
}