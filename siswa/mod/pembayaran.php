<?php
class pembayaran
{
   function allbysiswa($con,$id_siswa)
   {
      $list = array();
      $q=mysqli_query($con,"select * from pembayaran join tagihan on pembayaran.id_tagihan = tagihan.id_tagihan where tagihan.id_siswa = '$id_siswa'");
      while($dt=mysqli_fetch_array($q))
      {
         $list[]=$dt;
      }
      return $list;
   }

   function cekallbysiswa($con,$id_siswa)
   {
      $q = mysqli_query($con, "select * from pembayaran join tagihan on pembayaran.id_tagihan = tagihan.id_tagihan where tagihan.id_siswa = '$id_siswa'");
      $jum = mysqli_num_rows($q);
      return $jum;
   }
}
?>