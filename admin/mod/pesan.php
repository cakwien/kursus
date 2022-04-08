<?php
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

?>