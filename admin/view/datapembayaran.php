<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Tagihan Pembayaran
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover" id="tabelbayar" style="font-size:small">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tgl</th>
                                <th>Jenis Pembayaran</th>
                                <th>Nominal</th>
                                <th>Jumlah Tagihan</th>
                                <th>Status</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($listbayar as $lb) {
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $lb['nm_siswa'] ?></td>
                                    <td><?= tgl_indo($lb['time']) ?></td>
                                    <td><?= $lb['nm_kelas'] ?> <?= $lb['keterangan'] ?></td>
                                    <td><?= rp($lb['nominal']) ?></td>
                                    <td><?= rp($lb['jumlah_tagihan']) ?></td>
                                    <td><?= statusbayar($lb['status']) ?></td>
                                    <td>
                                        <a href="#myModal" data-id="<?= $lb['id_tagihan'] ?>" title="Lihat Detail" data-bs-toggle="modal" class="btn btn-sm btn-primary"><i class="bi-search"></i></a>
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



<div class="modal fade" aria-modal="true" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Tagihan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <div class="fetched-data"></div>
            </form>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('#myModal').on('show.bs.modal', function(e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: '?p=det-tagihan',
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('.fetched-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#tabelbayar').DataTable();
    });
</script>