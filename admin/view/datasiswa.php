<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Siswa
                    <a href="#" data-bs-toggle="modal" data-bs-target="#tambahsiswa" class="btn btn-sm btn-primary float-end"><i class="bi-person-plus"></i> Tambah Siswa</a>
                </div>
                <div class="card-body">
                    <table id="tabelsiswa" class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Option</th>
                                <th>Nama</th>
                                <th>Asal Sekolah</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($listsiswa as $sis) {
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td>

                                        <a href="?p=detailsiswa&id=<?= rhs($sis['id_siswa']) ?>" class="btn btn-sm btn-primary"><i class="bi-person-bounding-box"></i></a>
                                        <a href="#" class="btn btn-sm btn-danger" onClick="confirm_modal('?p=datasiswa&hapus=<?= $sis['id_siswa'] ?>','<?= $sis['nm_siswa'] ?>');"><i class="bi-trash"></i></a>

                                    </td>
                                    <td><?= $sis['nm_siswa'] ?></td>
                                    <td><?= $sis['asal_sekolah'] ?></td>
                                    <td><?= $sis['email'] ?></td>
                                </tr>

                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tambahsiswa" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class="row ms-2 me-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nama">Nama Siswa</label>
                                <input type="text" class="form-control" name="nm_siswa" placeholder="Nama Siswa">
                            </div>
                            <div class="form-group mt-2">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                            </div>
                            <div class="form-group mt-2">
                                <label for="nama">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tp_lahir" placeholder="Tempat Lahir">
                            </div>
                            <div class="form-group mt-2">
                                <label for="nama">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir">
                            </div>
                            <div class="form-group mt-2">
                                <label for="nama">Asal Sekolah</label>
                                <input type="text" class="form-control" name="asal_sekolah" placeholder="Asal Sekolah">
                            </div>
                            <div class="form-group mt-2">
                                <label for="nama">No Telp</label>
                                <input type="text" class="form-control" name="no_hp" placeholder="Nomor Telephone">
                            </div>
                            <div class="form-group mt-2">
                                <label for="nama">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group mt-2">
                                <label for="nama">Password</label>
                                <input type="password" class="form-control" name="password1" placeholder="Password">
                            </div>
                            <div class="form-group mt-2">
                                <label for="nama">Konfirmasi Password</label>
                                <input type="password" class="form-control" name="password2" placeholder="Password">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Siswa</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="modal fade" id="hapussiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="hapustentor">
                        Apakah Yakin akan menghapus Siswa
                        <h5 class="mt-2" id="namasiswa"></h5>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <a href="#" class="btn btn-danger" id="delsiswa"> Hapus</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function confirm_modal(delete_url, nm_siswa) {
        $('#hapussiswa').modal('show', {
            backdrop: 'static'
        });
        document.getElementById('namasiswa').innerHTML = nm_siswa + " ?";
        document.getElementById('delsiswa').setAttribute('href', delete_url);
    }
</script>

<script>
    $(document).ready(function() {
        $('#tabelsiswa').DataTable();
    });
</script>