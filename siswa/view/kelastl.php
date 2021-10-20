<div class="row rounded" style="background-color:#4B3869;">
  <div class="col-md-12 p-3">
    <h3 class="ms-3 text-light">Kelas UTBK</h3>
    <h5 class="ms-3 text-light">Tentor : M. Ade Setiyawan</h5>
    
  </div>
</div>

<div class="row">
  <div class="col-md-9 mt-2">
    <div class="card">
      <div class="card-header">
        Daftar Schedule Materi
      </div>
      <div class="card-body">
        <div class="row">
          <?php 
            $listmateri = $materi->allByKelas($con, $_GET['kel']);
            foreach($listmateri as $lm){
          ?>
          <div class="col-md-12 mb-2">
            <div class="card">
              <div class="card-body">
                <h5><?=$lm['judul']?></h5>

              </div>
            </div>
          </div>
          <?php } ?>

        </div>
      </div>
    </div>
  </div>
</div>