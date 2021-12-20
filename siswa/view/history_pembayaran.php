<div class="row">
   <div class="col-md-12">
      <h5>Riwayat Pembayaran Kelas Kursus</h5>
   </div>
</div>

<div class="row">
   <div class="col-md-12">
      <div class="card">
         <div class="card-body">
            <table class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Tanggal</th>
                     <th>Jenis Pembayaran</th>
                     <th>Jumlah</th>
                     <th>Invoice</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                  $cek = $pembayaran->cekallbysiswa($con, $id_siswa);
                  if ($cek < 1) {
                     echo '<tr><td colspan=5 class="text-center text-danger fw-bold">Belum ada pembayaran...</td></tr>';
                  } else {
                     $daftarpembayaran = $pembayaran->allbysiswa($con, $id_siswa);
                     $no = 1;
                     foreach ($daftarpembayaran as $daf) { ?>

                        <tr>
                           <td><?= $no ?></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
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