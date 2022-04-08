<?php
if ($_POST['rowid']) {
    $dt = $payment->index($con, $_POST['rowid']);
}

?>

<div class="modal-body">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group mb-3">
                <label for="">Nama:</label>
                <input type="text" name="nama" class="form-control" readonly value="<?= $dt['nm_siswa'] ?>" id="">
                <input type="hidden" name="id" class="form-control" readonly value="<?= $dt['id_tagihan'] ?>" id="">
                <input type="hidden" name="nominal" class="form-control" readonly value="<?= $dt['jumlah_tagihan'] ?>" id="">
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Tagihan</th>
                        <th>Nominal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><?= $dt['nm_kelas'] ?> - <?= $dt['keterangan'] ?></td>
                        <td class="text-end"><?= rp($dt['nominal']) ?></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Kode Referral</td>
                        <td class="text-end"><?= rp($dt['referral']) ?></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="text-end fw-bold">
                        <td colspan="2">Total</td>
                        <td><?= rp($dt['jumlah_tagihan']) ?></td>
                    </tr>
                </tfoot>
            </table>
            <div class="row">
                <span>Tanggal Tagihan : </span> <span></span><strong><?= tgl_indo($dt['time']) . "-" . date('H:i:s', $dt['time']) ?> s/d <?= tgl_indo($dt['time_limit']) . "-" . date('H:i:s', $dt['time_limit']) ?></strong></span>
                <span>Status Pembayaran : </span> <span> <?= statusbayar($dt['status']) ?></span>
            </div>

        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <?php 
        if($dt['status'] == "0")
        {
            echo '<button type="submit" name="konfirm" class="btn btn-primary">Konfirm Bayar</button>';
        }
    ?>
    <button type="submit" name="hapus" class="btn btn-danger">Hapus Pembayaran</button>
</div>