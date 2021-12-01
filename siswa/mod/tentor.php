<?php

class tentor{
   function indexByKelas($con,$id_kelas)
   {
      $lis = array();
      $q=mysqli_query($con,"select * from ampu join tentor on ampu.id_tentor = tentor.id_tentor where ampu.id_kelas = '$id_kelas'");
      while($dt = mysqli_fetch_array($q))
      {
         $lis[] = $dt;
      }
      return $lis;
   }
}
?>