<?php
if (!empty($_GET['hapus'])) {
    $hapus = $_GET['hapus'];
    mysqli_query($con, "delete from tentor where id_tentor = '$hapus'");
}
?>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Tentor
                    <a href="#" data-bs-target="#tambahtentor" data-bs-toggle="modal" class="btn btn-sm btn-primary float-end"><i class="bi-person-plus"></i> Tambah Tentor</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover" id="tabeltentor">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Option</th>
                                <th>Nama Tentor</th>
                                <th>Email</th>
                                <th>Kelas Ampu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($listtentor as $isi) {
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td>
                                        <a href="<?= base_url() ?>?p=detailtentor&id=<?= $isi['id_tentor'] ?>" class="btn btn-sm btn-primary"><i class="bi-person-bounding-box"></i></a>
                                        <a href="#" onClick="confirm_modal('?p=datatentor&del=<?= $isi['id_tentor'] ?>','<?= $isi['nm_tentor'] ?>');" class="btn btn-sm btn-danger"><i class="bi-trash"></i></a>

                                    </td>
                                    <td><?= $isi['nm_tentor'] ?></td>
                                    <td><?= $isi['email'] ?></td>
                                    <td>

                                        <?php
                                        foreach ($amp = $tentor->amputentor($con, $isi['id_tentor']) as $at) {
                                            echo $at['nm_kelas'] . $at['id_rombel'] . ", ";
                                        }
                                        ?>

                                    </td>
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

<div class="modal fade" id="tambahtentor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Tentor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="">Nama Tentor</label>
                                <input type="text" class="form-control" name="nm_tentor">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Alamat</label>
                                <input type="text" class="form-control" name="alamat">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Tempat Tanggal Lahir</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="tp_lahir" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date" name="tgl_lahir" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Nomor Telephone / HP</label>
                                <input type="text" name="no_hp" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" name="password1">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Konfirmasi Password</label>
                                    <input type="password" class="form-control" name="password2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>







<div class="row">
    <div class="modal fade" id="hapustentor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="hapustentor">
                        Apakah Yakin akan menghapus data tentor :
                        <h5 class="mt-2" id="namatentor"></h5>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="#" class="btn btn-danger" id="deltentor"> Hapus</a>
                </div>
            </div>
        </div>
    </div>
</div>




<script type="text/javascript">
    function confirm_modal(delete_url, nm_tentor) {
        $('#hapustentor').modal('show', {
            backdrop: 'static'
        });
        document.getElementById('namatentor').innerHTML = nm_tentor + " ?";
        document.getElementById('deltentor').setAttribute('href', delete_url);
    }
</script>

<script>
    $(document).ready(function() {
        $('#tabeltentor').DataTable();
    });
</script>