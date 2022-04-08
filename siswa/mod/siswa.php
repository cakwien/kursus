<?php
    class siswa{
        function index($con,$id_siswa)
        {
            $q=mysqli_query($con,"Select * from siswa where id_siswa = $id_siswa");
            $dt = mysqli_fetch_array($q);
            return $dt;
        }
    }
?>