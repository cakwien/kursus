
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Osing Course | Banyuwangi</title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/dist/css/adminlte.min.css">

  <!-- Data Tabel -->
  <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- SELECT 2 -->
  <link rel="stylesheet" href="../../assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <link rel="shortcut icon" href="../assets/dist/img/ippnulogo.png" type="image/x-icon">

  <!-- SUMMER NOTE -->
  <link rel="stylesheet" href="../../assets/plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="../../assets/plugins/bs-stepper/css/bs-stepper.min.css">
  

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
  <!-- Content Wrapper. Contains page content -->
   

        <div class="content">
            <div class="content-header">
            </div>
            <div class="content">
            <div class="container-fluid">
            <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header bg-secondary">
                <h3 class="card-title text-bold">Daftar Akun Osing Course</h3>
                <a href="../login" class="btn btn-primary float-right">Sudah Punya Akun? Silahkan Login <i class="fa fa-sign-in-alt"></i></a>
              </div>
              <div class="card-body p-0">
                <div class="bs-stepper bg-light">
                  <div class="bs-stepper-header" role="tablist">
                    <!-- your steps here -->
                    <div class="step" data-target="#bio-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="bio-part" id="bio-part-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Lengkapi Biodata</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#pp-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="pp-part" id="pp-part-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Upload Foto</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#login-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="login-part" id="login-part-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label">Isi Akun Login</span>
                      </button>
                    </div>

                 

                   
                  </div>


                  <div class="bs-stepper-content">
                    <!-- your steps content here -->
                    <form action="daftar.php" method="post" enctype="multipart/form-data">
                    <div id="bio-part" class="content" role="tabpanel" aria-labelledby="bio-part-trigger">

                        <div class="form-group">
                            <label for="namalengkap">Nama Lengkap :</label>
                            <div class="col-md-9">
                                <input type="text" name="nm_lengkap" id="" class="form-control" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="namalengkap">Alamat :</label>
                            <div class="col-md-9">
                                <textarea name="alamat" id="" cols="30" rows="5" class="form-control" placeholder="Alamat Lengkap"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="namalengkap">Tempat & Tanggal Lahir :</label>
                            <div class="row">
                               
                                <div class="col-md-3">
                                    <input type="text" name="tp_lahir" id="" class="form-control" placeholder="Kota Kelahiran" >
                                </div>
                                <div class="col-md-3">
                                    <input type="date" name="tgl_lahir" id="" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="namalengkap">Asal Sekolah :</label>
                            <div class="col-md-9">
                                <input type="text" name="asal_sekolah" id="" class="form-control" placeholder="Sekolah Asal">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="namalengkap">No. Hp :</label>
                            <div class="col-md-4">
                                <input type="text" name="no_hp" id="" class="form-control" placeholder="Format : 081xxxxxxxxx">
                            </div>
                        </div>

                        <div class="line"></div>
                        <br>

                      <a href="#" class="btn btn-primary" onclick="stepper.next()">Lanjut <i class="fa fa-arrow-circle-right"></i></a>
                    </div>

                    <div class="content" id="pp-part" role="tabpanel" aria-labelledby="pp-part-trigger">
                       <div class="form-group">
                        <label for="exampleInputFile">File Foto</label>
                        <div class="form-group">
                            <input type="file" name="foto" class="form-control" id="">
                        </div>
                      </div>
                      <div class="line"></div>
                      <br>
                      <a href="#" class="btn btn-primary" onclick="stepper.previous()"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
                      <a href="#" class="btn btn-primary" onclick="stepper.next()">Lanjut <i class="fa fa-arrow-circle-right"></i></a>
                    </div>

                    <div id="login-part" class="content" role="tabpanel" aria-labelledby="login-part-trigger">
                    
                      <div class="form-group">
                        <label for="Email">Email :</label>
                        <div class="row">
                            <div class="col-md-5">
                                <input type="email" name="email" class="form-control" placeholder="Contoh : xxxxx@xxxx.com">
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="Password">Password :</label>
                        <div class="row">
                            <div class="col-md-5">
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                      </div>
                     
                      <div class="line"></div>
                      <br>
                      <a href="#" class="btn btn-primary" onclick="stepper.previous()"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
                      <button type="submit" class="btn btn-success"> <i class="fa fa-check-circle"></i> Daftar Sekarang !</button>
                    </div>

                    </form>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
            </div>
            </div>
        </div>





    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
 
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../../assets/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../../assets/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../assets/dist/js/pages/dashboard3.js"></script>

<!-- Data Tabel -->
<script src="../../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../assets/plugins/jszip/jszip.min.js"></script>
<script src="../../aseets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- sweet allert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- summernote -->
<script src="../../assets/plugins/summernote/summernote-bs4.min.js"></script>

<!-- select2 -->
<script src="../../assets/plugins/select2/js/select2.full.min.js"></script>

<!-- mapel -->
<script src="../../assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../../assets/plugins/raphael/raphael.min.js"></script>
<script src="../../assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../../assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../../assets/plugins/chart.js/Chart.min.js"></script>
<!-- BS-Stepper -->
<script src="../../assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })
  
</script>



<?php //echo pesan(); ?>
</body>
</html>
