<div class="container mt-3">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Data Kelas
          <a href="#" data-bs-target="#tambahkelas" data-bs-toggle="modal" class="btn btn-sm btn-primary float-end">Tambah Kelas</a>
        </div>
        <div class="card-body">
          <table class="table table-striped table-hover" id="tabelkelas">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Jenis</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($listkelas as $kl) {
              ?>
                <tr>
                  <td><?= $no ?></td>
                  <td><?= $kl['nm_kelas'] ?></td>
                  <td></td>
                  <td>
                    <a href="#detail" data-bs-toggle="modal" data-id="<?=$kl['id_kelas']?>" class="btn btn-sm btn-primary"><i class="bi-search"></i></a>
                  </td>
                </tr>
              <?php $no++;
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="tambahkelas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="isi-modal"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  $(document).ready(function() {
    $('#detail').on('show.bs.modal', function(e) {
      var rowid = $(e.relatedTarget).data('id');
      //menggunakan fungsi ajax untuk pengambilan data
      $.ajax({
        type: 'post',
        url: '?p=det-kelas',
        data: 'rowid=' + rowid,
        success: function(data) {
          $('.isi-modal').html(data); //menampilkan data ke dalam modal
        }
      });
    });
  });
</script>

<script>
  $(document).ready(function() {
    $('#tabelkelas').DataTable();
  });
</script>