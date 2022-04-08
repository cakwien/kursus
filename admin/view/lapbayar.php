<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Laporan Pembayaran
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover" id="tabellapbayar" style="font-size:small">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Atas Nama</th>
                                <th>Waktu</th>
                                <th>Deskripsi</th>
                                <th>Jumlah Nominal</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($laporanbayar as $lb) {
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $lb['nm_siswa'] ?></td>
                                    <td><?= date('d/m/Y H:i:s', $lb['time']) ?></td>
                                    <td><?= $lb['nm_kelas'] . "-" . $lb['keterangan'] ?></td>
                                    <td><?= rp($lb['nominal']) ?></td>
                                    <td>
                                        <a title="Detail" href="#detail" data-bs-toggle="modal" data-id="<?=$lb['id_bayar']?>" class="bg-primary p-1 rounded text-light"><i class="bi-search"></i></a>
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


    <div class="row">
        <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Pembayaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="isi-modal"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('#detail').on('show.bs.modal', function(e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: '?p=det-lapbayar',
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('.isi-modal').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#tabellapbayar').DataTable();
    });
</script>