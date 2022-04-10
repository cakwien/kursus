<div class="row">
  <div class="col-md-12">
    <h4>Selamat Datang, <?= $siswaaktif['nm_siswa'] ?> </h4>
  </div>
</div>

<div class="row mt-3">
  <div class="col-md-12">
    <div class="card shadow-sm">
      <div class="card-header">
        Kelas Saya
      </div>
      <div class="card-body">
        <div class="row">
          <?php
          foreach ($daftarkelas = $kelas->all($con, $id_siswa) as $kl) {
            $js = $kelas->jumlahsiswa($con, $kl['id_rombel']);
            $jm = $materi->jumlahMateriByKelasRombel($con, $kl['id_rombel']);
          ?>
            <div class="col-md-2">
              <div class="card shadow" style="background-color:#EFFFFD">
                <div class="card-body">
                  <a style="text-decoration:none;" href="?p=timelinekelas&rombel=<?= $kl['id_rombel'] ?>" class="fs-6 fw-bold"> <?= $kl['nm_kelas'] ?></a>
                  <div class="footage">
                    <i class="bi-people-fill"></i> <?= $js ?>
                    &nbsp;
                    <i class="bi-journal-text"></i> <?= $jm[0] ?>
                  </div>
                </div>
              </div>
            <?php } ?>

            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row mt-3">
  <div class="col-md-6">
    <div class="card shadow-sm">
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
                  <div class=""><small><i class="bi-calendar"></i> <?= tgl_indo($ml['jadwal']) ?>&nbsp; <i class="bi-clock"></i> <?= date('H:i', $ml['jadwal']) ?> WIB &nbsp; </small> </div>
                  <?php
                  $aktif = '<a href="#" class="btn btn-sm btn-primary float-end me-1"><i class="bi-camera-video"></i> Masuk</a>';
                  $disabled = '<a href="#" class="btn btn-sm btn-secondary float-end me-1"><i class="bi-check"></i> Selesai</a>';
                  $wait = '<a href="#" class="btn btn-sm btn-warning float-end me-1"><i class="bi-hourglass-split"></i> Menunggu</a>';
                  $sekarang = time();
                  $tbl = $materi->cekwaktutbl($sekarang, $ml['jadwal'], $aktif, $disabled, $wait);
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

</div>