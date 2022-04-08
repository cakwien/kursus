<?php

if (!empty($_GET['p']))
{
    $p = $_GET['p'];

    if ($p=="datasiswa")
    {
        $listsiswa = $siswa->all($con);

        if(!empty($_POST['nm_siswa']))
        {
            $nm_siswa       = $_POST['nm_siswa'];
            $alamat         = $_POST['alamat'];
            $tp_lahir       = $_POST['tp_lahir'];
            $tgl_lahir      = $_POST['tgl_lahir'];
            $no_hp          = $_POST['no_hp'];
            $asal_sekolah   = $_POST['asal_sekolah'];
            $email          = $_POST['email'];       
            $password       = $_POST['password1'];
            $foto           = "";

            if ($_POST['password1'] == $_POST['password2'])
            {
                $input = $siswa->save($con,$nm_siswa,$alamat,$tp_lahir,$tgl_lahir,$no_hp,$email,$asal_sekolah,$foto,$password);
            }else
            {
                header('location:?p=datasiswa&msge='.rhs("Password Tidak sama... Ulangi lagi..."));
            }
        }

        if(!empty($_GET['edit']))
        {
            
        }
        include('view/index.php');
    }    
    

    elseif($p=="datakelas")
    {
        $listkelas = $kelas->all($con);

        
        include('view/index.php');
    }
    elseif($p=="det-kelas")
    {
        $kel = $kelas->index($con,$_POST['rowid']); //detail kelas
        $tipekelas = $kelas->alltipekelas($con, $_POST['rowid']); //tipe kelas loop
        $rombelkelas = $kelas->allrombelbykelas($con,$_POST['rowid']);
        include('view/det-kelas.php');
    }

    
    elseif($p=="datatentor")
    {
        $listtentor = $tentor->all($con);
        if(!empty($_POST['nm_tentor']))
        {
            if($_POST['password1'] == $_POST['password2'])
            {
                $nm_tentor  = $_POST['nm_tentor'];
                $alamat     = $_POST['alamat'];
                $tp_lahir   = $_POST['tp_lahir'];
                $tgl_lahir  = $_POST['tgl_lahir'];
                $no_hp      = $_POST['no_hp'];
                $foto       = "";
                $password   = $_POST['password1'];
                $email      = $_POST['email'];

                $input = $tentor-> save($con,$nm_tentor,$alamat,$tp_lahir,$tgl_lahir,$no_hp,$email,$foto,$password);
            }else
            {
                header('location:?p=datatentor&msg='.rhs("Password Tidak sama.. ulangi lagi..."));
            }

            
            
        }

        if(!empty($_GET['hapus']))
        {
            $id_tentor = $_GET['hapus'];
            // mysqli_query($con,"delete from tentor where id_tentor = '$id_tentor'");
            $tentor->hapus($con,$id_tentor);
        }

        include('view/index.php');
    }



    elseif($p=="detailsiswa")
    {
        if(!empty($_GET['id']))
        {
            $sis = $siswa->index($con,bukarhs($_GET['id']));
            $kel = $siswa->kelassiswa($con,bukarhs($_GET['id']));

            if(!empty($_GET['edit']))
            {
                if(!empty($_POST['nm_siswa']))
                {
                    // $input = $siswa->update($con, $_POST['nm_siswa'], $_POST['alamat'], $_POST['tp_lahir'], $_POST['tgl_lahir'], $_POST['no_hp'], $_POST['email'], $_POST['asal_sekolah'], $_GET['id']);

                    $nm_siswa = $_POST['nm_siswa'];
                    $alamat = $_POST['alamat'];
                    $tgl_lahir = $_POST['tgl_lahir'];
                    $tp_lahir = $_POST['tp_lahir'];
                    $no_hp = $_POST['no_hp'];
                    $asal_sekolah = $_POST['asal_sekolah'];
                    $id= bukarhs($_GET['id']);
                    $email = $_POST['email'];
                    
                    $input = $siswa->update($con, $nm_siswa, $alamat, $tp_lahir, $tgl_lahir, $no_hp, $email, $asal_sekolah, $id);
                }

                
                
            }

            if (isset($_POST['respass'])) {
                $siswa->resetpassword($con, bukarhs($_GET['id']));
            }

        }else
        {
            $ps = "Data Tidak ditemukan...";
            header('location:'.base_url().'?p=datasiswa&pse='.rhs($ps));
        }
        include('view/index.php');
    }

    elseif($p=="detailtentor")
    {
        if(!empty($_GET['id']))
        {
            $ten = $tentor->index($con,$_GET['id']);
            $amp = $tentor->amputentor($con,$_GET['id']);

            if(!empty($_GET['edit']))
            {
               if (isset($_POST['updatetentor']))
               {
                   $input = $tentor->update($con, $_POST['nm_tentor'], $_POST['alamat'], $_POST['tp_lahir'], $_POST['tgl_lahir'], $_POST['no_hp'], $_POST['email'], $_GET['id']);
               }

              if (isset($_POST['simpanampu'])) {
                    $input = $tentor->simpanampu($con, $_GET['id'], $_POST['rombel']);
              }
            }

            if(isset($_POST['respass']))
            {
                $tentor->resetpassword($con,$_GET['id']);
            }

           
        }else
        {
            $ps = "Data tidak di temukan...";
            header('location:'.base_url().'?p=datatentor&pse='.rhs($ps));
        }
        
        include('view/index.php');
    }

    elseif($p=="det_tentor")
    {
        include('view/det_tentor.php');
    }


    elseif($p=="datapembayaran")
    {
        $listbayar = $payment->alltagihan($con);

        if(isset($_POST['konfirm']))
        {
            $id=$_POST['id'];
            $nominal = $_POST['nominal'];
            $input=$payment->setstatus($con, $id, $nominal);
        }


        include('view/index.php');
    }
    elseif($p=="det-tagihan")
    {
        include('view/det-tagihan.php');
    }


    elseif($p=="lapbayar")
    {
        $laporanbayar = $payment->allbayar($con);
        include('view/index.php');
    }
    elseif($p=="det-lapbayar")
    {

        if ($_POST['rowid']) {
            $db = $payment->indexbayar($con, $_POST['rowid']);
        }
        
        include('view/det-lapbayar.php');
    }
}

else
{
    include('view/index.php');
}