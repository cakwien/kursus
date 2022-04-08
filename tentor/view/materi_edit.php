<?php 

  if ($_POST['getDetail'])
  {
    $id=$_POST['getDetail'];
    $q=mysqli_query($con,"select * from materi where id_materi = $id ");
    while($dt = mysqli_fetch_array($q)){
    $tgl = date('Y-m-d',$dt['jadwal']);
    $jam = date('H:i',$dt['jadwal']);
    $jadwal = $tgl."T".$jam;
    
  
?>

            <div class="form-group">
                <label for="">Judul Materi</label>
                <input type="hidden" name="id_ampu" value="<?=$dt['id_ampu']?>">

                <input type="hidden" name="id_materi" value="<?=$dt['id_materi']?>">
                <input type="text" class="form-control" name="judul_edit" value="<?=$dt['judul']?>">
                <input type="text" class="form-control" name="judul" value="<?=$dt['judul']?>">
                <input type="hidden" name="id_materi" value="<?=$dt['id_materi']?>">
                <input type="text" class="form-control" name="judul_edit" value="<?=$dt['judul']?>">
            </div>

            <div class="form-group">
                <label for="detail">Detail Materi</label>
                <textarea name="isi_materi" id="summernote2" cols="30" rows="10"><?=$dt['isi_materi']?></textarea>
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
    $('#summernote2').summernote()

    // CodeMirror
   
  })
</script>