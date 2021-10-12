<?php
// fungsi-fungsi tambahan yang mendukung aplikasi
// ==============================================

function rhs($isi)
{
    $encode=base64_encode($isi);
    return $encode;
}

function bukarhs($isi)
{
    $decode=base64_decode($isi);
    return $decode;
}


function inputDisable()
{
    if (!empty($_GET['user']))
    {
        echo "";
    }else
    {
        echo "disabled";
    }
    
}

function tbupdateprofil()
{
    if (!empty($_GET['user']))
    {
        echo '<button type="submit" class="btn btn-success float-end ms-2"><i class="bi-save"></i> Simpan</button>';
        echo '<a href="?to=user" class="btn btn-danger float-end"><i class="bi-x-circle"></i> Batal</a>';
        
    }else
    {
        echo '<a href="?to=user&user=update" class="btn btn-primary float-end"><i class="bi-pencil"></i> Update Profil</a>';
    }
}

function cekSession($con,$user)
{
    session_start();
    if (empty($_SESSION['email']))
    {
        session_destroy();
        header('location:?to=login');
    }else
    {
        $tnt = $user->index($con,$_SESSION['email']);
        return $tnt;
    }

}




?>

