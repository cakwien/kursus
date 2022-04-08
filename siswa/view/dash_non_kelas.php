<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

      <?php

        $ct=$tagihan->cek_tagihan($con,$s_aktif['id_siswa']);
        //JIKA DITEMUKAN DATA
        if (!empty($ct[0]))
        {
          if ($ct[6]=="0")//STATUS TAGIHAN
          { ?>
          <!-- Notif Tagihan Belum terbayar -->
            <div class="row">
              <div class="col-md-12">
                  <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-comment-dots"></i> Hai...</h5>
                        Tagihan pembayaran Kursus kamu masih belum terbayar, segera selesaikan ya. Agar kelasmu aktif dan bisa belajar bersama... Cek <a href="?p=status-kelas" class="btn-sm btn-danger">Disini</a>, skuy !
                  </div>
              </div>
          </div>
          <!-- Notif Tagihan Belum terbayar -->
          <?php  
          }
          elseif($ct[6]=="1")
          {
            ?>

             <!-- Notif Tagihan Belum terbayar -->
             <div class="row">
              <div class="col-md-12">
                  <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-comment-dots"></i> Hai...</h5>
                        Horee.. Pembayaranmu berhasil, Tinggal menunggu konfirmasi pembayaran. Cek <a href="?p=status-kelas" class="btn-sm btn-danger">Disini</a>, skuy !
                  </div>
              </div>
             </div>
          <!-- Notif Tagihan Belum terbayar -->
          <?php
          }
          else
          {
            echo "kelas Aktif";
          }
        }
        else
        {
          ?>
         <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-comment-dots"></i> Hai...</h5>
                      Kamu belum terdaftar dalam kelas kursus manapun. So, Daftar <a href="?p=daftar-kelas" class="btn-sm btn-danger">Disini</a>, skuy !
                </div>
            </div>
          </div>
          
        <?php
        }
        ?>

     


      </div>
     
      <!-- /.container-fluid -->
    </div>


    <!-- modal tambah -->







 </div>
