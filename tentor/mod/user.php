<?php
class user{
    function login($con,$email,$password)
    {
        $q=mysqli_query($con,"select * from tentor where email = '$email' and password = md5('$password')");
        $cek = mysqli_fetch_array($q);
        if (!empty($cek[0]))
        {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['id']= $cek['id_tentor'];
            header('location:?to=home');
        }else
        {
            header('location:?to=login&login=fail');
        }
    }

    function index($con,$email)
    {
        $q=mysqli_query($con,"Select * from tentor where email = '$email'");
        $dt=mysqli_fetch_array($q);
        return $dt;
    }

    function update($con,$nama,$tp_lahir,$tgl_lahir,$alamat,$email,$id_tentor)
    {
        $q=mysqli_query($con,"update tentor set nama = '$nama', tp_lahir = '$tp_lahir',tgl_lahir = '$tgl_lahir', alamat = '$alamat',email = '$email' where id_tentor= '$id_tentor'");
        if ($q)
        {
            $ps=rhs('Berhasil di Update');
            header('location:?to=user&ps='.$ps);
        }else
        {
            $ps=rhs('Gagal di Update');
            header('location:?to=user&pse='.$ps);
        }
    }
}
?>