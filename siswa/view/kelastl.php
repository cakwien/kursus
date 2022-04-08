<?php
$stkelas = $kelas->cekStatusKelas($con, $_GET['rombel']);
?>


<div class="row rounded" style="background-color:#4B3869;">
    <div class="col-md-12 p-3">
        <h3 class="ms-3 text-light">Kelas <?= $datakelas['nm_kelas'] ?></h3>
        <?php foreach ($datatentor as $tent) {
            echo '<h5 class="ms-3 text-light"><i class="bi-person"></i> ' . $tent['nm_tentor'] . '</h5>';
        } ?>

    </div>
</div>

<div class="row">
    <div class="col-md-3 mt-2">
        <div class="card">
            <div class="card-header">
                Data Kelas
            </div>
            <div class="card-body">
                Aktif sampai dengan :
                <br>
                <span
                    class="bg-success ps-2 pe-2 fw-bold text-light rounded shadow-lg"><?= tgl_indo($stkelas['end']) ?></span>
            </div>
        </div>
    </div>
    <div class="col-md-9 mt-2">
        <div class="card">
            <div class="card-header">
                Daftar Schedule Materi
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
                    $listmateri = $materi->allByRombel($con, $_GET['rombel']);
                    foreach ($listmateri as $lm) {
                    ?>
                    <div class="col-md-12 mb-2">
                        <div class="card shadow-sm" style="border-color:#D1E8E4;">
                            <div class="card-body">
                                <h5><?= $lm['judul'] ?> <span class="text-success fw-bold"><i
                                            class="bi-check"></i></span></h5>
                                <p><?= $lm['keterangan'] ?></p>

                                <span class=" p-1 ps-2 pe-2 rounded text-light" style="background-color:navy"
                                    title="Jadwal"><i class="bi-calendar2"></i>
                                    <?= tgl_indo($lm['jadwal']) . " <i class='bi-clock'></i> " . date('H:i', $lm['jadwal']) ?></span>
                                <?php
                                    $aktif = '<a href="#" class="btn btn-sm btn-primary float-end me-1"><i class="bi-camera-video"></i> Masuk</a>';
                                    $disabled = '<a href="#" class="btn btn-sm btn-secondary float-end me-1"><i class="bi-check"></i> Selesai</a>';
                                    $wait = '<a href="#" class="btn btn-sm btn-warning float-end me-1"><i class="bi-hourglass-split"></i> Menunggu</a>';
                                    $sekarang = time();
                                    $tbl = $materi->cekwaktutbl($sekarang, $lm['jadwal'], $aktif, $disabled, $wait);
                                    echo $tbl;
                                    ?>


                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>