


        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Kodefikasi Diagnosa</h3>
            </div>


          <form action="<?= base_url('pemeriksaan/cari')?>" method="POST">
            <input type="" id="datepicker" name="tgl_awal" autocomplete="off">
            <input type="" id="datepicker1" name="tgl_akhir" autocomplete="off">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Filter</button>
          </form>

          <form action="<?= base_url('pemeriksaan')?>">
            <button type="submit" class="btn btn-primary">Reset</button>
          </form>



<?php 

echo validation_errors('<div class="alert alert-success">','</div>');

if ($this->session->flashdata('warning')) {
  echo '<div class="alert alert-warning">';
  echo $this->session->flashdata('warning');
  echo '</div>';
}

if ($this->session->flashdata('success')) {
  echo '`<div class="alert alert-success">';
  echo $this->session->flashdata('success');
  echo '</div>';
}

?>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal Masuk</th>
                  <th>No Registrasi</th>
                  <th>No MedRec</th>
                  <th>Nama Pasien</th>
                  <th>Ruangan</th>
                  <th>Dokter</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($pasien as $us ) { ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $us->tanggal_masuk?></td>
                  <td><?= $us->no_registrasi?></td>
                  <td><?= $us->no_rekam_medis?></td>
                  <td><?= $us->nama_pasien?></td>
                  <td><?= $us->nama_ruangan?></td>
                  <td><?= $us->nama_dokterna?></td>
                  <td>
                    <a href="<?= base_url('pemeriksaan/pemeriksaan_diagnosa/'.$us->id_pasien)?>" class="btn btn-primary btn-xs"><i class="fa fa-search"></i> Diagnosa</a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>

