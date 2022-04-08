<div class="content-wrapper">
    <div class="content-header">
        <h3>Daftar Kelas Kursus</h3>
    </div>
    <div class="content">
    <div class="container-fluid">
        <div class="row">


          <?php 
            $tarifkelas = $kelas->tp_tarifkelas($con);
            foreach($tarifkelas as $tk)
            {
          ?>

            <!-- Pilihan Kelas -->
            <div class="col-md-3">
              <div class="card">
                <div class="card-header bg-success">
                  <h5 class="text-center"><b>Kelas <?=$tk['nm_kelas']?> <?=$tk['durasi']?></b></h5>
                </div>
                <div class="card-body">
                  Penjelasn kelas bisa berupa gambar
                </div>
                <div class="card-footer text-center bg-navy">
                  <b style="font-size:20px"><?=rp($tk['tarif'])?></b>
                </div>
                <div class="card-footer text-center">
                <form action="" method="post">
                  <input type="text" name="nominal" value="<?=$tk['tarif']?>">
                  <input type="text" name="id_kelas" value="<?=$tk['id_kelas']?>">
                  <input type="text" value="<?=$tk['id_tarif']?>" name="id_tarif">
                  <input type="text" name="id_siswa" value="<?=$s_aktif['id_siswa']?>">
                  <input type="submit" name="daftar" class="btn btn-danger" value="Pilih Kelas Ini">
                </form>
                </div>
              </div>
            </div>
            <!-- Pilihan Kelas -->

            <?php } ?>


        </div>
    </div>
</div>