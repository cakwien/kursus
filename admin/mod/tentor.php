<?php
class tentor{
    function all($con)
    {
        $list=array();
        $q=mysqli_query($con,"Select * from tentor");
        while($dt = mysqli_fetch_array($q))
        {
            $list[]=$dt;
        }
        return $list;
    }

    function amputentor($con,$id_tentor)
    {
        $list = array();
        $q = mysqli_query($con, "select * from ampu join rombel on ampu.id_rombel = rombel.id_rombel join kelas on rombel.id_kelas = kelas.id_kelas where ampu.id_tentor = '$id_tentor'");
        while ($dt = mysqli_fetch_array($q)) {
            $list[] = $dt;
        }
        return $list;
    }

    function save($con,$nm_tentor,$alamat,$tp_lahir,$tgl_lahir,$no_hp,$email,$foto,$password)
    {
        $q=mysqli_query($con,"insert into tentor values('','$nm_tentor','$alamat','$tp_lahir','$tgl_lahir','$no_hp','$email','$foto','$password')");
        if($q)
        {
            $ps="Data Tentor Berhasil di Simpan...";
            header('location:?p=datatentor&msg='.rhs($ps));
        }
        else
        {
            $ps="Data Tentor Berhasil di Simpan...";
            header('location:?p=datatentor&msg='.rhs($ps));
        }
    }

    function update($con, $nm_tentor, $alamat, $tp_lahir, $tgl_lahir, $no_hp, $email, $id)
    {
        $q=mysqli_query($con,"update tentor set nm_tentor = '$nm_tentor', alamat = '$alamat', tp_lahir = '$tp_lahir', tgl_lahir='$tgl_lahir', no_hp = '$no_hp', email = '$email' where id_tentor = '$id'");
        if($q)
        {
            $ps = "Data Tentor Berhasil di Update...";
            header('location:?p=detailtentor&id=' . $id . '&ps=' . rhs($ps));
        }else
        {
            $ps = "Data Tentor Gagal di Update...";
            header('location:?p=detailtentor&id=' . $id . '&pse=' . rhs($ps));
        }
    }

    function hapus($con,$id_tentor)
    {
        $q=mysqli_query($con,"delete from tentor where id_tentor = '$id_tentor'");
        if($q)
        {
            $ps="Data Tentor Berhasil di Hapus...";
            header('location:?p=datatentor&msg='.rhs($ps));
        }
        else
        {
            $ps="Data Tentor Gagal di Hapus...";
            header('location:?p=datatentor&msge='.rhs($ps));
        }
    }

    function index($con,$id_tentor)
    {
        $q=mysqli_query($con,"Select * from tentor where id_tentor = '$id_tentor'");
        $dt=mysqli_fetch_array($q);
        return $dt;
    }

    function jumlahmateri($con,$id_ampu) // jumlah materi perkelas yang di ampu tentor
    {
        $q=mysqli_query($con,"select count(id_materi) as jumlah from materi where id_ampu = '$id_ampu'");
        $dt = mysqli_fetch_array($q);
        return $dt[0];
    }


    function simpanampu($con,$id, $rombel)
    {
        $q=mysqli_query($con,"insert into ampu value('','$id','$rombel')");
        if($q)
        {
            $ps = "Data Tentor Berhasil di Update...";
            header('location:?p=detailtentor&id=' . $id . '&ps=' . rhs($ps));
        }else
        {
            $ps = "Data Tentor Gagal di Update...";
            header('location:?p=detailtentor&id=' . $id . '&pse=' . rhs($ps));
        }
    }

    function resetpassword($con,$id)
    {
        $q=mysqli_query($con,"update tentor set password=md5('123') where id_tentor = '$id'");
        if ($q) {
            $ps = "Berhasil reset Password";
            header('location:?p=detailtentor&id=' . $id . '&ps=' . rhs($ps));
        } else {
            $ps = "GagaL Reset Password";
            header('location:?p=detailtentor&id=' . $id . '&pse=' . rhs($ps));
        }
    }

}