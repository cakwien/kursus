<div class="row">
    <div class="col-md-12">
        <h5>Pengaturan Akun</h5>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="?p=logout" class="btn btn-danger" type="button">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                User Data
                <a href="?p=account&edit=true" class="btn btn-sm text-light float-end" style="background-color:navy;"><i
                        class="bi-pencil"></i></a>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama </label>
                    <input type="text" name="nama" id="" value="<?= $siswaaktif[1] ?>" class=" form-control"
                        <?= disedit() ?>>
                </div>
                <div class="form-group mt-2">
                    <label for="nama">Alamat </label>
                    <input type="text" name="nama" id="" value="<?= $siswaaktif[2] ?>" class="form-control"
                        <?= disedit() ?>>
                </div>
                <div class="form-group mt-2">
                    <label for="nama">Tempat Tanggal Lahir </label>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="tp_lahir" value="<?= $siswaaktif[3] ?>" class="form-control"
                                <?= disedit() ?>>
                        </div>
                        <div class="col">
                            <input type="<?= disedit2() ?>" name="tgl_lahir" value="" class="form-control"
                                <?= disedit() ?>>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label for="nama">Asal Sekolah </label>
                    <input type="text" name="nama" id="" value="<?= $siswaaktif[7] ?>" class="form-control"
                        <?= disedit() ?>>
                </div>
                <div class="form-group mt-2">
                    <label for="nama">No HP </label>
                    <input type="text" name="nama" id="" value="<?= $siswaaktif[5] ?>" class="form-control"
                        <?= disedit() ?>>
                </div>
                <div class="form-group mt-2">
                    <label for="nama">Email </label>
                    <input type="text" name="nama" id="" value="<?= $siswaaktif[6] ?>" class="form-control"
                        <?= disedit() ?>>
                </div>
                <div class="form-group mt-2">
                    <label for="">Password</label>
                    <div class="row">
                        <div class="col">

                            <input type="text" name="tp_lahir" class="form-control" disabled>
                        </div>
                        <div class="col">
                            <?php
                     if (!empty($_GET['edit'])) {
                     ?>
                            <a href="#" class="btn btn-warning">Ganti Password</a>
                            <?php } else {
                        echo "";
                     } ?>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <?php
            if (!empty($_GET['edit'])) {
               echo '<button type="submit" class="btn btn-primary float-end">Simpan</button>';
               echo '<a href="?p=account" class="btn btn-danger ">Batal</a>';
            } else {
               echo '';
            }
            ?>

            </div>
        </div>
    </div>
</div>