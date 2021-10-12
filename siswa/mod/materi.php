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

         
    }

?> 