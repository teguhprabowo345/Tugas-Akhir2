<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-4" style="padding: 0;">
        <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-masterButir"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
    </div>
    <!-- <div class="col-md-3">
        <a href="<?php echo base_url('Pegawai/export'); ?>" class="form-control btn btn-default"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Export Data Excel</a>
    </div>
    <div class="col-md-3">
        <button class="form-control btn btn-default" data-toggle="modal" data-target="#import-pegawai"><i class="glyphicon glyphicon glyphicon-floppy-open"></i> Import Data Excel</button>
    </div> -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Nama Butir</th>
          <th>Judul Butir</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-masterButir">
        
      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_masterButir; ?>

<div id="ubah-masterButir"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataButir', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>
<!-- <?php
  $data['judul'] = 'User';
  $data['url'] = 'Pegawai/import';
  echo show_my_modal('modals/modal_import', 'import-pegawai', $data);
?> -->