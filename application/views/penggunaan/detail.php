<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <div class="row">
              <div class="col-md-10">
                <h4 class="card-title">Detail Kegiatan</h4>
                <p class="card-category">menampilkan informasi tentang detail kegiatan yang ada</p>
              </div>
              <div class="col-md-2">
                <a href="<?php echo base_url('kegiatan/create/') . $id ?>" rel="tooltip" title="Tambah Kegiatan" class="btn btn-primary">
                  <i class="material-icons">add</i>
                </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead class="text-warning">
                  <tr>
                    <th class="th-sm">No
                    </th>
                    <th class="th-sm">Nama Kegiatan
                    </th>
                    <th class="th-sm">Aksi
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($kegiatan as $key => $value): ?>
                    <tr>
                      <td><?php echo $key+1 ?></td>
                      <td onclick="openModal(<?php echo $value->id_kegiatan; ?>)"><?php echo $value->nama_kegiatan ?></td>
                      <td>
                        <a href="<?php echo base_url('penggunaan/listKegiatan/') . $value->id_jenis_kegiatan ?>" rel="tooltip" title="Lihat" class="btn btn-sm btn-primary">
                            <i class="material-icons">forward</i>
                          </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot class="text-primary">
                  <tr>
                    <th class="th-sm">No
                    </th>
                    <th class="th-sm">Nama Kegiatan
                    </th>
                    <th class="th-sm">Aksi
                    </th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
col
<!-- modal view -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Informasi Detail Kegiatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-content">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
function openModal(id) {
  $.ajax({
    url:"<?php echo base_url('kegiatan/view/'); ?>"+id,
    method: 'post',
    data:null
  }).done(function(data) {
    $('#modal-content').html(data);
    $('#exampleModalCenter').modal('show');
  });
}
</script>
