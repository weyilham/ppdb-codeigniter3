<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="<?= base_url('/') ?>assets/panel/css/bootstrap.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="<?= base_url('/') ?>assets/panel/js/core/libraries/bootstrap.min.js"></script>

  </head>
  <!-- onload="window.print();" -->
  <body onload="window.print();">
    <h1 align="center">Dokumen Siswa</h1>

    <?php if ($berkas): ?>

      <table class="table table-striped table-bordered">
        <tr>
          <th>No</th>
          <th>IJAZAH</th>
        </tr>
        <tr>
          <td>1</td>
          <td> <img src="<?= base_url('assets/upload/dokumen/' . $berkas->ijazah) ?>" alt="" width="400"> </td>
        </tr>
        <tr>
          <th></th>
          <th>SKHUN</th>
        </tr>
        <tr>
          <td>2</td>
          <td><img src="<?= base_url('assets/upload/dokumen/' . $berkas->skhun) ?>" alt="" width="400"></td>
        </tr>
        <tr>
          <th></th>
          <th>KARTU KEluARGA</th>
        </tr>
        <tr>
          <td>3</td>
          <td><img src="<?= base_url('assets/upload/dokumen/' . $berkas->kk) ?>" alt="" width="400"></td>
        </tr>
        <tr>
          <th></th>
          <th>Surat NISN</th>
        </tr>
        <tr>
          <td>2</td>
          <td><img src="<?= base_url('assets/upload/dokumen/' . $berkas->nisn) ?>" alt="" width="400"></td>
        </tr>
      </table>
    <?php else: ?>
      <div class="alert alert-danger" role="alert">
        Dokumen Belum Di Upload
      </div>
    <?php endif; ?>
  </body>
</html>
