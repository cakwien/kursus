<div class="row">
    <div class="col-md-12">
        <h5>Daftar Tagihan Pembayaran</h5>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Detail Tagihan
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Jenis Tagihan</td>
                            <td>Nominal</td>
                            <td>Limit Pembayaran</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                  $cek = $tagihan->cekallbysiswa($con, $id_siswa);
                  if ($cek < 1) {
                     echo "<tr><td class='text-danger text-center fw-bold' colspan=4>Tidak ada tagihan...</td></tr>";
                  } else {
                     $daftartagihan = $tagihan->allbysiswa($con, $id_siswa);
                     $no = 1;
                     foreach ($daftartagihan as $tag) { ?>

                        <tr>
                            <td><?= $no ?></td>
                            <td><?=$tag['nm_kelas']." - ".$tag['keterangan']?></td>
                            <td><?=rp($tag['jumlah_tagihan'])?></td>
                            <td><?=tgl_indo($tag['time_limit'])?></td>
                            <td>
                                <?php  
                              echo $tagihan->statustagihan($tag['status']);
                              ?>
                            </td>
                        </tr>

                        <?php
                        $no++;
                     }
                  }
                  ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8 mt-4">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi et aperiam mollitia iure voluptatum?
            Repellendus doloremque ad animi vero? Odit sunt omnis debitis quaerat deserunt quo eum necessitatibus
            ratione praesentium?</p>
    </div>

    <div class="col-md-3 mt-4">
        <img src="assets/img/bank.png" width="100%" alt="">
    </div>
</div>