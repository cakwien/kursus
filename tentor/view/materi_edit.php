<?php 

  if ($_POST['rowid'])
  {
    $id=$_POST['rowid'];
    $q=mysqli_query($con,"select * from materi where id_materi = $id ");
    while($dt = mysqli_fetch_array($q)){
    $tgl = date('Y-m-d',$dt['jadwal']);
    $jam = date('H:i',$dt['jadwal']);
    $jadwal = $tgl."T".$jam;
    
  
?>

            <div class="form-group">
                <label for="">Judul Materi</label>
                <input type="text" name="judul" class="form-control" value="<?=$dt['judul']?>">
                <input type="text" name="id" class="form-control" value="<?=$dt['id_materi']?>">
            </div>

            <div class="form-group">
                <label for="detail">Detail Materi</label>
                <textarea name="ket" class="form-control" rows="5"><?=$dt['keterangan']?></textarea>
            </div>

            <div class="form-group">
                <label for="detail">Jadwal</label>
                  <input type="datetime-local" name="jadwal" class="form-control" value="<?=$jadwal?>">
            </div>

            <div class="form-group">
                <label for="detail">Link Zoom</label>
                <input type="text" name="link" class="form-control" id="" value="<?=$dt['link']?>">
            </div>

  <?php }} ?>



  <script>
  $(function () {
    // Summernote
    $('#summernote3').summernote()

    // CodeMirror
   
  })
</script>