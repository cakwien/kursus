<?php

class siswa{
    function allByAmpu($con,$id_ampu)
    {
        $list=array();
        $q=mysqli_query($con,"select * from kelas_siswa join siswa on kelas_siswa.id_siswa = siswa.id_siswa join ampu on kelas_siswa.id_kelas = ampu.id_kelas where ampu.id_ampu = '$id_ampu'");
        while($dt=mysqli_fetch_array($q))
        {
            $list[]=$dt;
        }
        return $list;
    }
}


?>