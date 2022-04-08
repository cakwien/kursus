<?php

if (!empty($_GET['p'])) {
    $p = strtolower($_GET['p']);

    if ($p == "login") 
    {
        if (!empty($_POST['email']) && !empty($_POST['password']))
        {
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            
            $user->login($con, $email, $password);
        }
        include('view/login.php');
    } 

    elseif ($p=="ceklogin")
    {
        session_start();
        if (empty($_SESSION['email']))
        {
            header('location:?p=login');
        }else
        {
            $emailaktif = $_SESSION['email'];
            header('location:?p=home');
        }
    }

    // elseif ($p=="daftarkelas")
    // {
    //     include('view/index.php');
    // }

    // elseif ($p=="daftarprivat")
    // {
    //     include('view/index.php');
    // }
    

    elseif ($p == "logout") {
        session_start();
        session_destroy();
        header('location:?p=login');
    }

    elseif($p=="account")
    {
        
        
        
        include('view/index.php');
    }

    elseif($p=="daftarkelas")
    {

        $daftarkelasaktif = $harga->allaktif($con); 
        include('view/index.php');
    }

    elseif($p=="konfirmasi")
    {
        if(!empty($_GET['daftar']))
        {
            $idtarif = bukarhs(bukarhs($_GET['daftar']));
            $hargakelas = $harga->index($con,$idtarif); // harga kelas
        }

        if (!empty($_GET['ok']) && !empty($_GET['kl']))
        {
            $id_siswa = $_GET['ok'];
            $id_tarif = $_GET['kl'];
            $time=time();
            $time_limit = $time + 3600;
            $status = 0;

            $input=$tagihan->input($con, $id_siswa, $id_tarif, $time, $time_limit, $status);
        }
        
        include('view/index.php');
    }


    elseif ($p=="home")
    {
        include('view/index.php');
    }

    elseif($p=="timelinekelas")
    {
        if (!empty($_GET['rombel']))
        {
            $id_rombel = $_GET['rombel'];
            $datakelas = $kelas->index($con, $id_rombel);
            $datatentor = $tentor->indexByKelas($con, $id_rombel);
        }

        include('view/index.php');
    }

    elseif($p=="daftar")
    {
        if (!empty($_POST['daftar']))
        {
            $nama = $_POST['nama'];
            $alamat=$_POST['alamat'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $no_hp = $_POST['no_hp'];
            $asal_sekolah = $_POST['asal_sekolah'];
            $email = $_POST['email'];
            $password1 = $_POST['password1'];
            $password2 = $_POST['password2'];
            $input=$user->daftar($con, $nama, $alamat, $tgl_lahir, $no_hp, $email, $asal_sekolah, $password1, $password2);
        }
        include('view/daftarsiswa.php');
    }

    else{
        include('view/index.php');
    }

}
else
{
    include('view/index.php');
}