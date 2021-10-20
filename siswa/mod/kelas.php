<?php

class kelas{

    function index($con,$id)
    {
        $q=mysqli_query($con,"select * from kelas where id_kelas = $id");
        $dt = mysqli_fetch_array($q);
        return $dt;
    }

    function all($con,$id_siswa)
    {
        $list = array();
        $q=mysqli_query($con,"select * from kelas_siswa join siswa on kelas_siswa.id_siswa = siswa.id_siswa join kelas on kelas_siswa.id_kelas = kelas.id_kelas where kelas_siswa.id_siswa = '$id_siswa'");
        while($dt = mysqli_fetch_array($q))
        {
            $list[] = $dt;
        }
        return $list;
    }

    function cekKelasKursus($con,$id_siswa) // cek apakah siswa sudah pernah masuk kelas atau belum
    {
        $q=mysqli_query($con,"select * from kelas_siswa where id_siswa = '$id_siswa'");
        $dt = mysqli_num_rows($q);
        if ($dt < 1)
        {
            $ps = "0";
        }else
        {
            $ps = "1";
        }

        return $ps;
    }

    function cekKelasPrivat($co,$id_siswa)
    {
        //
    }

    function status($sts)
    {
        if ($sts == 1)
        {
            $ps = "Menunggu Pembayaran";
        }else if ($sts == 2)
        {
            $ps = "Pending";
        }else if ($sts == 3)
        {
            $ps = "Aktif";
        }else
        {
            $ps = "Non Aktif";
        }
        return $ps;
    }

    



    // tampilkan kelas dan ampu guru untuk mengambil materi

    function mapelByAmpu($con,$id_kelas)
    {
        
    }













    


}