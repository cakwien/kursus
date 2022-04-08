<?php
class kelas{
    function all($con)
    {
        $list=array();
        $q=mysqli_query($con,"select * from kelas");
        while($dt = mysqli_fetch_array($q))
        {
            $list[]=$dt;
        }
        return $list;
    }

    function allkelasrombel($con)
    {
        $list = array();
        $q = mysqli_query($con, "select * from rombel join kelas on rombel.id_kelas = kelas.id_kelas");
        while ($dt = mysqli_fetch_array($q)) {
            $list[] = $dt;
        }
        return $list;
    }

    function allrombelbykelas($con,$id)
    {
        $list = array();
        $q = mysqli_query($con, "select * from rombel join kelas on rombel.id_kelas = kelas.id_kelas where rombel.id_kelas = '$id'");
        while ($dt = mysqli_fetch_array($q)) {
            $list[] = $dt;
        }
        return $list;
    }

    function index($con,$id)
    {
        $q=mysqli_query($con,"select * from kelas where id_kelas = '$id'");
        $dt = mysqli_fetch_array($q);
        return $dt;
    }

    function alltipekelas($con, $id)
    {
        $list = array();
        $q = mysqli_query($con, "select * from kelas_tipe join kelas on kelas_tipe.id_kelas = kelas.id_kelas where kelas_tipe.id_kelas = '$id'");
        while ($dt = mysqli_fetch_array($q)) {
            $list[] = $dt;
        }
        return $list;
    }

    
    
}