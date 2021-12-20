<div class="row">
  <div class="col-md-12">
    <h4>Selamat Datang, <?= $siswaaktif['nm_siswa'] ?> </h4>
  </div>
</div>


<div class="row mt-3">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        Schedule Kursus Terbaru
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <?php
            $materilimit = $materi->materibykelaslimit($con, $id_siswa, 3);
            foreach ($materilimit as $ml) {
            ?>

              <div class="card border-secondary mb-2">
                <div class="card-body" style="background-color:honeydew">
                  <div class="fw-bold"><?= $ml['judul'] ?></div>
                  <div class=""><small><i class="bi-calendar"></i> <?= tgl_indo($ml['jadwal']) ?>&nbsp; <i class="bi-clock"></i> <?= date('H:i', $ml['jadwal'])?> WIB &nbsp; </small> </div>
                  <?php
                    $aktif = '<a href="#" class="btn btn-sm btn-primary float-end me-1"><i class="bi-camera-video"></i> Masuk</a>';
                    $disabled = '<a href="#" class="btn btn-sm btn-secondary float-end me-1"><i class="bi-check"></i> Selesai</a>';
                    $wait = '<a href="#" class="btn btn-sm btn-warning float-end me-1"><i class="bi-hourglass-split"></i> Menunggu</a>';
                    $sekarang = time();
                    $tbl = $materi->cekwaktutbl($sekarang, $ml['jadwal'] ,$aktif, $disabled, $wait);
                    echo $tbl;
                  ?>

                </div>
              </div>

            <?php } ?>




          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        Jadwal Tryout
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <div class="card border-secondary mb-2">
              <div class="card-body" style="background-color:beige">
                <div class="fw-bold">Modul Tryout</div>
                <div class=""><small><i class="bi-calendar"></i> Mulai - Selesai &nbsp; <i class="bi-clock"></i> Durasi &nbsp; <i class="bi-newspaper"></i> Jumlah Soal</small> </div>
                <!-- Berubah sesuai dengan status -->
                <a href="#" class="btn btn-sm btn-success float-end me-1" title="kerjakan"><i class="bi-pencil"></i> Kerjakan</a>
                <a href="#" class="btn btn-sm btn-warning float-end me-1" title="kerjakan"><i class="bi-pencil"></i> Lanjutkan</a>
                <a href="#" class="btn btn-sm btn-primary float-end me-1" title="kerjakan"><i class="bi-list"></i> LIhat Hasil</a>

              </div>
            </div>
            <div class="card border-secondary mb-2">
              <div class="card-body" style="background-color:beige">
                <div class="fw-bold">Modul Tryout</div>
                <div class=""><small><i class="bi-calendar"></i> Mulai - Selesai &nbsp; <i class="bi-clock"></i> Durasi &nbsp; <i class="bi-newspaper"></i> Jumlah Soal</small> </div>
                <!-- Berubah sesuai dengan status -->
                <a href="#" class="btn btn-sm btn-success float-end me-1" title="kerjakan"><i class="bi-pencil"></i> Kerjakan</a>
                <a href="#" class="btn btn-sm btn-warning float-end me-1" title="kerjakan"><i class="bi-pencil"></i> Lanjutkan</a>
                <a href="#" class="btn btn-sm btn-primary float-end me-1" title="kerjakan"><i class="bi-list"></i> LIhat Hasil</a>

              </div>
            </div>
            <div class="card border-secondary mb-2">
              <div class="card-body" style="background-color:beige">
                <div class="fw-bold">Modul Tryout</div>
                <div class=""><small><i class="bi-calendar"></i> Mulai - Selesai &nbsp; <i class="bi-clock"></i> Durasi &nbsp; <i class="bi-newspaper"></i> Jumlah Soal</small> </div>
                <!-- Berubah sesuai dengan status -->
                <a href="#" class="btn btn-sm btn-success float-end me-1" title="kerjakan"><i class="bi-pencil"></i> Kerjakan</a>
                <a href="#" class="btn btn-sm btn-warning float-end me-1" title="kerjakan"><i class="bi-pencil"></i> Lanjutkan</a>
                <a href="#" class="btn btn-sm btn-primary float-end me-1" title="kerjakan"><i class="bi-list"></i> LIhat Hasil</a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>