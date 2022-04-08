<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
  </link>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</head>

<body class="">

  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url() ?>">Admin OsingCourse</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Master Data
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="<?= base_url() ?>?p=datasiswa">Data Siswa</a></li>
              <li><a class="dropdown-item" href="<?= base_url() ?>?p=datatentor">Data Tentor</a></li>
              <li><a class="dropdown-item" href="<?= base_url() ?>?p=datakelas">Data Kelas</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Payment 
              <?php 

                $tag = $payment->jumlahbelumkonfirm($con);
                if ($tag > 0)
                {

              ?>
              <i class="bi-circle-fill text-danger"></i>

              <?php } ?>


            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="<?= base_url() ?>?p=datapembayaran">Tagihan <span class="badge bg-danger"><?= $payment->jumlahbelumkonfirm($con) ?></span> </a></li>
              <li><a class="dropdown-item" href="<?= base_url() ?>?p=lapbayar">Laporan</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-1">
    <div class="row">
      <div class="col-md-12">

        <?php

        if (!empty($_GET['ps'])) {
          echo '<div class="alert alert-primary pesan" role="alert">' . bukarhs($_GET['ps']) . '</div>';
        } elseif (!empty($_GET['pse'])) {
          echo '<div class="alert alert-danger pesan" role="alert">' . bukarhs($_GET['pse']) . '</div>';
        }

        ?>
      </div>
    </div>
  </div>

  <?php
  include('mod/paging.php');
  ?>

  <script>
    swal({
      title: 'Error!',
      text: 'Do you want to continue',
      type: 'error',
      confirmButtonText: 'Cool'
    })
  </script>

  <script>
    window.setTimeout(function() {
      $(".pesan").fadeTo(300, 0).slideUp(300, function() {
        $(this).remove();
      });
    }, 3000);
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.0/sweetalert2.min.js" integrity="sha512-4tabfKsx9Wdz5xwd0sT7jqKrieHkIpLXWXVeG/GT4BohF2l/eIaE54Gxb2gzeSH/kVwz0tLL4qpJwsluJuSymA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>