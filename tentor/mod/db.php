<?php

    //KONEKSI KE DATABASE
    $hostDB			= "localhost";
    $usernameDB		= "root";
    $passwordDB		= "";
    $namaDB			= "kursus";

    $con = mysqli_connect($hostDB,$usernameDB,$passwordDB,$namaDB);

    //CEK KONEKSI
    if(mysqli_connect_error())
    {
        echo "GAGAL";
        die;
    }

    //SET TIMEZONE
    date_default_timezone_set('Asia/Jakarta');

    //TGLINDO
function tgl_indo($time){
    $tanggal = date('Y-m-d', $time);

	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}


//set halaman aktif
function hal($hal)
{
	if($_GET['to']==$hal)
	{
		$oke = "active fw-bold";
	}else
	{
		$oke = "";
	}
	return $oke;
}







    
?>
