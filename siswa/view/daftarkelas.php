<div class="row">
   <div class="col-md-6">
      <h3>Pilih Kelas Belajarmu...</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, officia. At animi fugit ex fuga aperiam atque accusantium incidunt ratione distinctio. Delectus debitis porro, adipisci modi facilis maxime illo nostrum dolor suscipit officiis temporibus accusantium ducimus, culpa aliquid facere nobis.</p>
   </div>
</div>





<div class="row">
   <div class="col-md-12">
      <div class="card">
         <div class="card-body" style="background-color:#F7F6F2">
            <h3>Kelas Kursus</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione excepturi voluptatum eveniet, iure a corporis repellendus ab, optio, quos eaque quia! Dignissimos distinctio enim eos. Eligendi, quas ad. Debitis, repellendus.</p>

            <div class="row">

               <?php
               foreach($daftarkelasaktif as $dka)
               {
               ?>


               <div class="col-md-4">
                  <div class="card shadow-lg">
                     <div class="card-body text-center">
                        <h5><?=$dka['keterangan']?></h5>

                        <h5><?=rp($dka['harga'])?></h5>

                        <div class="d-grid gap-2">
                           <a href="?p=konfirmasi&daftar=<?=rhs(rhs($dka['id_harga']))?>&ket<?=rhs($dka['keterangan'])?>" class="btn rounded-pill text-light fs-5 fw-bold" style="background-color:orange;">Pilih</a>
                        </div>
                     </div>
                  </div>
               </div>

               <?php } ?>

            </div>
         </div>
      </div>
   </div>
</div>


<div class="row mt-3">
   <div class="col-md-12">
      <div class="card">
         <div class="card-body" style="background-color:#F7F6F2">
            <h3>Kelas Kursus Privat</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione excepturi voluptatum eveniet, iure a corporis repellendus ab, optio, quos eaque quia! Dignissimos distinctio enim eos. Eligendi, quas ad. Debitis, repellendus.</p>

            <div class="row">
               <div class="col-md-4">
                  <div class="card shadow-lg">
                     <div class="card-body">
                        <h5>1 Bulan</h5>
                        <div class="d-grid gap-2">
                           <a href="#" class="btn rounded-pill text-light fs-5 fw-bold" style="background-color:orange;">Pilih</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card shadow-lg">
                     <div class="card-body">
                        <h5>1 Bulan</h5>
                        <div class="d-grid gap-2">
                           <a href="#" class="btn rounded-pill text-light fs-5 fw-bold" style="background-color:orange;">Pilih</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card shadow-lg">
                     <div class="card-body">
                        <h5>1 Tahun</h5>
                        <div class="d-grid gap-2">
                           <a href="#" class="btn rounded-pill text-light fs-5 fw-bold" style="background-color:orange;">Pilih</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>