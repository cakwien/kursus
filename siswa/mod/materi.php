<?php

class materi
{
    function all($con)
    {
        $list = array();
        $q = mysqli_query($con, 'select * from materi');
        while ($dt = mysqli_fetch_array($q)) {
            $list[] = $dt;
        }
        return $list;
    }

    function allByRombel($con, $id_rombel)
    {
        $list = array();
        $q = mysqli_query($con, "select * from materi join ampu on materi.id_ampu = ampu.id_ampu join rombel on ampu.id_rombel = rombel.id_rombel where ampu.id_rombel = '$id_rombel'");
        while ($dt = mysqli_fetch_array($q)) {
            $list[] = $dt;
        }
        return $list;
    }

    function allByKelas($con, $id_kelas)
    {
        $list = array();
        $q = mysqli_query($con, "select * from materi join ampu on materi.id_ampu = ampu.id_ampu where ampu.id_kelas = '$id_kelas'");
        while ($dt = mysqli_fetch_array($q)) {
            $list[] = $dt;
        }
        return $list;
    }

    function del($con, $id_materi)
    {
        $q = mysqli_query($con, 'delete from materi where id_materi =' . $id_materi);
        if ($q) {
            //
        }
    }

    function find($con, $materi, $param, $id)
    {
        $q = mysqli_query($con, 'select * from ' . $materi . ' where ' . $param . ' = ' . $id);
        $dt = mysqli_fetch_array($q);
        return $dt;
    }

    function jumlahMateriByKelasRombel($con, $id_rombel)
    {
        $q = mysqli_query($con, "select count(id_materi) from materi join ampu on materi.id_ampu = ampu.id_ampu join rombel on ampu.id_rombel = rombel.id_rombel where rombel.id_rombel = '$id_rombel'");
        $dt = mysqli_fetch_array($q);
        return $dt;
    }

    function materibykelaslimit($con, $id_siswa, $limit)
    {
        $list = array();
        $q = mysqli_query($con, "select * from materi join ampu on materi.id_ampu = ampu.id_ampu join rombel on ampu.id_rombel = rombel.id_rombel join kelas on kelas.id_kelas = rombel.id_kelas join kelas_siswa on rombel.id_rombel = kelas_siswa.id_rombel where kelas_siswa.id_siswa = '$id_siswa' order by materi.time limit $limit");
        while ($dt = mysqli_fetch_array($q)) {
            $list[] = $dt;
        }
        return $list;
    }

    //tombol mulai dan selesai materi
    function cekwaktutbl($sekarang, $jadwal, $aktif, $disabled, $wait)
    {
        $tenggang = $jadwal + 3600;

        if ($sekarang > $jadwal) {
            if ($sekarang <= $tenggang) {
                $sts = $aktif;
            } else {
                $sts = $disabled;
            }
        } else {
            $sts = $wait;
        }
        return $sts;
    }
}