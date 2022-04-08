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

function edit()
{
    if(!empty($_GET['edit']))
    {
        if($_GET['edit'] == "true")
        {
            echo "";
        }else
        {
            echo "readonly";
        }
    }else{
        echo "readonly";
    }
}

function tgl_indo($time)
{
    $tanggal = date('Y-m-d', $time);

    $bulan = array(
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

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}

function rp($angka)
{

    $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
}

function statusbayar($st)
{
    if($st=="1")
    {
        $a = ' <i class="bi-circle-fill" style="color:green;"></i> Lunas';
    }else
    {
        $a = '<i class="bi-circle-fill" style="color:red;"></i> Belum terbayar';
    }

    return $a;
}



?>