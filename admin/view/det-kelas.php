<div class="row">
    <div class="col-md-12">
        <div class="form-group mb-2">
            <label for="">Nama Kelas</label>
            <input type="text" name="nm_kelas" class="form-control form-control-sm" value="<?=$kel['nm_kelas']?>" readonly>
        </div>

        <label for="">Rombel Kelas</label>

        <table class="table table-striped table-bordered" style="font-size:small">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Rombel</th>
                    <th>Kuota</th>
                    <th>Terisi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no=1;
                foreach($rombelkelas as $rk){
                ?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$kel['nm_kelas']?> - <?=$rk['id_rombel']?></td>
                    <td><?=$rk['kuota']?></td>
                    <td></td>
                </tr>
                <?php $no++; } ?>
            </tbody>
        </table>
    </div>
</div>