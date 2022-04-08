<?php

class user{
    function login($con,$email,$password) // Proses Login
    {
        $qcek = mysqli_query($con,"select * from siswa where email = '$email' and password= '$password'");
        $dtcek = mysqli_fetch_array($qcek);
        if (!empty($dtcek[0]))
        {
            session_start();
            $_SESSION['id'] = $dtcek['id_siswa'];
            $_SESSION['email'] = $email;
            header('location:?p=ceklogin');
           
        }else   
        {
            header('location:?p=login&log=fail');
        }
    }

    function index($con,$email) // Munculkan data siswa berdasarkan email
    {
        $q=mysqli_query($con,"select * from siswa where email = '$email'");
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

    function daftar($con, $nama, $alamat, $tgl_lahir, $no_hp, $email, $asal_sekolah, $password1, $password2)
    {
        $cekemail = mysqli_query($con, "select email from siswa where email = '$email'");
        $dt = mysqli_num_rows($cekemail);
        if ($dt > 0) {
            header('location:?p=daftar&pse=' . rhs('Email tersebut sudah pernah di gunakan untuk mendaftar...'));
        } else {
            if ($password1 == $password2) {
                $q = mysqli_query($con, "insert into siswa value('','$nama','$alamat','','$tgl_lahir','$no_hp','$email','$asal_sekolah','',md5('$password1'))");
                if ($q) {
                    header('location:?p=login&ps=' . rhs('Daftar Mmeber beru berhasil, silahkan login...'));
                } else {
                    header('location:?p=daftar&pse=' . rhs('Pendaftaran Gagal'));
                }
            } else {
                header('location:?p=daftar&pse=' . rhs('Daftar Gagal'));
            }
        }
    }



    
    

    
}

?>