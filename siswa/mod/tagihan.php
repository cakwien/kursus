<?php
class tagihan {
   
   function allbysiswa($con, $siswa)
   {
      $list=array();
      $q=mysqli_query($con,"select * from tagihan join tarif_kelas on tagihan.id_tarif = tarif_kelas.id_tarif join kelas_tipe on tarif_kelas.id_kelas_tipe = kelas_tipe.id_kelas join kelas on kelas_tipe.id_kelas = kelas.id_kelas where tagihan.id_siswa = '$siswa'");
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

   function input($con,$id_siswa,$id_tarif,$time,$time_limit,$status)
   {
      //tampilkan kode referral
      $qref = mysqli_query($con,"select referral from referral where id_siswa = '$id_siswa'");
      $dtref = mysqli_fetch_array($qref);
      $referral = $dtref['referral'];
      
      // tampilkan nominal tarif
      $qtarif = mysqli_query($con,"select tarif from tarif_kelas where id_tarif = '$id_tarif'");
      $dttarif = mysqli_fetch_array($qtarif);
      $nominal = $dttarif['tarif'];


      //jumlah tagihan 
      $jumlah_tagihan = $nominal + $referral;


      //input

      $qinput = mysqli_query($con,"insert into tagihan values('','$id_siswa','$id_tarif','$nominal','$referral','$jumlah_tagihan','$time','$time_limit','$status')");

      if($qinput)
      {
         header('location:?p=tagihan&msg=oke');
      }else
      {
         header('location:?p=tagihan&msg=fail');
      }

      

   }




   
   
}
?>