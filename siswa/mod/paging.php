<?php

  if (!empty($p))
  {
    //CEK STATUS KELAS SISWA
    $statuskelas = $kelas->cek_kelas_aktif($con,$s_aktif['id_siswa']);
    //IF KELAS DI TEMUKAN MAKA SISWA BISA AKSES SEMUA HALAMAN
    if (!empty($statuskelas[0]))
    {
      if($statuskelas['status'] == "nonaktif")
      {
        if($p=="daftar-kelas"){require_once('view/kelas_daftar.php');}
        elseif($p=="status-kelas"){require_once('view/kelas_status.php');}
        else{require_once('view/dash_non_kelas.php');}
      }
      else
      {
        if($p=="d-kelas"){require_once('view/detail_kelas.php');}
        elseif($p=="list-materi"){require_once('view/materi_list.php');}
        elseif($p=="status-kelas"){require_once('view/kelas_status.php');}
        //UNDERCONSTRUCTION
        else{require_once('view/ups.php');}
      }
    }
    //JIKA KELAS SISWA TIDAK DITEMUKAN MAKA MENU HALAMAN AKAN DI HAPUS DAN SISWA TIDAK BISA AKSES HALAMAN APAPUN
    else
    {
      if($p=="daftar-kelas"){require_once('view/kelas_daftar.php');}
      elseif($p=="status-kelas"){require_once('view/kelas_status.php');}
      else{require_once('view/dash_non_kelas.php');}
    }

    

    

  }else
  {
    //-------------------------------------------------------------------------
    //CEK JIKA SISWA BELUM TERDAFTAR DI KELAS MANAPUN
    //-------------------------------------------------------------------------
    $statuskelas = $kelas->cek_kelas_aktif($con,$s_aktif['id_siswa']);
    //JIKA TERDAFTAR :
    if (!empty($statuskelas[0]))
    {
      require_once('view/dash.php');
    }else
    {
      //JIKA BELUM TERDAFTAR
      require_once('view/dash_non_kelas.php');
    }
    
  }      

?>