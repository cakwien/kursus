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
}else
{
  header('location:?p=home');
}

  

?>