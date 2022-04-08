<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Status Kelas Ku</h1>
          </div><!-- /.col -->
         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

        <!-- STATUS KELAS -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-success">
                      <h3 class="card-title">
                        Status Kelas
                      </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-hovered table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kelas</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $statuskelas=$kelas->tp_kelas_siswa($con,$s_aktif['id_siswa']);
                                if (!empty($statuskelas[0]))
                                {
                            ?>
                                <tr>
                                    <td>1</td>
                                    <td><?=$statuskelas['nm_kelas']?></td>
                                    <td><?=$kelas->status($statuskelas['status'])?></td>
                                </tr>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="3" style="color:red;" class="text-center">Kamu belum mengikuti kelas satupun</td>
                                </tr>
                            <?php } ?>
                            </tbody>
                            
                        </table>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- STATUS TAGIHAN  -->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
             <div class="card-header bg-info">
              <h3 class="card-title">
                Status Tagihanku
              </h3>
             </div>
             <div class="card-body">
              <table class="table table-bordered table-striped table-hover" id="example3">
                 <thead>
                     <tr>
                      <th>Tagihan</th>
                      <th>Nominal</th>
                      <th>Batas Waktu</th>
                      <th>Status</th>
                     </tr>         
                 </thead> 
                 <tbody>
                 <?php
                  $sttagihan = $tagihan->tp_tagihan($con,$s_aktif['id_siswa']);
                  foreach($sttagihan as $st)
                  {
                 ?>
                     <tr>
                        <td><?="Kelas Kursus ". $st['nm_kelas']?></td>      
                        <td><?=rp($st['nominal'])?></td>      
                        <td><?=tglindo($st['time_limit'])?></td>      
                        <td><?=$tagihan->status($st['status'])?></td>      
                     </tr>
                  <?php } ?>
                 </tbody>            
              </table>
             </div>
            </div>
          </div>
        </div>

      </div>
    </div>
</div>

      