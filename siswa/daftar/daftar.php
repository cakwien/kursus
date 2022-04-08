<?php

include('../mod/db.php');
include('../mod/rhs.php');

if (!empty($_POST['nm_lengkap']))
{
    $nm_lengkap = $_POST['nm_lengkap'];
    $alamat = $_POST['alamat'];
    $tp_lahir = $_POST['tp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $foto = $_FILES['foto']['name'];
    $nm_foto = $nm_lengkap.time();
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $qdaftar=mysqli_query($con,"insert into siswa value ('','$nm_lengkap','$alamat','$tp_lahir','$tgl_lahir','$no_hp','$email','$asal_sekolah','$nm_foto','$password')");
    if ($qdaftar)
    {
        move_uploaded_file($tmp_foto,"../pp/".$nm_foto.".jpg");
        header('location:../login/?ps='.rhs("Akun sudah terdaftar, seilahkan login menggunakan akun yang telah di daftarkan"));
    }
    else{
        header('location:../login/?pse='.rhs("Gagal mendaftar, Ulangi pendaftaran lagi"));
    }
    
}




?>