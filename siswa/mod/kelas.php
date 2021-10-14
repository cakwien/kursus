<?php

class kelas{

    function index($con,$id)
    {
        $q=mysqli_query($con,"select * from kelas where id_kelas = $id");
        $dt = mysqli_fetch_array($q);
        return $dt;
    }

    function status($sts)
    {
        if ($sts == 1)
        {
            $ps = "Menunggu Pembayaran";
        }else if ($sts == 2)
        {
            $ps = "Pending";
        }else if ($sts == 3)
        {
            $ps = "Aktif";
        }else
        {
            $ps = "Non Aktif";
        }
        return $ps;
    }

    


}