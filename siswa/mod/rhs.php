<?php

function rhs($isi)
{
    $encode=base64_encode($isi);
    return $encode;
}

function bukarhs($isi)
{
    $decode=base64_decode($isi);
    return $decode;
}

function rp($angka)
{
	
	$hasil_rupiah = "Rp " . number_format($angka,0,',','.');
	return $hasil_rupiah;
 
}

function pesan()
    {
        if (!empty($_GET['ps']))
        {
            $ps=bukarhs($_GET['ps']);
            echo '<script>Swal.fire({title:"Berhasil !",showConfirmButton: true,text: "'.$ps.'",icon: "success" })</script>';
        }
        else if (!empty($_GET['pse']))
        {
            $ps=bukarhs($_GET['pse']);
            echo '<script>Swal.fire({title:"Oopps !",showConfirmButton: true,text: "'.$ps.'",icon: "error"})</script>';
        }
        else{
          echo "";
        }
    }

function tgl($time){

    $tanggal = date('Y-m-d',$time);

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

function jam($time)
{
    $jam  = date('H:i', $time);
    return $jam;
}

function randwarna()
{
    $warna = rand('red','blue','green','blue');
    return $warna;
}

function hari($time)
{
	$hr = date('l',$time);
	if ($hr == "Monday"){$hari = "Senin";}
	elseif($hr == "Tuesday") { $hari = "Selasa";}
	elseif($hr == "Wednesday") { $hari = "Rabu";}
	elseif($hr == "Thursday") { $hari = "Kamis";}
	elseif($hr == "Friday") { $hari = "Jum'at";}
	elseif($hr == "Saturday") { $hari = "Sabtu";}
	elseif($hr == "Sunday") { $hari = "Minggu";}
	else{$hari="Salah";}
	

	return $hari;
}

function tglindo($time)
{
	$tanggal = tgl($time);
	$jam = jam($time);
	$hari = hari($time);
	$tgindo = $hari.", ".$tanggal." | ".$jam." WIB";
	return $tgindo;
}

function selected($selector,$selected)
{
	if ($selected == $selector)
	{
		$sl = "selected=selected";
	}
	else {
		$sl ="";
	}
	return $sl;
}

function mulaikursus($jadwal,$siswa,$materi)
{
	$time = time();
	$ongoing = $time + 3600;

	//jika waktu sudah masuk jadwal
	if ($time < $jadwal)
	{
		$hasil = '<a href="#" class="btn-sm btn-warning btn-sm"> <i class="fa fa-spinner"> </i> Coming Soon</a>';
	}
	elseif ($time > $jadwal)
	{
		$hasil = '<a href="?p=go&id_s='.$siswa.'&id_m='.$materi.'" class="btn-sm btn-primary btn-sm"> <i class="fa fa-play"> </i> Mulai Kursus</a>';
	}
	elseif ($time > $ongoing)
	{
		$hasil = '<a href="#" class="btn-sm btn-danger btn-sm"> <i class="fa fa-times"> </i> Kursus Sudah Lewat</a>';
	}
	else{
		$hasil = '<a href="#" class="btn-sm btn-danger btn-sm"> <i class="fa fa-times"> </i> Kursus Sudah Lewat</a>';
	}
	
	return $hasil;
}

function sejak($jam)
{
    $skrg=time();
    $selisih=$skrg-$jam;
    $tgl=date('d',$jam);
    $tglskrg=date('d',$skrg);
        
        if ($selisih >= 0)
        {
            $print="Baru Saja";

            if ($selisih >= 60)
            {
                $print= floor($selisih / 60) . " Menit Yang Lalu";

                if ($selisih >= 3600)
                {
                    $print= "1 Jam Yang Lalu";

                    if ($selisih >= 7200)
                    {
                        if ($tgl == $tglskrg)
                        {
                            $print="Hari ini, Pukul ". date('H:i ',$jam). "WIB";
                        }else if ($tgl != $tglskrg)
                        {
                            $print="Kemarin, Pukul ". date('H:i ',$jam). "WIB";
                        }

                        if ($selisih >= 86400)
                        {
                            $print= tglindo($jam);
                        }
                    }
                }
            }
            return $print;
        }
}



?>