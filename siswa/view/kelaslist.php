<div class="row">
   <div class="col-md-12">
      <h5>Kelas Kursus Saya</h5>
   </div>
</div>

<div class="row">
   <div class="col-md-12">
      <div class="card border-primary">
         <div class="card-body">
            <?php
            $listkelas = $kelas->all($con, $id_siswa);
            foreach ($listkelas as $lk) {
               $jumlahmateri = $materi->jumlahMateriByKelas($con, $lk['id_kelas']);
            ?>
               <div class="row">
                  <div class="col-md-3">
                     <div class="card shadow-sm">
                        <div class="card-header fw-bold">
                           <?= $lk['nm_kelas'] ?>
                           <a title="Masuk kelas" href="?p=timelinekelas&kel=<?=$lk['id_kelas']?>" class="btn btn-sm btn-primary rounded-circle float-end">
                              <i class="bi-arrow-right-circle"></i>
                           </a>
                        </div>
                        <div class="card-body">

                           <span title="Jumlah Materi" class="btn btn-sm bg-info text-light rounded-pill"><i class="bi-book"></i> <?= $jumlahmateri[0] ?></span>
                           <span title="Jumlah Anggota Kelas" class="btn btn-sm text-light rounded-pill" style="background-color:navy;"><i class="bi-person"></i> <?= $jumlahmateri[0] ?></span>


                        </div>
                     </div>
                  </div>
               </div>
            <?php } ?>

         </div>
      </div>
   </div>
</div>


<div class="row">
   <div class="col-md-12 mt-3">
      <h5>Kursus Privat</h5>
   </div>
</div>

<div class="row">
   <div class="col-md-12">
      <div class="card">
         <div class="card-body">

            <div class="row">
               <div class="col-md-3">
                  <div class="card">
                     <div class="card-header fw-bold">
                        Privat Matematika
                        <a href="#" class="btn btn-sm btn-primary rounded-circle float-end">
                           <i class="bi-arrow-down-right-circle"></i>
                        </a>
                     </div>
                     <div class="card-body">
                        test
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
</div>