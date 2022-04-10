<?php

class kelas{

    function index($con,$id)
    {
        $q=mysqli_query($con,"select * from rombel join kelas on rombel.id_kelas = kelas.id_kelas where rombel.id_rombel = '$id'");
        $dt = mysqli_fetch_array($q);
        return $dt;
    }



    function all($con,$id_siswa)
    {
        $list = array();
        $q=mysqli_query($con,"select * from kelas_siswa join rombel on kelas_siswa.id_rombel = rombel.id_rombel join kelas on rombel.id_kelas = kelas.id_kelas where kelas_siswa.id_siswa = '$id_siswa'");
        while($dt = mysqli_fetch_array($q))
        {
            $list[] = $dt;
        }
        return $list;
    }

    function jumlahsiswa($con,$rombel)
    {
        $q=mysqli_query($con,"Select count(id_siswa) from kelas_siswa where id_rombel = '$rombel'");
        $dt = mysqli_fetch_array($q);
        return $dt[0];
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

    //cek status kelas

    function cekStatusKelas($con,$id_rombel)
    {
        $q = mysqli_query($con, "select status, start, end from kelas_siswa join rombel on kelas_siswa.id_rombel = rombel.id_rombel where kelas_siswa.id_rombel = $id_rombel");
        $dt=mysqli_fetch_array($q);
        return $dt;
    }




    function LoadCekKelas($con,$id_kelas_siswa)
    {
        //cek data kelas
        $q1 = mysqli_query($con,"select * from kelas_siswa join rombel on kelas_siswa.id_rombel = rombel.id_rombel join kelas on rombel.id_kelas = kelas.id_kelas  where id_kelas_siswa = $id_kelas_siswa");
        $dt1 = mysqli_fetch_array($q1);

        $start = $dt1['start'];
        $end = $dt1['end'];
        $seminggu = 604800;
        


        //cek apakah end lebih besar dari start;

        $sisa = $end - $start;
        if ($sisa < 604800)
        {
            $pesan = '<div class="alert alert-dismissible alert-warning" role="alert">
                    Durasi kelas '.$dt1['nm_kelas'].' akan segera berakhir pada <strong> '.tgl_indo($start). '</strong>, 
                    Silahkan perpanjang <a class="fw-bold" href="?p=daftarkelas">disini</a>
                     </div>';
        }elseif($sisa <= 0)
        
        {
            $pesan = '<div class="alert alert-dismissible alert-warning" role="alert">
                    Durasi kelas ' . $dt1['nm_kelas'] . ' sudah habis, 
                    Silahkan perpanjang <a class="fw-bold" href="?p=daftarkelas">disini</a>
                     </div>';
        }else
        {
            $pesan = "";
        }

        return $pesan;
    }

    //cek status kelas kalau kelas nonaktif maka akan di batasi masuk kelas
    function cekStatusKelasAktif($con,$id_rombel) {
        $q1 = mysqli_query($con, "select status from kelas_siswa join rombel on kelas_siswa.id_rombel = rombel.id_rombel where kelas_siswa.id_rombel = $id_rombel");
        $dt1 = mysqli_fetch_array($q1);
        
        if($dt1['status'] = 1)
        {
            header('location:?p=timelinekelas&rombel='.$id_rombel);
        }else
        {
            header('location:?p=ops');
        }
    }

    



    


    //harga kelas

    














    


}