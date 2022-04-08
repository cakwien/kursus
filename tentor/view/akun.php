<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Tentor</h1>
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
                        <h3 class="card-title">Akun Saya</h3>
                    </div>
                    <form action="" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" name="nm_tentor" value="<?=$t['nm_tentor']?>" class="form-control" id="">
                                <input type="hidden" name="id_tentor" value="<?=$id_tentor?>" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat Lengkap</label>
                                <input type="text" name="alamat" value="<?=$t['alamat']?>" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Tempat Lahir</label>
                                <input type="text" name="tp_lahir" value="<?=$t['tp_lahir']?>" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Tgl Lahir</label>
                                <input type="date" name="tgl_lahir" value="<?=$t['tgl_lahir']?>" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">No. Hp</label>
                                <input type="text" name="no_hp" value="<?=$t['no_hp']?>" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" value="<?=$t['email']?>" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" value="<?=$t['password']?>" class="form-control" id="">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="float-right">
                                <button type="submit" class="btn btn-info"><i class="fa fa-save"> </i> Update</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
