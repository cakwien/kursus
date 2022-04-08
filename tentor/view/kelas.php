<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kelas Saya</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kelas Saya</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        
        <?php
          $listkelas = $kelas->kelasampu($con,$id_tentor);
          foreach ($listkelas as $kl)
          {
            $jmlsiswa = $siswa->jumlahsiswakelas($con,$kl['id_kelas']);
            $jml_materi = $kelas->jumlahmateriperkelas($con,$kl['id_kelas']);
        ?>
         
        <!-- info box -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-red"><i class="far fa-address-card"></i></span>
              <div class="info-box-content">
              <a href="?p=mt-kelas&id=<?=$kl['id_ampu']?>">
              <strong>
                <span class="info-box-text"><?php echo $kl['nm_kelas']; ?></span>
              </strong>
              </a>
                <span class="info-box-number"> 
                <a class="btn-sm btn-success"><i class="fas fa-child"> </i>  &nbsp;<?php echo $jmlsiswa[0]; ?></a> 
                <a class="btn-sm btn-primary"><i class="fas fa-book"> </i>  &nbsp;<?=$jml_materi[0]?></a>
                </span>
              </div>
            </div>
          </div>

          <?php } ?>
        <!-- info box -->

        <!-- info box -->
        
        <!-- info box -->


      
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>


    <!-- modal tambah -->







 </div>
