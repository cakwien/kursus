<div class="content-wrapper">


    <div class="content">
        <div class="container-fluid">
            <div class="content-header">
                <h5>Selamat Datang, <?= $t['nm_tentor'] ?></h5>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">


            <!-- BAR STATUS INFO BOX -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="card card-success">
                        <div class="card-header">
                            <h5 class="card-title">
                                <i class="fa fa-school"></i>
                                &nbsp;Kelas Saya
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- TAMPIL KELAS YANG DI AMPU -->



                                <div class="col-sm-6">
                                    <a href="?p=mt-kelas&id=<?= $kl['id_ampu'] ?>">
                                        <div class="info-box bg-light">
                                            <span class="info-box-icon bg-red disabled"><i
                                                    class="fa fa-graduation-cap"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text"
                                                    style="font-weight:bold;"><?= $kl['nm_kelas'] ?></span>
                                                <span class="info-box-number">
                                                    <span title="Jumlah siswa di kelas ini" class="badge bg-red"><i
                                                            class="fa fa-users"></i>&nbsp;</span>
                                                    <span title="Jumlah materi di kelas ini" class="badge bg-warning"><i
                                                            class="fa fa-book"></i>&nbsp;&nbsp;</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>

                                </div>

                                <!-- TAMPIL KELAS YANG DI AMPU -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h5 class="card-title">
                                <i class="fa fa-info"></i>
                                &nbsp; Info Terbaru
                            </h5>
                        </div>

                        <div class="card-body">
                            tets
                        </div>
                    </div>
                </div>
            </div>
            <!-- BAR STATUS INFO BOX -->



            <div class="row">
                <!-- TABEL SCHECULE -->
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h5 class="card-title">
                                <i class="fa fa-calendar"></i>
                                &nbsp;Schedule Terbaru
                            </h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jadwal</th>
                                        <th>Materi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td><?= $no ?></td>
                                        <td>
                                            <span class="badge bg-lightblue bg-disabled"></span>
                                            <span class="badge bg-green"></span>
                                        </td>
                                        <td></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="?p=materi2" class="btn-sm btn-info float-right">Lihat Selengkapnya...</a>
                        </div>
                    </div>
                </div>
                <!-- TABEL SCHECULE -->
            </div>

        </div>
    </div>
</div>