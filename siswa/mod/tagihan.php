<?php
class tagihan {
   
   function allbysiswa($con, $siswa)
   {
      $list=array();
      $q=mysqli_query($con,"select * from tagihan where id_siswa = '$siswa'");
      while($dt = mysqli_fetch_array($q))
      {
         $list[] = $dt;
      }
      return $list;
   }

   function cekallbysiswa($con, $siswa)
   {
      $q = mysqli_query($con, "select * from tagihan where id_siswa = '$siswa'");
      $dt = mysqli_num_rows($q);
      return $dt;
   }

   
   //1 = terbayar, 2=belum terbayar, 3=tunggu konfirmasi
   function statustagihan($status)
   {
      if ($status == 1)
      {
         return '<i class="bi-circle-fill" style="color:green;"></i> Terbayar';
      }
      elseif ($status == 2)
      {
         return '<i class="bi-circle-fill" style="color:orange;"></i> Menunggu Konfirmasi';
      }
      else
      {
         return '<i class="bi-circle-fill" style="color:red;"></i> Belum terbayar';
      }
   }




   
   
}
?>