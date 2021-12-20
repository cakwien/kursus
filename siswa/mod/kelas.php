<?php

class kelas{

    function index($con,$id)
    {
        $q=mysqli_query($con,"select * from kelas join kelas_utama on kelas.id_kelas_utama = kelas_utama.id_kelas_utama where kelas.id_kelas = $id");
        $dt = mysqli_fetch_array($q);
        return $dt;
    }

    function all($con,$id_siswa)
    {
        $list = array();
        $q=mysqli_query($con,"select * from kelas_siswa join kelas on kelas_siswa.id_kelas = kelas.id_kelas join kelas_utama on kelas.id_kelas_utama = kelas_utama.id_kelas_utama where kelas_siswa.id_siswa = '$id_siswa'");
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

    function stsKelas($sts, $st1, $st2)
    {
        if ($sts == "1")
        {
            return $st1;
        }else
        {
            return $st2;
        }
    }

    



    


    //harga kelas

    














    


}