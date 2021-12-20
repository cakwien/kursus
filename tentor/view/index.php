<?php
$tnt = cekSession($con, $user);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/sidebar.css">
  <link href="toastr.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <title>OsingCourse</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#6F69AC">
    <div class="container">
      <a class="navbar-brand" href="#">OsingCourse</a>
      <div class="float-end">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item me-4">
              <a class="nav-link" href="?to=home">Beranda</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="#">Kelasku</a>
            </li>
            <li class="nav-item dropdown me-4">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Bimbel
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Kelas</a></li>
                <li><a class="dropdown-item" href="?to=privat">Privat</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown me-4">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                User Menu
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?to=user">Setting Akun</a></li>
                <li><a class="dropdown-item" href="?to=logout">Logout</a></li>
              </ul>
            </li>



          </ul>
        </div>
      </div>
    </div>
  </nav>


  <div class="container mt-3">
    <!-- Content Here -->
    <?php include('paging.php'); ?>
  </div>





  <script>
    toastr["success"]("Are you the six fingered man?");
  </script>


  <script>
    $(document).ready(function() {
      toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      }
    });
  </script>


  <script>
    // ini menyiapkan dokumen agar siap grak :)
    $(document).ready(function() {
      // yang bawah ini bekerja jika tombol lihat data (class="view_data") di klik
      $('.view_data').click(function() {
        // membuat variabel id, nilainya dari attribut id pada button
        // id="'.$row['id'].'" -> data id dari database ya sob, jadi dinamis nanti id nya
        var id = $(this).attr("id");

        // memulai ajax
        $.ajax({
          url: 'editmateri.php', // set url -> ini file yang menyimpan query tampil detail data siswa
          method: 'post', // method -> metodenya pakai post. Tahu kan post? gak tahu? browsing aja :)
          data: {
            id: id
          }, // nah ini datanya -> {id:id} = berarti menyimpan data post id yang nilainya dari = var id = $(this).attr("id");
          success: function(data) { // kode dibawah ini jalan kalau sukses
            $('#data_siswa').html(data); // mengisi konten dari -> <div class="modal-body" id="data_siswa">
            $('#myModal').modal("show"); // menampilkan dialog modal nya
          }
        });
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="toastr.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>