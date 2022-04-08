<?php
class kelas{
    function index($con,$id_tentor)
    {
        $list=array();
        $q=mysqli_query($con,"select * from ampu join tentor on ampu.id_tentor = tentor.id_tentor join rombel on ampu.id_rombel = rombel.id_rombel join kelas on rombel.id_kelas = kelas.id_kelas where ampu.id_tentor = '$id_tentor'");
        while($dt=mysqli_fetch_array($q))
        {
            $list[]=$dt;
        }
        return $list;
    }

    function jumlahsiswa($con,$id_kelas)
    {
        $q=mysqli_query($con, "select count(id_siswa) from kelas_siswa join rombel on kelas_siswa.id_rombel = rombel.id_rombel where rombel.id_kelas = $id_kelas ");
        $dt=mysqli_fetch_array($q);
        return $dt;
    }

    //data

    function indexById($con,$id_kelas)
    {
        $q=mysqli_query($con,"select * from kelas where id_kelas = '$id_kelas'");
        $dt=mysqli_fetch_array($q);
        return $dt;
    }

    function indexByAmpu($con,$id_ampu)
    {
        $q=mysqli_query($con,"select * from ampu join rombel on ampu.id_rombel = rombel.id_rombel join kelas on rombel.id_kelas = kelas.id_kelas where ampu.id_ampu = '$id_ampu'");
        $dt=mysqli_fetch_array($q);
        return $dt;
    }

    
}
?>