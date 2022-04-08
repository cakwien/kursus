<?php

class utama {
    function s_aktif($con,$username)
    {
        $q=mysqli_query($con,"select * from siswa where email = '$username'");
        $dt=mysqli_fetch_array($q);
        return $dt;
    }
}
?>