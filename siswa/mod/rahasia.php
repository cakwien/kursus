<?php

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

function disedit()
{
	if (!empty($_GET['edit'])){
		if ($_GET['edit'] == "true") {
			echo "";
		} else {
			echo "disabled";
		}
	}else
	{
		echo "disabled";
	}
	
}

function cekwaktu($sekarang,$jadwal)
{
	$tenggang = $jadwal + 3600;

	if ($sekarang > $jadwal)
	{
		if ($sekarang <= $tenggang)
		{
			$sts = '<span class="bg-info rounded-pill float-end text-light p-1 pe-2 "><i class="bi-check"></i> Sedang Berlangsung</span>';
		}else
		{
			$sts = '<span class="bg-success rounded-pill float-end text-light p-1 pe-2 "><i class="bi-check"></i> Selesai</span>';
		}
	}else
	{
		$sts= '<span class="bg-warning rounded-pill float-end text-light p-1 pe-2 "><i class="bi-check"></i> Menunggu</span>';
	}
	return $sts;
}

function cekwaktutbl($sekarang, $jadwal)
{
	$tenggang = $jadwal + 3600;

	if ($sekarang > $jadwal) {
		if ($sekarang <= $tenggang) {
			$sts = 'btn btn-sm btn-info';
		} else {
			$sts = 'btn btn-sm btn-secondary disabled';
		}
	} else {
		$sts = 'btn btn-sm btn-warning disabled';
	}
	return $sts;
}


