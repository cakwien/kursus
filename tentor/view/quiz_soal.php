<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quiz : </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                           <a href="#" class="btn btn-info" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus-square"> </i> Tambah Soal</a>
                        </div>
                        <div class="card-body">
                            
                            <table class="table table-hover table-bordered table-striped table-hover" id="example2">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Soal</th>
                                        <th>Jawaban Benar</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1 + 1 + 2 = ...?</td>
                                        <td>4</td>
                                        <td>
                                            <a href="" class="btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                            <a href="" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            <a href="" class="btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>1 + 1 + 2 = ...?</td>
                                        <td>4</td>
                                        <td>
                                            <a href="" class="btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                            <a href="" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            <a href="" class="btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="tambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form action="" method="post">
            <div class="modal-body">

            <div class="form-group">
                <label for="detail">Soal</label>
                <textarea name="detail" id="summernote" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label for="detail">Kunci</label>
                <textarea name="detail" class="form-control" cols="30" rows="2"></textarea>
            </div>

            <div class="form-group">
                <label for="detail">Jawaban 1</label>
                <textarea name="detail" class="form-control" cols="30" rows="2"></textarea>
            </div>

            <div class="form-group">
                <label for="detail">Jawaban 2</label>
                <textarea name="detail" class="form-control" cols="30" rows="2"></textarea>
            </div>

            <div class="form-group">
                <label for="detail">Jawaban 3</label>
                <textarea name="detail" class="form-control" cols="30" rows="2"></textarea>
            </div>

            <div class="form-group">
                <label for="detail">Jawaban 4</label>
                <textarea name="detail" class="form-control" cols="30" rows="2"></textarea>
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



</div>