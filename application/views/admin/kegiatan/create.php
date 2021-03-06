<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title ">Tambah Data Jenis Kegiatan Sekolah</h4>
            <p class="card-category">menambahkan jenis kegiatan sekolah</p>
          </div>
          <div class="card-body">
            <form action="<?php base_url('admin/kegiatan/create/') ?>" method="post" enctype="multipart/form-data">

             <div class="form-group">
                <label for="saldo_awal">Jenis Kegiatan</label>
                <br>
                <input type="text" min="0" class="form-control" name="nama_jenis_kegiatan" required autofocus>
                <div class="invalid-feedback">Jenis Kegiatan</div>
              </div>

                <div class="form-group">
                  <input class="btn btn-info" type="submit" value="Simpan">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
