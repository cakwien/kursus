<div class="content-wrapper">
    <div class="content-header">
    </div>
    <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Materi Saya</h3>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-stripped table-hover">
                           <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Materi</th>
                                    <th>Kelas</th>
                                    <th>Jadwal Kursus</th>
                                    <th>Status</th>
                                </tr>
                           </thead>
                           <?php 
                             $lmateri = $materi->tp_materi_kelas($con,$k_aktif['id_kelas']);
                             $no = 1;
                             foreach($lmateri as $mt){
                           ?>
                           <tbody>
                                <tr>
                                    <td><?=$no?></td>
                                    <td><?=$mt['judul']?></td>
                                    <td><?=$mt['nm_kelas']?></td>
                                    <td><?=tglindo($mt['jadwal'])?></td>
                                    <td>
                                        <?php 
                                            $sts=$presensi->cp($con,$s_aktif['id_siswa'],$mt['id_materi']);
                                            if($sts=="1")
                                            { echo '<span class="btn-sm btn-danger"><i class="fa fa-ban"></i> Belum Tuntas</span>';}     
                                            elseif($sts=="2")
                                            {echo '<span class="btn-sm btn-warning"><i class="fa fa-spinner"></i> Coming Soon</span>';}
                                            elseif($sts=="3")
                                            {echo '<a href="?p=go&id_s='.$s_aktif['id_siswa'].'&id_m='.$mt['id_materi'].'" target="blank_" class="btn-sm btn-info"><i class="fa fa-sign-in-alt"> </i> Sedang Berlangsung</a>';}
                                            elseif($sts=="4")
                                            {echo '<a href="'.$mt['link'].'" target="blank_" class="btn-sm btn-primary"><i class="fa fa-chevron-circle-right"> </i> Lanjutkan Kursus</a>';}
                                            elseif($sts=="5")
                                            {echo '<span class="btn-sm btn-success"><i class="fa fa-thumbs-up"></i> Tuntas</span>';} 

                                        ?>
                                    </td>
                                </tr>
                           </tbody>  
                           <?php $no++; } ?>       
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>