<?php

session_start();
if (empty($_SESSION['username'])) {
  header('location:login');
} else {
  $username = $_SESSION['username'];
  $t = $utama->tentoraktif($con, $username);

  $id_tentor = $t['id_tentor'];

  $list_schedule  = $materi->show_new($con, $id_tentor); //TAMPIL MATERI TABLE SCHEDULE TERBARU
  $listkelas      = $kelas->kelasampu($con, $id_tentor); // TAMPIL KELAS YANG DI AMPU (CARD KELAS SAYA)

}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Osing Course | Banyuwangi</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker.css">



  <!-- Data Tabel -->
  <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- SELECT 2 -->
  <link rel="stylesheet" href="../assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <link rel="shortcut icon" href="../assets/dist/img/ippnulogo.png" type="image/x-icon">

  <!-- SUMMER NOTE -->
  <link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.min.css">


</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light ">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>


      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../tentor" class="brand-link">
        <img src="../assets/dist/img/pp.jpg" alt="Osing Course Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">OsingCourse </span>

      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">

            <a href="#" class="d-block"><?php echo $t['nm_tentor']; ?></a> <a class="btn-xs btn-info">Tentor</a>

          </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-1">
          <ul class="nav nav-pills nav-sidebar" data-widget="treeview" role="menu" data-accordion="true">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
              <a href="../tentor" class="nav-link">
                <i class="nav-icon fas fa-chart-area"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="?p=kelas-saya" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Kelas Saya
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book-reader"></i>
                <p>
                  E-Learning
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="?p=materi" class="nav-link">
                    <i class="fa fa-list-alt nav-icon"></i>
                    <pa>List Materi</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="?p=materi2" class="nav-link">
                    <i class="fa fa-stream nav-icon"></i>
                    <pa>Timeline Materi</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="?p=quiz-list" class="nav-link">
                    <i class="fa fa-pencil-ruler nav-icon"></i>
                    <pa>Quiz</p>
                  </a>
                </li>
              </ul>
            </li>


            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Setting Akun
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="?p=akun" class="nav-link">
                    <i class="fa fa-stream nav-icon"></i>
                    <pa>Akun Saya</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="?p=logout" class="nav-link bg-red">
                    <i class="fa fa-times nav-icon"></i>
                    <pa>Logout</p>
                  </a>
                </li>
              </ul>
            </li>









          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <?php
    include('mod/paging.php');
    ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="../assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE -->
  <script src="../assets/dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="../assets/plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../assets/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../assets/dist/js/pages/dashboard3.js"></script>

  <!-- InputMask -->
  <script src="../assets/plugins/moment/moment.min.js"></script>
  <script src="../assets/plugins/inputmask/jquery.inputmask.min.js"></script>
  <!-- date-range-picker -->
  <script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>

  <!-- Data Tabel -->
  <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../assets/plugins/jszip/jszip.min.js"></script>
  <script src="../aseets/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../assets/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- sweet allert -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <!-- summernote -->
  <script src="../assets/plugins/summernote/summernote-bs4.min.js"></script>

  <!-- select2 -->
  <script src="../assets/plugins/select2/js/select2.full.min.js"></script>

  <!-- mapel -->
  <script src="../assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="../assets/plugins/raphael/raphael.min.js"></script>
  <script src="../assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="../assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->
  <script src="../assets/plugins/chart.js/Chart.min.js"></script>


  <script>
    $(function() {
      // Summernote
      $('#summernote').summernote()
      $('#summernote_editmateri').summernote()

      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
  </script>

  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      });


      $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  <script>
    function ps_del() {
      Swal.fire({
        title: 'Anda yakin akan menghapus?',
        text: "Data yang terhapus tidak bisa di kembalikan lagi!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus Saja!'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = getLink,
            Swal.fire(
              'Terhapus',
              'Data berhasil di hapus',
              'success'
            )

        }
      });
    }
  </script>
  <script>
    //Date and time picker
    //Date and time picker

    $('#reservationdatetime').datetimepicker({
      icons: {
        time: 'far fa-clock'
      }
    });

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {
      'placeholder': 'dd/mm/yyyy'
    })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', {
      'placeholder': 'mm/dd/yyyy'
    })
    $('[data-mask]').inputmask()



    $(document).ready(function() {

      $('a[data-confirm]').click(function(ev) {
        var href = $(this).attr('href');

        if (!$('#dataConfirmModal').length) {
          $('body').append('<div id="dataConfirmModal" class="modal fade bs-modal-sm" tableindex="-1" role="dialog" aria-labelledby="dataConfirmLabel" aria-hiden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h4 class="modal-title" id="dataConfrimLabel">Konfirmasi</h4><button type="button" class="close" data-dismiss="modal" aria-hiden="ture">&times;</button></div><div class="modal-body"> <h4 class="tanya"></h4> </div><div class="modal-footer"><button type="button" class="btn btn-default btn-sx" data-dismiss="modal" aria-hiden=""true"><i class="fa fa-close"></i> Tidak </button><a class="btn btn-danger btn-sx" aria-hiden="true" id="dataConfirmOK"><i class="fa fa-check-square-o"></i> Ya </a></div></div></div></div>');
        }

        $('#dataConfirmModal').find('.tanya').text($(this).attr('data-confirm'));

        $('#dataConfirmOK').attr('href', href);

        $('#dataConfirmModal').modal({
          show: true
        });
        return false;
      });

    });
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script>
    $(function() {
      $("#example3").DataTable({
        "language": {
          //"url": "indonesia.json",
          "sEmptyTable": "Tidak ada data di database",
          "sProcessing": "Sedang memproses...",
          "sLengthMenu": "Tampilkan _MENU_ entri",
          "sZeroRecords": "Tidak ditemukan data yang sesuai",
          "sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
          "sInfoEmpty": "Menampilkan 0 sampai 0 dari 0 entri",
          "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
          "sInfoPostFix": "",
          "sSearch": "Cari:",
          "sUrl": "",
          "oPaginate": {
            "sFirst": "Pertama",
            "sPrevious": "Sebelumnya",
            "sNext": "Selanjutnya",
            "sLast": "Terakhir"
          }
        }
      });

    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#show').on('show.bs.modal', function(e) {
        var getDetail = $(e.relatedTarget).data('id');
        /* fungsi AJAX untuk melakukan fetch data */
        $.ajax({
          type: 'post',
          url: '?p=mat-edit',
          /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
          data: 'getDetail=' + getDetail,
          /* memanggil fungsi getDetail dan mengirimkannya */
          success: function(data) {
            $('.modal-data').html(data);
            /* menampilkan data dalam bentuk dokumen HTML */
          }
        });
      });
    });
  </script>

  <?php echo pesan(); ?>
  <?php echo pesan_hapus(); ?>
</body>

</html>