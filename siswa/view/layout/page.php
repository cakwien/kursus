<?php

if (!empty($p))
{
  if ($p == "home") {require_once('view/dash.php');}
  elseif ($p == "kelas") {require_once('view/kelaslist.php');}
  elseif ($p == "timelinekelas") {require_once('view/kelastl.php');}
  elseif ($p == "tryout") {require_once('view/tryout.php');}
  elseif ($p == "daftarkelas") {require_once('view/daftarkelas.php');}
  elseif ($p == "daftarprivat") {require_once('view/daftarprivat.php');}
  elseif ($p == "account") {require_once('view/account.php');}
  elseif ($p == "konfirmasi") {require_once('view/konfirmdaftar.php');}
  elseif ($p == "tagihan") {require_once('view/bill.php');}
  elseif ($p == "riwayat-pembayaran") {require_once('view/history_pembayaran.php');}
}else
{
  header('location:?p=home');
}

  

?>