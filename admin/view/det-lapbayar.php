<style>
    table.det {
        width: 100%;
        text-align: left;
        border-collapse: collapse;
    }

    table.det td,
    table.det th {
        border: 1px solid #000000;
        padding: 5px 4px;
    }

    table.det tbody td {
        font-size: 12px;
    }

    table.det thead {
        background: #CFCFCF;
        background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
        background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
        background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
        border-bottom: 3px solid #000000;
    }

    table.det thead th {
        font-size: 12px;
        font-weight: bold;
        color: #000000;
        text-align: left;
    }

    table.det tfoot {
        font-size: 14px;
        font-weight: bold;
        color: #000000;
        border-top: 3px solid #000000;
    }

    table.det tfoot td {
        font-size: 14px;
    }
</style>

<div class="row text-center">
    <div class="col-md-12">
        <h5>--- DETAIL PEMBAYARAN ---</h5>
        <span class="fw-bold">a.n. <?= $db['nm_siswa'] ?></span><br>
        <span style="font-size:small"><?= $db['asal_sekolah'] ?></span>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="det">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Jenis Pembayaran</th>
                    <th>Deskripsi</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Kelas <?= $db['nm_kelas'] ?></td>
                    <td><?= $db['keterangan'] ?></td>
                    <td class="text-end"><?= rp($db['tagnom']) ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Kode Referral</td>
                    <td>-</td>
                    <td class="text-end"><?= rp($db['referral']) ?></td>
                </tr>
                <tr>
                    <td colspan="3">Total</td>
                    <td class="text-end fw-bold"><?= rp($db['nominal']) ?></td>
                </tr>
            </tbody>
        </table>

        <small>Telah di bayarkan pada : <?=tgl_indo($db['time']) ." - ".date("H:i:s",$db['time'])  ?> </small>
    </div>

</div>