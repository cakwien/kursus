<?php
class payment{
    function alltagihan($con)
    {
        $list = array();
        $q=mysqli_query($con, "Select * from tagihan join siswa on siswa.id_siswa = tagihan.id_siswa join tarif_kelas on tagihan.id_tarif = tarif_kelas.id_tarif join kelas_tipe on tarif_kelas.id_kelas_tipe = kelas_tipe.id_kelas_tipe join kelas on kelas_tipe.id_kelas = kelas.id_kelas;");
        while($dt = mysqli_fetch_array($q))
        {
            $list[] = $dt;
        }
        return $list;
    }

    function index($con,$id)
    {
        $q = mysqli_query($con, "Select * from tagihan join siswa on siswa.id_siswa = tagihan.id_siswa join tarif_kelas on tagihan.id_tarif = tarif_kelas.id_tarif join kelas_tipe on tarif_kelas.id_kelas_tipe = kelas_tipe.id_kelas_tipe join kelas on kelas_tipe.id_kelas = kelas.id_kelas where tagihan.id_tagihan = '$id'");
        $dt = mysqli_fetch_array($q);
        return $dt;
    }

    function setstatus($con,$id,$nominal)
    {
        $time=time();
        $q=mysqli_query($con,"update tagihan set status = '1' where id_tagihan = '$id'");
        if($q)
        {
            $q2 = mysqli_query($con,"insert into pembayaran value('','$id','$nominal','$time')");
            if($q2)
            {
                $ps="Berhasil konfirmasi pembayaran, Tagihan akan masuk ke dalam Data Pembayaran";
                header('location:?p=datapembayaran&ps='.rhs($ps));
            }else
            {
                $ps = "Operasi Gagal !!";
                header('location:?p=datapembayaran&pse=' . rhs($ps));
            }
        }else
        {
            $ps = "Operasi Gagal !!";
            header('location:?p=datapembayaran&pse=' . rhs($ps));
        }
    }

    function jumlahbelumkonfirm($con)
    {
        $q = mysqli_query($con, "Select sum(id_tagihan) as jumlah from tagihan where status='0'");
        $dt = mysqli_fetch_array($q);
        return $dt[0];
    }




    function allbayar($con)
    {
        $list = array();
        $q = mysqli_query($con, "Select pembayaran.id_bayar, pembayaran.id_tagihan, pembayaran.nominal, pembayaran.time, siswa.nm_siswa, kelas_tipe.keterangan, kelas.nm_kelas from pembayaran join tagihan on pembayaran.id_tagihan = tagihan.id_tagihan join siswa on siswa.id_siswa = tagihan.id_siswa join tarif_kelas on tagihan.id_tarif = tarif_kelas.id_tarif join kelas_tipe on tarif_kelas.id_kelas_tipe = kelas_tipe.id_kelas_tipe join kelas on kelas_tipe.id_kelas = kelas.id_kelas;");
        while ($dt = mysqli_fetch_array($q)) {
            $list[] = $dt;
        }
        return $list;
    }


    function indexbayar($con,$id)
    {
        $q = mysqli_query($con, "Select pembayaran.id_bayar, tagihan.referral, tagihan.nominal as tagnom, tarif_kelas.tarif, siswa.asal_sekolah, pembayaran.id_tagihan, pembayaran.nominal, pembayaran.time, siswa.nm_siswa, kelas_tipe.keterangan, kelas.nm_kelas from pembayaran join tagihan on pembayaran.id_tagihan = tagihan.id_tagihan join siswa on siswa.id_siswa = tagihan.id_siswa join tarif_kelas on tagihan.id_tarif = tarif_kelas.id_tarif join kelas_tipe on tarif_kelas.id_kelas_tipe = kelas_tipe.id_kelas_tipe join kelas on kelas_tipe.id_kelas = kelas.id_kelas where pembayaran.id_bayar = '$id'");
        $dt = mysqli_fetch_array($q);
        return $dt;
    }

    
}
?>