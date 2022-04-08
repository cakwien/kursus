<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

      <div class="row">
          <div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">
              <!-- timeline time label -->
              <div class="time-label">
              <span class="bg-green"><i class="fa fa-check"></i></span>
                <span class="bg-red"><?=$k_aktif['nm_kelas']?></span>
              </div>
              <!-- /.timeline-label -->
       
              <?php
                $lmateri = $materi->tp_materi_kelas($con,$k_aktif['id_kelas']);
                foreach ($lmateri as $mat)
                {
              ?>
              <!-- Materi Awal -->
              <div>
                <i class="fas fa-book bg-warning"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> <?=sejak($mat['time'])?></span>
                  <h3 class="timeline-header">  <strong><?=$mat['judul']?></strong> 
                  </h3>
                  <div class="timeline-body">
                    <?=$mat['isi_materi']?>
                  </div>
                 
                  <div class="timeline-footer">
                    <!-- <a href="?p=mt-detail" class="btn-sm btn-primary btn-sm"> <i class="fa fa-search"> </i> Mulai Kursus</a> -->
                    <?php
                      $sts=$presensi->cp($con,$s_aktif['id_siswa'],$mat['id_materi']);
                      if($sts=="1")
                      { echo '<span class="btn-sm btn-danger"><i class="fa fa-ban"></i> Belum Tuntas</span>';}     
                      elseif($sts=="2")
                      {echo '<span class="btn-sm btn-warning"><i class="fa fa-spinner"></i> Coming Soon</span>';}
                      elseif($sts=="3")
                      {echo '<a href="?p=go&id_s='.$s_aktif['id_siswa'].'&id_m='.$mat['id_materi'].'" target="blank_" class="btn-sm btn-info"><i class="fa fa-sign-in-alt"> </i> Sedang Berlangsung</a>';}
                      elseif($sts=="4")
                      {echo '<a href="'.$mat['link'].'" target="blank_" class="btn-sm btn-primary"><i class="fa fa-chevron-circle-right"> </i> Lanjutkan Kursus</a>';}
                      elseif($sts=="5")
                      {echo '<span class="btn-sm btn-success"><i class="fa fa-thumbs-up"></i> Tuntas</span>';} 
                    ?>
                    <a class="btn-sm bg-navy btn-sm"><i class="fa fa-clock"></i> &nbsp;<?=tglindo($mat['jadwal']) ?></a>
                    <a class="btn-sm bg-blue btn-sm"><i class="fa fa-clock"></i> WIB</a>
                  </div>
                  </div>
                </div>
              <!-- Materi Akhir -->
                  <?php } ?>
             







            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>
       






        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>


    <!-- modal tambah -->
    

      





 </div>
