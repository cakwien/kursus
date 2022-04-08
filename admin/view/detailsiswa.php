<div class="container mt-3 mb-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <i class="bi-person-bounding-box"></i> Detail Siswa
                    <a href="<?= base_url() ?>?p=datasiswa" class="btn btn-sm btn-danger float-end"><i class="bi-reply"></i> Kembali</a>
                    <?php
                    if (empty($_GET['edit'])) {
                    ?>
                        <a href="<?= base_url() ?>?p=detailsiswa&id=<?= $_GET['id'] ?>&edit=true" class="btn btn-sm btn-primary float-end me-2"><i class="bi-pencil"></i> Edit</a>
                    <?php } else { ?>

                        <a href="<?= base_url() ?>?p=detailsiswa&id=<?= $_GET['id'] ?>" class="btn btn-sm btn-danger float-end me-2"><i class="bi-x-square"></i> Batal</a>
                    <?php } ?>
                </div>
                <form action="" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama Siswa</label>
                                    <input type="text" class="form-control" name="nm_siswa" placeholder="Nama Siswa" value="<?= $sis['nm_siswa'] ?>" <?= edit() ?>>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?= $sis['alamat'] ?>" <?= edit() ?>>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="nama">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tp_lahir" placeholder="Tempat Lahir" value="<?= $sis['tp_lahir'] ?>" <?= edit() ?>>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="nama">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tgl_lahir" value="<?= date('Y-m-d', strtotime($sis['tgl_lahir'])) ?>" <?= edit() ?>>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="nama">Asal Sekolah</label>
                                    <input type="text" class="form-control" name="asal_sekolah" placeholder="Asal Sekolah" value="<?= $sis['asal_sekolah'] ?>" <?= edit() ?>>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="nama">No Telp</label>
                                    <input type="text" class="form-control" name="no_hp" placeholder="Nomor Telephone" value="<?= $sis['no_hp'] ?>" <?= edit() ?>>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="nama">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email" value="<?= $sis['email'] ?>" <?= edit() ?>>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="Password" value="<?= md5(rhs(rhs(md5($sis['password'])))) ?>" readonly>
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#respass" type="button" id="button-addon2">Reset Password</button>
                                </div>

                                <div class="card mt-3">
                                    <div class="card-header">
                                        Kelas Aktif
                                    </div>
                                    <div class="card-body">
                                        <?php
                                        foreach ($siswa->kelassiswa($con, bukarhs($_GET['id'])) as $ks) {
                                        ?>
                                            <div class="col-md-6">
                                                <div class="card shadow-lg" style="background-color:antiquewhite">
                                                    <div class="card-body">
                                                        <div class="fs-5"><?= $ks['nm_kelas'] ?></div>
                                                        <div class="fs-6">Sejak : <?= tgl_indo($ks['start']) ?></dd>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php } ?>

                                            </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card-footer">
                            <?php if (!empty($_GET['edit'])) {  ?>
                                <button type="submit" class="btn btn-success"><i class="bi-refresh"></i> Update</button>
                            <?php } ?>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="modal fade" id="respass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Reset Password ???</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Anda akan mereset Password '<?= $sis['nm_siswa'] ?>' ?
                    </div>
                    <form action="" method="post">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="respass" class="btn btn-primary">Reset Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>