<?php
class siswa{
    function all($con)
    {
        $list = array();
        $q=mysqli_query($con,"Select * from siswa");
        while($dt = mysqli_fetch_array($q))
        {
            $list[] = $dt;
        }
        return $list;
    }

    function save($con,$nm_siswa,$alamat,$tp_lahir,$tgl_lahir,$no_hp,$email,$asal_sekolah,$foto,$password)
    {
        $q=mysqli_query($con,"insert into siswa value('','$nm_siswa','$alamat','$tp_lahir','$tgl_lahir','$no_hp','$email','$asal_sekolah','$foto','$password')");
        if ($q)
        {
            $msg="Siswa Berhasil Ditambahkan..";
            header('location:'.base_url().'datasiswa?ps='.rhs($msg));
        }else
        {
            $msg="Siswa Gagal Ditambahkan..";
            header('location:'.base_url().'datasiswa?pse='.rhs($msg));
        }
    }

    function index($con,$id_siswa)
    {
        $q=mysqli_query($con,"select * from siswa where id_siswa = '$id_siswa'");
        $dt = mysqli_fetch_array($q);
        return $dt;
    }

    function kelassiswa($con,$id_siswa)
    {
        $list=array();
        $q=mysqli_query($con, "select * from kelas_siswa join siswa on kelas_siswa.id_siswa = siswa.id_siswa join rombel on kelas_siswa.id_rombel = rombel.id_rombel join kelas_tipe on kelas_siswa.id_kelas_tipe=kelas_tipe.id_kelas_tipe join kelas on rombel.id_kelas = kelas.id_kelas where kelas_siswa.id_siswa = '$id_siswa'");
        while ($dt = mysqli_fetch_array($q)) {
            $list[] = $dt;
        }
        return $list;
    }

    function update($con, $nm_siswa, $alamat, $tp_lahir, $tgl_lahir, $no_hp, $email, $asal_sekolah,$id)
    {
        $q=mysqli_query($con,"update siswa set nm_siswa = '$nm_siswa', alamat = '$alamat', tgl_lahir = '$tgl_lahir', tp_lahir = '$tp_lahir', no_hp = '$no_hp', email = '$email', asal_sekolah = '$asal_sekolah' where id_siswa = '$id'");

        if ($q) {
            $msg = "Siswa Berhasil Diupdate..";
            header('location:' . base_url() . '?p=detailsiswa&id='.rhs($id).'&ps=' . rhs($msg));
        } else {
            $msg = "Siswa Gagal Diupdate..";
            header('location:' . base_url() . '?p=detailsiswa&id='.rhs($id).'&pse='.rhs($msg));
        }
    }

    function jumlahsiswa($con,$rombel) //jumlah siswa per rombel
    {
        $q=mysqli_query($con,"Select count(id_siswa) as jumlah from kelas_siswa where id_rombel = '$rombel'");
        $dt = mysqli_fetch_array($q);
        return $dt[0];
    }

    function resetpassword($con,$id)
    {
        $q=mysqli_query($con,"update siswa set password = md5('123') where id_siswa = '$id'");
        if ($q) {
            $msg = "Password berhasi di Reset..";
            header('location:' . base_url() . '?p=detailsiswa&id=' . rhs($id) . '&ps=' . rhs($msg));
        } else {
            $msg = "Password gagal di reset..";
            header('location:' . base_url() . '?p=detailsiswa&id=' . rhs($id) . '&pse=' . rhs($msg));
        }
    }
}
?>