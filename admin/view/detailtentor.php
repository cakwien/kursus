<div class="container mt-3">
    <div class="row">


        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Tentor
                    <a href="?p=datatentor" class="btn btn-sm btn-danger float-end ms-2"><i class="bi-reply"></i> Kembali</a>

                    <?php if (empty($_GET['edit'])) { ?>
                        <a href="<?= base_url() ?>?p=detailtentor&id=<?= $_GET['id'] ?>&edit=true" class="btn btn-sm btn-primary float-end"><i class="bi-pencil"></i> Edit</a>
                    <?php } else { ?>
                        <a href="<?= base_url() ?>?p=detailtentor&id=<?= $_GET['id'] ?>" class="btn btn-sm btn-danger float-end"><i class="bi-x-square"></i> Batal</a>
                    <?php } ?>


                </div>
                <form action="" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">Nama Tentor</label>
                                    <input type="text" class="form-control form-control-sm" name="nm_tentor" value="<?= $ten['nm_tentor'] ?>" <?= edit() ?>>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Alamat</label>
                                    <input type="text" class="form-control form-control-sm" name="alamat" value="<?= $ten['alamat'] ?>" <?= edit() ?>>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Tempat Tanggal Lahir</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="tp_lahir" class="form-control form-control-sm" value='<?= $ten['tp_lahir'] ?>' <?= edit() ?>>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="date" name="tgl_lahir" class="form-control form-control-sm" value="<?= $ten['tgl_lahir'] ?>" <?= edit() ?>>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Nomor Telephone / HP</label>
                                    <input type="text" name="no_hp" class="form-control form-control-sm" value="<?= $ten['no_hp'] ?>" <?= edit() ?>>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Email</label>
                                    <input type="text" name="email" class="form-control form-control-sm" value="<?= $ten['email'] ?>" <?= edit() ?>>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control form-control-sm" placeholder="Password" value="<?= rhs(md5(rhs(rhs(md5($ten['password']))))) ?>" readonly>
                                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#respas" type="button" id="button-addon2">Reset Password</button>
                                </div>

                                <div class="card mt-3">
                                    <div class="card-header">
                                        <i class="bi-person-video3"></i> Kelas Ampu

                                        <?php
                                        if (!empty($_GET['edit'])) {
                                            echo '<a href="#" data-bs-toggle="modal" data-bs-target="#tambahkelas" class="btn btn-sm btn-primary float-end">Tambah Kelas</a>';
                                        }
                                        ?>


                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped table-success shadow-sm text-center">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <?php
                                                        if(!empty($_GET['edit'])){
                                                    ?>
                                                    <th>Opsi</th>
                                                    <?php } ?>
                                                    <th>Kelas</th>
                                                    <th>Jumlah Siswa</th>
                                                    <th>Jumlah Materi</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $no = 1;
                                            foreach ($amp as $p) {
                                            ?>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td><?= $no ?></td>
                                                        <?php
                                                        if(!empty($_GET['edit'])){
                                                        ?>
                                                        <td>
                                                            <a href="" class="btn btn-sm btn-danger"><i class="bi-trash"></i></a>
                                                            <a href="" class="btn btn-sm btn-primary"><i class="bi-pencil"></i></a>
                                                        </td>
                                                        <?php } ?>
                                                        <td><?= $p['nm_kelas'] ?></td>
                                                        <td><?= $siswa->jumlahsiswa($con, $p['id_rombel']) ?></td>
                                                        <td><?= $tentor->jumlahmateri($con, $p['id_ampu']) ?></td>
                                                    </tr>
                                                </tbody>
                                            <?php $no++;
                                            } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?php

                        if (!empty($_GET['edit'])) {
                            echo '<input type="submit" name="updatetentor" value="Update" class="btn btn-success">';
                        }

                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="modal fade" id="tambahkelas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Nama Tentor</label>
                                <input type="text" name="nama" id="" class="form-control form-control-sm" value="<?= $ten['nm_tentor'] ?>" readonly>
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Kelas</label>
                                <select name="rombel" class="form-select form-select-sm" id="">
                                    <option value="">Pilih Kelas</option>
                                    <?php foreach ($kelas->allkelasrombel($con) as $rom) { ?>
                                        <option value="<?= $rom['id_rombel'] ?>"><?= $rom['nm_kelas'] ?> - <?= $rom['id_rombel'] ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button name="simpanampu" type="submit" class="btn btn-primary"><i class="bi-save"></i> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="modal fade" id="respas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Reset Password ???</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Anda akan mereset Password '<?= $ten['nm_tentor'] ?>' ?
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