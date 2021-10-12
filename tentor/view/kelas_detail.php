<div class="row">
    <h5>Kelas Kursus <?=$nm_kelas?></h5>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Schedule Materi
                <a href="#" data-bs-toggle="modal" data-bs-target="#tbschedule" class="btn btn-sm btn-primary float-end ms-1"><i class="bi-calendar2-plus"></i> Tambah Schedule</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#daftarsiswa" class="btn btn-sm btn-success float-end"><i class="bi-person-lines-fill"></i> Daftar Siswa</a>
            </div>
            <div class="card-body card-scrolable">

                <div class="row">

                    <?php 
                    foreach($listmateri as $lm){
                    ?>

                    <div class="col-md-4 mb-2">
                        <div class="card shadow-sm border border-success bg-light">
                            <div class="card-body ">
                             <div class="fs-6 fw-bold"><?=$lm['judul']?></div>
                             <div style="font-size:small" class="mb-2"><?=$lm['keterangan']?></div>
                             <div class="btn btn-sm btn-outline-success"><i class="bi-calendar"></i> <?=tgl_indo($lm['jadwal'])?></div>
                             <a href="<?=$lm['link']?>" target="_blank" class="btn btn-sm btn-primary"><i class="bi-camera-video"></i></a>
                             <!-- <a href="#" class="btn btn-sm btn-secondary"><i class="bi-three-dots"></i></a> -->

                             <button class="btn btn-sm btn-secondary float-end" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                               <i class="bi-three-dots"></i>
                            </button>   
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="?to=kelas&amp=<?=rhs($lm['id_ampu'])?>&edit=<?=$lm['id_materi']?>">Edit</a></li>
                                <li><a class="dropdown-item" href="?to=kelas&amp=<?=rhs($lm['id_ampu'])?>&del=<?=$lm['id_materi']?>">Hapus</a></li>
                            </ul>

                            
                             <!-- <span class="btn btn-sm btn-danger rounded-circle float-end"><i class="fs-6 bi-check2-circle"></i></span>
                             <span class="btn btn-sm btn-warning rounded-circle float-end"><i class="fs-6 bi-check2-circle"></i></span> -->
                             
                             

                            </div>



                            <!-- <div class="card-footer">
                                <a href="#" class="btn btn-sm btn-success"><i class="bi-pencil"></i></a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="bi-trash"></i></a>
                                
                            </div> -->
                        </div>
                    </div>

                    <?php } ?>


                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="modal fade" id="daftarsiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Daftar Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Asal Sekolah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listsiswa as $sis) {?>
                        <tr>
                            <td></td>
                            <td><?=$sis['nm_siswa']?></td>
                            <td><?=$sis['asal_sekolah']?></td>
                        </tr>
                        <?php } ?>

                    </tbody>
               </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="tbschedule" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Materi Kursus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class="form-group mb-1">
                        <label for="Judul">Judul</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                    <div class="form-group mb-1">
                        <label for="Keterangan">Keterangan</label>
                        <textarea name="keterangan" class="form-control" cols="30" rows="3" required></textarea>
                    </div>
                    <div class="form-group mb-1">
                        <label for="Link">Link Zoom</label>
                        <input type="text" name="link" class="form-control"  required>
                    </div>

                    <div class="form-group mb-1">
                        <label for="Jadwa">Jadwal</label>
                        <input type="datetime-local" class="form-control" name="jadwal" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi-x-circle"></i> Batal</button>
                    <button type="submit" class="btn btn-primary"><i class="bi-save"></i> Simpan Schedule</button>
                </div>
            </form>

            </div>
        </div>
    </div>
</div>

