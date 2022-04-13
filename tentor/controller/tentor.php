<?php

    if (!empty($_GET['to']))
    {
        $p = strtolower($_GET['to']);
        // $tnt=cekSession($con,$user);


        if ($p=="login")
        {
            if (!empty($_POST['email']) && !empty($_POST['password'])) //proseslogin
            {
                $email = $_POST['email'];
                $password= $_POST['password'];
                $user->login($con,$email,$password);
            }

            if (!empty($_GET['login']))
            {
                $pesan = '<span class="text-light bg-danger d-grid gap-2 ps-2 rounded-pill text-center">Username dan Password Salah</span>';
            }else
            {
                $pesan = "";
            }
           
            include('view/login.php');
        }

        elseif($p=="logout")
        {
            session_start();
            session_destroy();
            header('location:?to=login');
        }

        elseif ($p == "home")
        {
           
            include('view/index.php');
        }

        elseif ($p=="kelas")
        {
            if (!empty($_GET['amp']))
            {
                $id_ampu = bukarhs($_GET['amp']);
                $dt=$kelas->indexByAmpu($con,$id_ampu);
                $nm_kelas = $dt['nm_kelas'];
                // $jenjang = $dt['jenjang'];
                $listmateri = $materi->all($con,$id_ampu);
                
                $listsiswa = $siswa->allByAmpu($con,$id_ampu);

                if (isset($_POST['simpan']))
                {
                    $judul = $_POST['judul'];
                    $keterangan = $_POST['keterangan'];
                    $link = $_POST['link'];
                    $jadwal = strtotime($_POST['jadwal']);
                    $input=$materi->input($con,$id_ampu,$judul,$keterangan,$link,$jadwal);
                }

                if(!empty($_GET['del']))
                {
                    $id_materi = $_GET['del'];
                    $id_ampu = bukarhs($_GET['amp']);
                    $materi->delete($con,$id_materi,$id_ampu);
                }

                if(isset($_POST['update']))
                {
                    $id_ampu = bukarhs($_GET['amp']);
                    $judul = $_POST['judul'];
                    $ket = $_POST['ket'];
                    $link = $_POST['link'];
                    $jadwal = strtotime($_POST['jadwal']);
                    $id = $_POST['id'];
                    $input = $materi->update($con, $id_ampu, $judul, $ket, $link, $jadwal, $id);
                }

            }else
            {
                $nm_kelas = "";
                $jenjang = "";
            }
            include('view/index.php');
        }

        elseif($p=="edit_materi")
        {
            include('view/materi_edit.php');
        }

        elseif($p=="user")
        {
            if (!empty($_POST['nama']))
            {
                $id_tentor = $_POST['id'];
                $nama = $_POST['nama'];
                $tp_lahir = $_POST['tp_lahir'];
                $tgl_lahir  = $_POST['tgl_lahir'];
                $alamat  = $_POST['alamat'];
                $email = $_POST['email'];
                $input=$user->update($con,$nama,$tp_lahir,$tgl_lahir,$alamat,$email,$id_tentor);
            }

            if(isset($_POST['updatepass']))
            {
                $id = $_POST['id_edit'];
                $passlama = $_POST['passlama'];
                $passbaru1 = $_POST['passbaru1'];
                $passbaru2 = $_POST['passbaru2'];
                $input = $user->updatepass($con, $id, $passlama, $passbaru1, $passbaru2);
            }

          

            include('view/index.php');
        }

        elseif($p=="privat")
        {
            include('view/index.php');
        }
        
    }else
    {
        include('view/index.php');
    }