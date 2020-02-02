         <form action="<?= base_url('laporan/cari_jumlah_pasien_evakuasi')?>" method="POST">
            <input type="" id="datepicker" name="tgl_awal" autocomplete="off">
            <input type="" id="datepicker1" name="tgl_akhir" autocomplete="off">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Filter & Cetak</button>
          </form>

  <div class="row">
          <div class="col-md-11">
            <form action="<?= base_url('laporan/jumlah_pasien_evakuasi')?>">
            <button type="submit" class="btn btn-primary">Reset</button>
          </form>
          </div>

          <div class="col-md-1">
          <form action="<?= base_url('laporan/cari_pasien_evakuasi')?>" method="POST">
            <input type="hidden" value="<?=isset($_POST['tgl_awal']) ? $_POST['tgl_awal'] : ''?>" id="datepicker" name="tgl_awal" autocomplete="off">
            <input type="hidden" value="<?=isset($_POST['tgl_akhir']) ? $_POST['tgl_akhir'] : ''?>" id="datepicker1" name="tgl_akhir" autocomplete="off">
            <button type="submit" class="btn btn-success">Cetak</button>
          </form>
          </div>

          

  </div>

          

          <br>
           <div class="box box-primary">

<table style="width: 100%;">
  <tr>
    <td align="center">
      <span style="line-height: 1.6; font-weight: bold; ">
        LAPORAN REGISTER PASIEN KELUAR EVAKUASI
        <br>KKHI MADINAH
      </span>
    </td>
  </tr>
</table>
<br><br>
      

<div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
    <tr>
            <th>NO</th>
            <th>TANGGAL MASUK</th>
            <th>TANGGAL KELUAR</th>
            <th>NO REG</th>
            <th>RUANGAN/LANTAI</th>
            <th>BED</th>
            <th>NO RM</th>
            <th>NAMA PASIEN</th>
            <th>UMUR</th>
            <th>DOKTER</th>
            <th>Evakuasi</th>
    </tr>
    </thead>
    <tbody>
    <?php $no=1; foreach ($cari as $us ) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td>
              <?= $us->tanggal_masuk?>
              <?= $us->jam_masuk?>
              
            </td>
            <td><?= $us->tanggal_keluar?></td>
            <td><?= $us->no_registrasi?></td>
            <td><?= $us->nama_ruangan?></td>
            <td><?= $us->kelas?></td>
            <td><?= $us->no_rekam_medis?></td>
            <td><?= $us->nama_pasien?></td>
            <td><?= $us->umur?></td>
            <td><?= $us->nama_dokterna?></td>
            <td><?= $us->keterangan?></td>
          </tr>
          <?php } ?>
  </tbody>
</table>
</div>

