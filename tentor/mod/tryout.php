<?php
class tryout{
   
   function allbyclass($con,$id_ampu)
   {
      $list=array();
      $q=mysqli_query($con,"select * from jadwal_to join ampu on jadwal_to.id_kelas = ampu.id_kelas where ampu.id_ampu = '$id_ampu'");
      while($dt = mysqli_fetch_array($q))
      {
         $list[] = $dt;
      }
      return $list;
   }
}
?>

