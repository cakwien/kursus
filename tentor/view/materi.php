<?php
$listmateri = $materi->tampilmateri($con,$id_tentor);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Materi Saya</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v3</li>
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
          <div class="col-lg-12">
            <!-- /.card -->
           <div class="card">
            
                <div class="card-header">
                <a class="btn btn-primary" data-toggle="modal" data-target="#tambah" href=""><i class="fa fa-plus"> </i> Tambah Data</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover" id="example3">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Timestamp</th>
                                <th>Kelas</th>
                                <th>Materi</th>
                                <th>Jadwal Kursus</th>
                                <th>Opsi </th>
                            </tr>
                        </thead>
                        <tbody>
                         <?php
                          $n=1;
                          $materiall = $materi->tampilmateri_all($con,$id_tentor);
                          foreach($materiall as $list){
                         ?>
                            <tr>
                                <td><?=$n?></td>
                                <td><?=tgl_indo($list['time'])?></td>
                                <td><?=$list['nm_kelas']?></td>
                                <td><?=$list['judul']?> <span class="btn-xs btn-warning"><i class="fa fa-search"></i></span></td>
                                <td><span class="btn-sm bg-info"><?=tgl($list['jadwal'])," | ", jam($list['time'])?> WIB</span></td>
                                <td>
                                    <a title="Edit Materi" href="?p=mt-edit&id=<?=$list['id_materi']?>" class="btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                    <a title="Hapus Materi" href="?p=materi&del=<?=$list['id_materi']?>" data-confirm="Apakah yakin menghapus data ini ?" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php $n++; } ?>
                       
                        </tbody>
                    </table>
                </div>
            
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
        
          <!-- /.col-md-6 -->
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
              <h5 class="modal-title">Tambah Mata Pelajaran <?=$id_tentor?></h5>
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
                <label for="detail">Jadwal :</label>
                <input type="date" name="jadwal" class="form-control" id="">
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
