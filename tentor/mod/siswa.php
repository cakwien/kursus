<?php

class siswa{
    function allByAmpu($con,$id_ampu)
    {
        $list=array();
        $q=mysqli_query($con,"select * from kelas_siswa join rombel on kelas_siswa.id_rombel = rombel.id_rombel join ampu on ampu.id_rombel = rombel.id_rombel join siswa on kelas_siswa.id_siswa = siswa.id_siswa where ampu.id_ampu = '$id_ampu'");
        while($dt=mysqli_fetch_array($q))
        {
            $list[]=$dt;
        }
        return $list;
    }
}


?>