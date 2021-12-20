<div class="row">
   <div class="col-md-12">
      <h5>Konfirmasi Pendaftaran</h5>
   </div>
</div>

<div class="row">
   <div class="col-md-7">
      <div class="card">
         <div class="card-header">
            Pendaftaran Kelas Kursus
         </div>
         <div class="card-body">
            <div class="card shadow-sm" style="border-color:cornflowerblue">
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-9">
                        <?=$hargakelas['nm_kelas']?>
                         - 
                        <?=$hargakelas['keterangan']?>
                     </div>
                     <div class="col-md-3 text-end fw-bold">
                        <?=rp($hargakelas['harga'])?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="col-md-5">
      <div class="card">
         <div class="card-header">
            Rincian Pembayaran
         </div>
         <div class="card-body">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th>Keterangan</th>
                     <th>Jumlah</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>Lorem ipsum dolor sit.</td>
                     <td class="text-end">Rp. 900.000</td>
                  </tr>
                  <tr>
                     <td>Kode Refeal</td>
                     <td class="text-end">1234</td>
                  </tr>
               </tbody>
            </table>

            <div class="card">
               <div class="card-body">
                  Total :
                  <div class="float-end fw-bold">
                     Rp. 901.234
                  </div>
               </div>
            </div>


            <div class="d-grid gap-2 mt-2">
               <a href="#" class="btn btn-primary rounded-pill text-light fs-5 fw-bold">Konfirmasi Pendaftaran</a>
            </div>
         </div>
      </div>
   </div>


</div>

<div class="row mt-3">
   <div class="col-md-12">
      <p>Pembayaran dapat melalui Transfer ke Rekening OsingCourse sebagai berikut :</p>
   </div>
</div>