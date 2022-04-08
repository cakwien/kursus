<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="content-header">
                <h4>Timeline Kelas <?=$jdl[0]?></h4>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="timeline">
                        <!-- TIMELINE TOP BAR (ISINYA TOMBOL) -->
                        <div class="time-label">
                            <div class="card">
                                <div class="card-header">
                                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#tambah"><i class="fa fa-paper-plane"> </i> Post Materi</a>
                                <a href="#" class="btn bg-olive"><i class="fa fa-users"></i>&nbsp;Daftar Siswa</a>
                                </div>
                            </div>
                        </div>


                        <!-- LOOP TIMELINE -->
                        <?php
                        foreach ($list_materi as $mat)
                        {
                        ?>
                        <div>
                            <i class="fa fa-list bg-danger"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock"></i> <?=tglindo($mat['time'])?></span>
                                <h3 class="timeline-header" style="font-weight:bold"><?=$mat['judul']?></h3>
                                <div class="timeline-body">
                                    <?=$mat['isi_materi']?>
                                </div>
                                <div class="timeline-footer">
                                    <span class="btn-sm bg-navy"><?=tglindo($mat['jadwal'])?></span>
                                    <a href="<?=$mat['link']?>" class="btn-sm btn-primary"><i class="fa fa-video"></i>&nbsp;Zoom</a>
                                    <div class="float-right">
                                        <a title="Edit materi ini" href="#" data-toggle='modal' data-target='#show' data-id="<?=$mat['id_materi']?>" class="btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                        <a title="Hapus materi ini" onClick="return confirm('Hapus Materi <?=$mat['judul']?> ?')" href="?p=mt-kelas&id=<?=$mat['id_ampu']?>&hapus=<?=$mat['id_materi']?>" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <?php } ?>

                        <!-- TIMELINE -->

                        <!-- PENUTUP TIMELINE -->
                        <div>
                        <i class="fa fa-dot-circle bg-grey"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
 </div>
<!-- MODAL TAMBAHMATERI -->
  <!-- MODAL EDIT MATERI -->
      <div class="modal fade" id="show"  role="dialog">
        <div class="modal-dialog modal-lg" role="document">
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