<?php
    
    if(!empty($_GET['p']))
    {
        $p=strtolower($_GET['p']);

        if ($p=="logout")
        {
            session_start();
            session_destroy();
            header('location:login');
        }

        //SISWA NON KELAS------------------------------------
        elseif($p=="daftar-kelas")
        {
            if(!empty($_POST['daftar']))
            {
                $id_tarif = $_POST['id_tarif'];
                $nominal=$_POST['nominal'];
                $id_kelas = $_POST['id_kelas'];
                $id_siswa = $_POST['id_siswa'];
                //kode random-----
                $jumlah_tagihan = $nominal + $id_siswa;    
                
                //kode random-----
                $status="0";
                $time=time();
                $time_limit = $time + 604800;

                $input1=$kelas->input($con,$id_siswa,$id_kelas,'0','0','0','nonaktif');
                $input2=$tagihan->input($con,$id_siswa,$id_tarif,$nominal,$id_siswa,$jumlah_tagihan,$time,$time_limit,$status);
            }
            
            include('view/index.php');
        }
        //---------------------------------------------------

        elseif($p=="status-kelas")
        {
            include('view/index.php');
        }

        elseif($p=="d-kelas")
        {
            include('view/index.php');
        }

        elseif($p=="list-materi")
        {
            include('view/index.php');
        }

        //SISWA MASUK MENGIKUTI MATERI KURSUS
        elseif($p=="go")
        {
            $id_siswa = $_GET['id_s'];
            $id_materi = $_GET['id_m'];
            $time = time();
            //ambil link dari tabel materi
            $l=$materi->linkmateri($con,$id_materi);
            $link = $l['link'];
            //memasukkan data presensi siswa dan forward ke link materi
            $input=$presensi->masukmateri($con,$id_siswa,$id_materi,$time,$link);
        }

        elseif($p=="ops")
        {
            include('view/index.php');
        }
        
    }
    else{

       
        include('view/index.php');
    }

?>