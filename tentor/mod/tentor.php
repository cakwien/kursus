<?php

class tentor{
    function idtentor($con,$username)
    {
        $q=mysqli_query($con,"select id_tentor from tentor where email='$username'");
        $dt=mysqli_fetch_array($q);
        return $dt;
    }

    function show($con,$id_tentor)
    {
        $q=mysqli_query($con,"select * from tentor where id_tentor = '$id_tentor'");
        $dt=mysqli_fetch_array($q);
        return $dt;
    }

    function update($con,$nm_tentor,$alamat,$tp_lahir,$tgl_lahir,$no_hp,$email,$password,$id_tentor)
    {
        $q=mysqli_query($con,"update tentor set nm_tentor = '$nm_tentor', alamat = '$alamat',tp_lahir = '$tp_lahir',tgl_lahir = '$tgl_lahir',no_hp = '$no_hp',email='$email',password='$password' where id_tentor = '$id_tentor'");
        if ($q)
        {
            $ps="Data Akun Tentor sudah diupdate";
            header('location:?p=akun&ps='.rhs($ps));
        }else
        {
            $ps="Gagal Update";
            header('location:?p=akun&pse='.rhs($ps));
        }
    }
}

?>