<?php
session_start();
if (empty($_SESSION['username'])){
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
   Nama Ujian : <br>
   Jumlah Soal : <br>
   Waktu Pengerjaan : <br>

   <a href="soal.php">Kerjakan</a>
</body>
</html>



