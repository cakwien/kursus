<?php

class presensi{
    function masukmateri($con,$id_siswa,$id_materi,$time,$link)
    {
        $q=mysqli_query($con,"insert into presensi value('','$id_siswa','$id_materi','$time')");
        if($q)
        {
            header('location:'.$link);
        }
        else
        {
            header('location:#');
        }
    }

    function cek_presensi($con,$id_siswa,$id_materi)
    {
        $q=mysqli_query($con,"select * from presensi where id_siswa = '$id_siswa' and id_materi = '$id_materi'");
        $dt=mysqli_fetch_array($q);
        return $dt;
    }

    //CEK PRESENSI PARAMETER TIME JADWAL
    function cp($con,$id_siswa,$id_materi)
    {
        $time=time();
        //AMBIL DATA PRESENSI JOIN MATERI
        $q=mysqli_query($con,"select * from presensi join materi on presensi.id_materi = materi.id_materi where presensi.id_siswa = '$id_siswa' and presensi.id_materi = '$id_materi'");
        $dt=mysqli_fetch_array($q);
        //AMBIL DAT JADWAL
        $qjadwal = mysqli_query($con,"select jadwal from materi where id_materi = '$id_materi'");
        $dtjadwal = mysqli_fetch_array($qjadwal);
        //AKHIR JADWAL I JAM SETELAH JADWAL (3600 DETIK)
        $last=$dtjadwal[0] + 3600;
        
        //JIKA TIDAKADA PRESENSI
        if(empty($dt[0]))
        {
            //JIKA WAKTU MELEBIHI JADWAL / SUDAH LEWAT JADWAL SELAMA 1 JAM (3600 DETIK)
            if($time > $last)
            {
                $pesan = "1";
            } 
            //JIKA JADWAL MASIH BELUM BERLANGSUNG
            elseif($time < $dtjadwal[0])
            {
                $pesan = "2";
            }
            //JIKA SISWA BELUM PRESENSI DAN KURSUS SEDANG BERLANGSUNG
            else{
                $pesan = "3";
            }
        }
        //JIKA SISWA SUDAH PRESENSI / DITEMUKAN DATA PRESENSI SISWA
        else{
            //JIKA KURSUS SEDANG BERLANGSUNG
            if($time > $dtjadwal[0] and $time < $last)
            {
                $pesan ="4";
            }
            //JIKA KURSUS SUDAH SELESAI DAN DITEMUKAN DATA PRESENSI
            elseif($time > $last)
            {
                $pesan ="5";
            }
            //DATA SALAH
            else{
                $pesan ="0";
            }
        }
        // 1 = MELEWATKAN KURSUS
        // 2 = KURSUS BELUM DIMULAI , PRESENSI KOSONG
        // 3 = KURSUS SDG BERLANGSUNG, PRESENSI KOSONG
        // 4 = KURSUS BERLANGSUNG, PRESENSI ADA
        // 5 = KURSUS SELESAI, PRESENSI ADA
        return $pesan;
    }
}

?>