<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
        <div class="panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">
              <i class="glyphicon glyphicon-send"></i> Upload Berkas
            </h3>
          </div>
          <div class="panel-body">
            
            <form action="<?= base_url('panel_siswa/uploadBerkas') ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="ijazah"><b>Ijazah terakhir</b></label>
                <input type="file" class="form-control-file" name="ijazah" value="">
                <?= form_error('ijazah', '<small class="text-danger pl-3">', '</small>'); ?>

              </div>
              <div class="form-group">
                <label for="skhun"><b>SKHUN</b></label>
                <input type="file" class="form-control-file" name="skhun" value="">
                <?= form_error('skhun', '<small class="text-danger pl-3">', '</small>'); ?>

              </div>
              <div class="form-group">
                <label for="kk"><b>Kartu Keluarga</b></label>
                <input type="file" class="form-control-file" name="kk" value="">
                <?= form_error('kk', '<small class="text-danger pl-3">', '</small>'); ?>

              </div>
              <div class="form-group">
                <label for="nisn"><b>Kartu NISN</b></label>
                <input type="file" class="form-control-file" name="nisn" value="">
                <?= form_error('nisn', '<small class="text-danger pl-3">', '</small>'); ?>

              </div>

              <button type="submit" name="upload" class="btn btn-success">Upload</button>
            </form>
          </div>
        </div>

          </div>
        </div>
      <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->
