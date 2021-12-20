<?php
session_start();
if (empty($_SESSION['username'])) 
{
   header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   Daftar Soal

   <table border=1 width="50%" >
      <tr>
         <td>Soal</td>
         <td>Kerjakan</td>
      </tr>
      <tr>
         <td>Soal</td>
         <td>Kerjakan</td>
      </tr>
   </table>
</body>

</html>