<?php
class harga{
   function allaktif($con)
   {
      $list = array();
      $q=mysqli_query($con, "select * from harga_kelas join kelas_utama on harga_kelas.id_kelas_utama = kelas_utama.id_kelas_utama where harga_kelas.status=1");
      while($dt = mysqli_fetch_array($q))
      {
         $list[]=$dt;
      }
      return $list;
   }

   function index($con,$id)
   {
      $q = mysqli_query($con,"select * from harga_kelas join kelas_utama on harga_kelas.id_kelas_utama = kelas_utama.id_kelas_utama where harga_kelas.id_harga = '$id'");
      $dt = mysqli_fetch_array($q);
      return $dt;
   }
}
?>