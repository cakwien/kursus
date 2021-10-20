<?php 

    class materi{
        
         function all($con)
         {
             $list = array();
             $q = mysqli_query($con,'select * from materi');
             while($dt=mysqli_fetch_array($q))
             {
                 $list[] = $dt;
             } 
             return $list;
         }

         function allByKelas($con,$id_kelas)
         {
             $list = array();
             $q=mysqli_query($con,"select * from materi join ampu on materi.id_ampu = ampu.id_ampu where ampu.id_kelas = '$id_kelas'");
             while($dt = mysqli_fetch_array($q))
             {
                 $list[] = $dt;
             }
             return $list;
         }

         function del($con,$id_materi)
         {
             $q=mysqli_query($con,'delete from materi where id_materi ='.$id_materi);
             if ($q){
             //
             }
         }

         function find($con,$materi,$param,$id)
         {
             $q=mysqli_query($con,'select * from '.$materi.' where '.$param.' = '.$id);  
             $dt = mysqli_fetch_array($q);
             return $dt;
         }

         function jumlahMateriByKelas($con,$id_kelas)
         {
             $q=mysqli_query($con,"select count(id_materi) as jumlah from materi join ampu on materi.id_ampu = ampu.id_ampu where ampu.id_kelas = '$id_kelas'");
             $dt=mysqli_fetch_array($q);
             return $dt;
         }

         
    }

?> 