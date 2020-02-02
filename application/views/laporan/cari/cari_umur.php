   

         <form action="<?= base_url('laporan/cari_jumlah_pasien_per_usia')?>" method="POST">
            <input type="" value="<?=isset($_POST['tgl_awal']) ? $_POST['tgl_awal'] : ''?>" id="datepicker" name="tgl_awal" autocomplete="off">
            <input type="" value="<?=isset($_POST['tgl_akhir']) ? $_POST['tgl_akhir'] : ''?>" id="datepicker1" name="tgl_akhir" autocomplete="off">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Filter</button>
          </form>

         
  <div class="row">
        
          <div class="col-md-11">
          <form action="<?= base_url('laporan/jumlah_pasien_per_usia')?>">
            <button type="submit" class="btn btn-primary">Reset</button>
          </form>
          </div>

         

          <div class="col-md-1">
          <form action="<?= base_url('laporan/cari_pasien_usia')?>" method="POST">
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
        LAPORAN REGISTER PASIEN PER UMUR
        <br>KKHI MADINAH
      </span>
    </td>
  </tr>
</table>
<br><br>


<table id="example2" class="table table-bordered" style="font-size: 10px;">
        <thead>
        <tr>
            <th>NO</th>
            <th>TANGGAL MASUK</th>
            <th>NO REG</th>
            
            <th>UMUR</th>
            <th>JENIS KELAMIN</th>
            <th>RUANGAN/LANTAI</th>
            <th>BED</th>
            <th>NO RM</th>
            <th>NAMA PASIEN</th>
            <th>DOKTER</th>
        </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach ($cari as $us ) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $us->tanggal_masuk?> <?= $us->jam_masuk?></td>
            <td><?= $us->no_registrasi?></td>
            <td><?= $us->umur?></td>
            <td><?php if ($us->jenis_kelamin==='1') {
              echo "PRIA";
            } ?>
            <?php if ($us->jenis_kelamin==='0') {
              echo "WANITA";
            } ?></td>
            <td><?= $us->nama_ruangan?></td>
            <td><?= $us->kelas?></td>
            <td><?= $us->no_rekam_medis?></td>
            <td><?= $us->nama_pasien?></td>
            
            <td><?= $us->nama_dokterna?></td>
          </tr>
          <?php } ?>
        </tbody>
</table>
