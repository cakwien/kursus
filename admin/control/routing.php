<?php

    $project_location = "/oc/admin";
    $me = $project_location;

    // For get URL PATH
    $r = $_SERVER['REQUEST_URI'];

    if ($r == $me.'/')
    {
        $say = "Hallo";

        include('view/index.php');
    }
    elseif ($r==$me.'/datasiswa')
    {
        $listsiswa = $siswa->all($con);

        if(!empty($_POST['nm_siswa']))
        {
            $nm_siswa = $_POST['nm_siswa'];
            $alamat = $_POST['alamat'];
            $tp_lahir = $_POST['tp_lahir'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $no_hp = $_POST['no_hp'];
            $asal_sekolah = $_POST['asal_sekolah'];
            $email = $_POST['email'];
            $password = $_POST['password1'];
            $foto = "";

            if ($_POST['password1'] == $_POST['password2'])
            {
                $input = $siswa->save($con,$nm_siswa,$alamat,$tp_lahir,$tgl_lahir,$no_hp,$email,$asal_sekolah,$foto,$password);
            }

        }

        if (!empty($_GET['msg']))
        {
            $say = $_GET['msg'];
        }

        include('view/index.php');
    }
    elseif ($r==$me.'/datakelas')
    {
        include('view/index.php');
    }




?>