<?php

class ampu{

    function ampu_pertentor($con,$id_tentor)
    {
        $list=array();
        $q=mysqli_query($con,"select * from ampu join tentor on ampu.id_tentor = tentor.id_tentor join rombel on ampu.id_rombel = rombel.id_rombel join kelas on rombel.id_kelas = kelas.id_kelas where ampu.id_tentor='$id_tentor' ");
        while($d=mysqli_fetch_array($q))
        {
            $list[]=$d;
        }
        return $list;
    }   
}
 
?>