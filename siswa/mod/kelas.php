<?php

class kelas{
    function index($con,$id)
    {
        $q=mysqli_query($con,"select * from kelas where id_kelas = $id");
        $dt = mysqli_fetch_array($q);
        return $dt;
    }

    


}