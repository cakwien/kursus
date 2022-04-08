<?php

    class materi{
        function all($con,$id_ampu)
        {
            $list = array();
            $q=mysqli_query($con,"select * from materi join ampu on materi.id_ampu = ampu.id_ampu where ampu.id_ampu = '$id_ampu'");
            while($dt=mysqli_fetch_array($q))
            {
                $list[] = $dt;
            }
            return $list;
        }

        function terbaru($con,$id_tentor)
        {
            $list = array();
            $q=mysqli_query($con,"Select * from materi join ampu on materi.id_ampu = ampu.id_ampu where ampu.id_tentor = '$id_tentor'");
            while($dt=mysqli_fetch_array($q))
            {
                $list[] = $dt;
            }
            return $list;
        }

        function jumlah($con,$id_ampu)
        {
            $q=mysqli_query($con,"select count(id_materi) from materi where id_ampu = '$id_ampu'");
            $dt= mysqli_fetch_array($q);
            return $dt;
        }

        function input($con,$id_ampu,$judul,$ket,$link,$jadwal)
        {
            $time = time();
            $q=mysqli_query($con,"insert into materi value('','$id_ampu','$judul','$ket','$link','$jadwal','$time')");
            if ($q)
            {
                $ps="Schedule materi berhasil di tambahkan";
                header('location:?to=kelas&amp='.rhs($id_ampu).'&ps='.rhs($ps));
            }else
            {
                $ps="Schedule materi Gagal di tambahkan";
                header('location:?to=kelas&amp='.rhs($id_ampu).'&pse='.rhs($ps));
            }
        }

        function delete($con,$id_materi,$id_ampu)
        {
            $q=mysqli_query($con,"delete from materi where id_materi = '$id_materi'");
            if ($q)
            {
                $ps="Schedule materi berhasil di hapus";
                header('location:?to=kelas&amp='.rhs($id_ampu).'&ps='.rhs($ps));
            }else
            {
                $ps="Schedule materi Gagal di hapus";
                header('location:?to=kelas&amp='.rhs($id_ampu).'&pse='.rhs($ps));
            }
        }

        function index($con,$id_materi)
        {
            $q=mysqli_query($con,"select * from materi where id_materi = '$id_materi'");
            $dt= mysqli_fetch_array($q);
            return $dt;        
        }
    }

?>