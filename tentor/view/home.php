<div class="row">
    <h5>Selamat Datang, <?= $tnt['nm_tentor'] ?></h5>
</div>
<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header text-light" style="background-color:#00C1D4;">
                Daftar Kelas Bimbel Saya
            </div>
            <div class="card-body" style="background-color:#EEEEEE;">
                <div class="row">
                    <?php

                    $listkelas = $kelas->index($con, $tnt['id_tentor']);
                    foreach ($listkelas as $lk) {
                        $js = $kelas->jumlahsiswa($con, $lk['id_kelas']);
                        $jm = $materi->jumlah($con, $lk['id_ampu']);

                    ?>
                        <div class="col-md-3">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <p class="fs-4 "><?= $lk['nm_kelas'] ?></p>

                                    <span title="Jumlah Siswa dalam Kelas" class="bg-primary text-light ps-1 pe-1 pt-1 pb-1 rounded"><i class="bi-person-circle"></i> <?= $js[0] ?></span>
                                    <span title="Jumlah Materi" class="bg-success text-light ps-1 pe-1 pt-1 pb-1 rounded"><i class="bi-book"></i> <?= $jm[0] ?></span>

                                    <a title="Detail Kelas" href="?to=kelas&amp=<?= rhs($lk['id_ampu']) ?>" class="float-end btn btn-sm btn-danger"><i class="bi-search"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>





</div>

<div class="row">
    <div class="col-md-12 mt-2">
        <div class="card">
            <div class="card-header text-light" style="background-color:#00C1D4;">
                Kelas Privat
            </div>
            <div class="card-body" style="background-color:#EEEEEE;">

            </div>
        </div>
    </div>
</div>

<div class="row mt-3 mb-3">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-light" style="background-color:#716F81;">
                Schedule Bimbel Kelas
            </div>
            <div class="card-body" style="background-color:#EEEEEE;">
                <?php
                $listterbaru = $materi->terbaru($con, $tnt['id_tentor']);
                foreach ($listterbaru as $lt) {

                ?>
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5><?= $lt[2] ?></h5>
                            <span class="bg-success text-light ps-2 pe-2 pt-1 pb-1 rounded"><i class="bi-calendar-2"></i> <?= tgl_indo($lt['jadwal']) ?></span>
                            <a href="" title="Mulai Kelas" class="btn btn-sm btn-primary"><i class="bi-camera-video-fill"></i></a>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-light" style="background-color:#B97A95;">
                Schedule Kelas Privat
            </div>
            <div class="card-body" style="background-color:#EEEEEE;">



            </div>
        </div>
    </div>
</div>

