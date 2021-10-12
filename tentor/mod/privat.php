<?php
class privat{
    function all($con,$id_tentor)
    {
        $list=array();
        $q=mysqli_query($con,"select * from privat join siswa on privat.id_siswa = siswa.id_siswa where privat.id_tentor = '$id_tentor'");
        while($dt=mysqli_fetch_array($q))
        {
            $list[]=$dt;
        }
        return $dt;
    }
}
?>