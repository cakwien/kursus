<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Time Line Materi Saya</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Timeline Materi</li>
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
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <a href="" data-toggle="modal" data-target="#tambah" class="btn-sm btn-primary"><i class="fa fa-clipboard-list"></i> Tambah Materi</a>
              <a href="" class="btn-sm btn-success"><i class="fa fa-tasks"></i> Tambah Quiz</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
          <div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">
              <!-- timeline time label -->
              <div class="time-label">
               
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->

              <?php 
                $list_materi = $materi->tampilmateri_all($con,$id_tentor);
                foreach ($list_materi as $lm)
                {
              ?>


              <div>
                <i class="fas fa-book bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> <?=tgl($lm['time'])?></span>
                  <h3 class="timeline-header"> <span class="btn-sm btn-success"><?=$lm['nm_kelas']?></span>  <strong><?=$lm['judul']?></strong> 
                  </h3>
                  <div class="timeline-body">
                  <?=$lm['isi_materi']?>
                  </div>
                  <div class="timeline-footer">
                   <span class="btn-sm bg-orange"><i class="fa fa-calendar"></i> <?=tgl($lm['jadwal'])?></span>
                    <a class="btn-sm btn-danger dropdown-toggle dropdown-icon" data-toggle="dropdown">Opsi </a>
                      <div class="dropdown-menu" role="menu">
                        <a href="<?=$lm['link']?>" target="_blank" rel="noopener noreferrer" class="dropdown-item"><i class="fa fa-link"></i> Masuk Link</a>
                        <a href="#" class="dropdown-item"><i class="fa fa-edit"></i> Edit</a>
                        <a href="#" class="dropdown-item"><i class="fa fa-trash"></i> Hapus</a>
                      </div>
                    
                  </div>
                </div>
              </div>

              <?php } ?>

              <div class="time-label">
              <i class="fas fa-book bg-blue-disabled"></i>
              </div>

             

            
             
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
    <div class="modal fade" id="tambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Tambah Schedule Materi</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="" method="post">
            <div class="modal-body">

            <div class="form-group">
                <label for="">Kelas :</label>
                <select name="id_ampu" class="form-control" style="height: 100%">
                  <?php $list_ampu = $ampu->ampu_pertentor($con,$id_tentor); foreach ($list_ampu as $la) { ?>
                    <option value="<?=$la['id_ampu']?>"><?=$la['nm_kelas']?></option>
                  <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="">Judul Materi :</label>
                <input type="text" class="form-control" name="judul" placeholder="Judul Materi">
            </div>

            <div class="form-group">
                <label for="detail">Detail Materi :</label>
                <textarea name="isi_materi" id="summernote" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label for="">Link :</label>
                <input type="text" class="form-control" name="link" placeholder="Judul Materi">
            </div>

          
            <div class="form-group">
                  <label>Jadwal Materi :</label>
                   <div class="row">
                     <div class="col-md-5">
                       <input type="date" name="jadwal" id="" class="form-control">
                     </div>
                     <div class="col-md-3">
                       <input type="number" name="jam" id="" class="form-control">
                     </div>
                   </div>
            </div>


            </div>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-times"> </i> Batal</button>
              <button type="submit" class="btn btn-primary"> <i class="fa fa-save"> </i> Simpan</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>






 </div>
