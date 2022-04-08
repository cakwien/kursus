<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Timeline Materi pada kelas : <?=$jdl[0]?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?p=kelas-saya">Kelas</a></li>
              <li class="breadcrumb-item active">Materi Kelas</li>
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
                <!-- The time line -->
                <div class="timeline">
                  <!-- timeline time label -->
                  <div class="time-label">
                    <div class="card">
                      <div class="card-header">
                        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#tambah"><i class="fa fa-paper-plane"> </i> Post Materi</a>
                        <a href="#" class="btn bg-lightblue" data-toggle="modal" data-target="#quiz"><i class="fa fa-pencil-ruler"> </i> Quiz</a>
                      </div>
                    </div>
                  </div>
                  <!-- /.timeline-label -->
          
                  <?php
                    foreach ($list_materi as $mat)
                    {
                  ?>
                  <!-- Materi Awal -->
                  <div>
                    <i class="fas fa-book bg-warning"></i>
                    <div class="timeline-item">
                      <span class="time"><i class="fas fa-clock"></i> <?=tglindo($mat['time'])?></span>
                      <h3 class="timeline-header">  <strong><?=$mat['judul']?></strong> 
                      </h3>
                      <div class="timeline-body">
                        <?=$mat['isi_materi']?>
                      </div>
                      <div class="timeline-footer">
                      <span title="Tanggal dimulainya materi" class="btn-sm bg-maroon"><i class="fa fa-calendar"></i>&nbsp;<?=tglindo($mat['jadwal'])?></span>
                      <a href="<?=$mat['link']?>" target="blank_" title="Klik untuk akses link" class="btn-sm bg-navy"><i class="fa fa-video"></i>&nbsp; Masuk Room VidCon</a>

                    

                      <a href="#" title="Opsi Materi" class="btn-xs bg-danger float-right" data-toggle="dropdown"><i class="fa fa-chevron-circle-down"></i></a>
                        <div class="dropdown-menu" role="menu">

                          <a href="#" data-toggle='modal' data-target='#show' data-id="<?=$mat['id_materi']?>" class="dropdown-item"><i class="fa fa-edit"> </i> Edit</a>

                          <a onClick="return confirm('Hapus Materi <?=$mat['judul']?> ?')" href="?p=mt-kelas&id=<?=$mat['id_ampu']?>&hapus=<?=$mat['id_materi']?>" class="dropdown-item"><i class="fa fa-trash"> </i> Hapus</a>
                        </div>
                      
                    </div>
                  </div>
                  <!-- Materi Akhir -->
                      <?php } ?>
                </div>
              <!-- /.col -->
            </div>
          </div>
       






        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
</div>


<!-- MODAL TAMBAH MATERI -->
  <div class="modal fade" id="tambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Post Materi Untuk Kelas <span class="btn bg-green"><?=$jdl[0]?></span></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="" method="post">
            <div class="modal-body">

            <div class="form-group">
                <label for="">Judul Materi</label>
                <input type="text" class="form-control" name="judul" placeholder="Judul Materi" required>
            </div>

            <div class="form-group">
                <label for="detail">Detail Materi</label>
                <textarea name="isi_materi" id="summernote" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label for="detail">Jadwal</label>
                  <input type="datetime-local" name="jadwal" class="form-control" id="" required>
            </div>

            <div class="form-group">
                <label for="detail">Link Zoom</label>
                <input type="text" name="link" class="form-control" id="" required>
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
<<<<<<< HEAD
 </div>
<!-- MODAL TAMBAHMATERI -->
 <!-- Test materi -->
  <!-- MODAL EDIT MATERI -->
      <div class="modal fade" id="show"  role="dialog">
        <div class="modal-dialog modal-lg" role="document">
=======
      </div>
    </div>

      <div class="modal fade" id="quiz">
        <div class="modal-dialog modal-lg">
>>>>>>> -
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Materi</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="" method="post">
            <div class="modal-body">
              <div class="modal-data"></div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-times"> </i> Batal</button>
              <button type="submit" class="btn btn-primary"> <i class="fa fa-save"> </i> Update Materi</button>
            </div>
            </form>
          </div>
        </div>
      </div>
  <!-- MODAL EDIT MATERI -->

<<<<<<< HEAD
  <!-- MODAL DAFTAR SISWA -->
    <div class="modal fade" id="daftarsiswa"  role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">DAFTAR SISWA</h5>
=======


      <!-- MODAL EDIT MATERI -->
      <!-- <div class="modal fade" id="show"  role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Materi</h5>
>>>>>>> -
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
<<<<<<< HEAD
            <div class="modal-body">
               <table id="example3" class="table table-striped table-bordered">
                 <thead>
                   <tr>
                     <th>No</th>
                     <th>Nama Siswa</th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <td></td>
                     <td></td>
                   </tr>
                 </tbody>
               </table>             
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-times"> </i> Tutup</button>
            </div>
          </div>
        </div>
      </div>
  <!-- MODAL DAFTAR SISWA -->
=======
            <form action="" method="post">
            <div class="modal-body">
              <div class="modal-data"></div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-times"> </i> Batal</button>
              <button type="submit" class="btn btn-primary"> <i class="fa fa-save"> </i> Simpan</button>
            </div>
            </form>
          </div>
        </div>
      </div> -->
      <!-- MODAL EDIT MATERI -->

     

      






 </div>

 
>>>>>>> -
