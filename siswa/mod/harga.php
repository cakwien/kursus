<?php
class harga{
   function allaktif($con)
   {
      $list = array();
      $q=mysqli_query($con, "select * from tarif_kelas join kelas_tipe on tarif_kelas.id_kelas_tipe = kelas_tipe.id_kelas_tipe join kelas on kelas_tipe.id_kelas = kelas.id_kelas");
      while($dt = mysqli_fetch_array($q))
      {
         $list[]=$dt;
      }
      return $list;
   }

   function index($con,$id)
   {
      $q = mysqli_query($con, "select * from tarif_kelas join kelas_tipe on tarif_kelas.id_kelas_tipe = kelas_tipe.id_kelas_tipe join kelas on kelas_tipe.id_kelas = kelas.id_kelas where tarif_kelas.id_tarif = '$id' ");
      $dt = mysqli_fetch_array($q);
      return $dt;
   }

   function referral($con, $id_siswa) // kode referral pembayaran
   {
      $q = mysqli_query($con, "Select referral from referral where id_siswa = '$id_siswa'");
      $dt = mysqli_fetch_array($q);
      $ref = $dt[0];
      return $ref;
   }
}
?>