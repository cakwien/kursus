            
<?php

if (!empty($_GET['id']))
{
   $id = $_GET['id'];
   $mat = $materi->index($con, $id);

   $judul = $mat['judul'];
   $keterangan = $mat['keterangan'];
   $link = $mat['link'];
   $id_ampu = $mat['id_ampu'];
   $jadwal = $mat['jadwal'];
} else
{
   $id="";
}

