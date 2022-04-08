<?php

class tentor{
   function indexByKelas($con,$id_rombel)
   {
      $lis = array();
      $q=mysqli_query($con,"select * from tentor join ampu on ampu.id_tentor = tentor.id_tentor join rombel on ampu.id_rombel = rombel.id_rombel join kelas on rombel.id_kelas = kelas.id_kelas where rombel.id_rombel = '$id_rombel'");
      while($dt = mysqli_fetch_array($q))
      {
         $lis[] = $dt;
      }
      return $lis;
   }
}
?>