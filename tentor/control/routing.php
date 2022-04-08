<?php

    if(!empty($_GET['p']))
    {
        $p=strtolower($_GET['p']);



        if($p=="logout")
        {
            session_start();
            session_destroy();
            header('location:../tentor');
        }
        elseif($p=="mapel")
        {
            include('view/tentor.php');
        }
        elseif ($p=="materi")
        {
            if(!empty($_POST['judul']))
            {
                $id_ampu = $_POST['id_ampu'];
                $judul= $_POST['judul'];
                $isi_materi = $_POST['isi_materi'];
                $link = $_POST['link'];
                $jadwal = strtotime($_POST['jadwal']);
                $time = time();
                $input = $materi->tambahmateri($con,$id_ampu,$judul,$isi_materi,$link,$jadwal,$time);
            }

            if(!empty($_GET['del']))
            {
                $id_materi = $_GET['del'];
                $materi->hapusmateri($con,$id_materi);
            }
            include('view/tentor.php');
        }
        elseif ($p=="mt-edit")
        {
            if(!empty($_GET['id']))
            {
                $id_materi = $_GET['id'];
                $mt=$materi->editmateri($con,$id_materi);
                $id_ampu = $mt['id_ampu'];
                $judul = $mt['judul'];
                $detail = $mt['isi_materi'];
                $link = $mt['link'];
                $jadwal = $mt['jadwal'];
            }
            
            if(!empty($_POST['id_materi']))
            {
                $id_materi = $_POST['id_materi'];
                $id_kelas = $_POST['id_kelas'];
                $judul = $_POST['judul'];
                $isi_materi = $_POST['isi_materi'];
                $link = $_POST['link'];
                if(empty($_POST['jadwal']))
                {
                    $jadwal = $_POST['jadwalawal'];
                }else{
                    $jadwal = strtotime($_POST['jadwal']);
                }
                $input=$materi->updatemateri($con,$id_ampu,$judul,$isi_materi,$link,$jadwal,$id_materi);
            }

            include('view/tentor.php');
        }

        elseif ($p=="materi2")
        {
            if(!empty($_POST['judul']))
            {
                $id_ampu = $_POST['id_ampu'];
                $judul= $_POST['judul'];
                $isi_materi = $_POST['isi_materi'];
                $link = $_POST['link'];
                $jadwal = strtotime($_POST['jadwal']);
                $time = time();
                $input = $materi->tambahmateri2($con,$id_ampu,$judul,$isi_materi,$link,$jadwal,$time);
            }
            
            include('view/tentor.php');
        }
        elseif ($p=="mt-kelas")
        {
            $id_ampu = $_GET['id'];

            //Judul Materi Yang Dipilih
            $jdl = $materi->titlemateri($con,$id_ampu);
            
            $wktmateri = $materi->waktumateri($con,$id_ampu);
           
            $list_materi = $materi->tampilmateri($con,$id_ampu);

            //SIMPAN MATERI
            if (!empty($_POST['judul']))
            {
                $id_ampu = $_GET['id'];
                $judul = $_POST['judul'];
                $isi_materi = $_POST['isi_materi'];
                $jadwal = strtotime($_POST['jadwal']);
                $link = $_POST['link'];
                $to = "mt-kelas";
                $time = time();
                $input = $materi->simpan($con,$id_ampu,$judul,$isi_materi,$link,$jadwal,$time,$to);
            }


            //UPDATE MATERI
            if (!empty($_POST['judul_edit']))
            {
                $id_ampu = $_POST['id_ampu'];
                $judul = $_POST['judul_edit'];
                $id_materi = $_POST['id_materi'];
                $isi_materi = $_POST['isi_materi'];
                $jadwal= strtotime($_POST['jadwal']);
                $link = $_POST['link'];
                $to  = "mt-kelas&id=".$id_ampu;
                $time = time();
                $input=$materi->update($con,$judul,$isi_materi,$link,$jadwal,$id_materi,$to);
            }

            
            //HAPUS MATERI
            if (!empty($_GET['hapus']))
            {
                $id_materi = $_GET['hapus'];
                $to="mt-kelas";
                $materi->hapus($con,$id_materi,$id_ampu,$to);
            }

            //EDIT MATERI
            if(!empty($_GET['edit']))
            {
                $id_materi = $_GET['edit'];
                $in = "in";

            }
            
            include('view/tentor.php');
        }

        //HALAMAN EDIT MATERI (SISIPAN KE MODAL EDIT MATERI DI HALAMAN MATERI KELAS)
        elseif($p=="mat-edit")
        {
            include('view/materi_edit.php');
        }


        elseif($p=="kelas-saya")
        {
           // $id_tentor = $tentor->idtentor($con,$username);
            // $listkelas = $kelas->tampilkelas($con,$t['id_tentor']);
            include('view/tentor.php');
        }
        elseif($p=="mt-detail")
        {
            include('view/tentor.php');
        }
        elseif($p=="quiz-list")
        {
            include('view/tentor.php');
        }
        elseif($p=="quiz-soal")
        {
            include('view/tentor.php');
        }
        elseif($p=="akun")
        {
            if(!empty($_POST['id_tentor']))
            {
                $input=$tentor->update($con,$_POST['nm_tentor'],$_POST['alamat'],$_POST['tp_lahir'],$_POST['tgl_lahir'],$_POST['no_hp'],$_POST['email'],$_POST['password'],$_POST['id_tentor']);
            }
            
            include('view/tentor.php');
        }
    }
    
    else
    {
       // $username = $_SESSION['username'];
       // $t=$login->tentoraktif($con,$username);

        
        include('view/tentor.php');
    }

?>