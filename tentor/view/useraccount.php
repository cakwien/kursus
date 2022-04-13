<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                User Info
            </div>
            <form action="" method="post">

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?= $tnt['nm_tentor'] ?>" <?= inputDisable() ?>>
                        <input type="hidden" name="id" value="<?= $tnt['id_tentor'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Tempat Tanggal Lahir</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="tp_lahir" class="form-control" value="<?= $tnt['tp_lahir'] ?>" <?= inputDisable() ?>>
                            </div>
                            <div class="col-md-6">
                                <input type="date" name="tgl_lahir" class="form-control" value="<?= date('d/m/Y', strtotime($tnt['tgl_lahir'])) ?>" <?= inputDisable() ?>>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" class="form-control" rows="3" <?= inputDisable() ?>><?= $tnt['alamat'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" value="<?= $tnt['email'] ?>" <?= inputDisable() ?>>
                    </div>


                </div>
                <div class="card-footer">
                    <a href="#" data-bs-target="#pass" data-bs-toggle="modal" class="btn btn-warning"><i class="bi-key"></i> Rubah Password</a>
                    <?= tbupdateprofil() ?>
                </div>
            </form>


        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                Foto
            </div>
            <div class="card-body">

            </div>
            <div class="card-footer text-center">
                <a href="#" class="btn btn-primary"><i class="bi-camera"></i> Ganti Foto</a>
            </div>
        </div>
    </div>
</div>


<div class="row">

    <div class="modal fade" id="pass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Rubah Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <div class="form-group mb-2">
                            <label for="">Password Lama</label>
                            <input type="password" name="passlama" id="" class="form-control" required>
                            <input type="hidden" name="id_edit" value="<?=$tnt['id_tentor']?>" id="" class="form-control" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Password Baru</label>
                            <input type="password" name="passbaru1" id="" class="form-control" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Konfirmasi Password Baru</label>
                            <input type="password" name="passbaru2" id="" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="updatepass" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>