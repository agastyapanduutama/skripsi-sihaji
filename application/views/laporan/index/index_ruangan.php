         <form action="<?= base_url('laporan/cari_jumlah_pasien_per_ruangan')?>" method="POST">
            <input type="" id="datepicker" name="tgl_awal" autocomplete="off">
            <input type="" id="datepicker1" name="tgl_akhir" autocomplete="off">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Filter</button>
          </form>

          <br>
           <div class="box box-primary">

<table style="width: 100%;">
  <tr>
    <td align="center">
      <span style="line-height: 1.6; font-weight: bold; ">
        LAPORAN REGISTER PASIEN PER RUANGAN
        <br>KKHI JEDAH
      </span>
    </td>
  </tr>
</table>
<br><br>
<div class="box-body">
<table id="example2" class="table table-bordered" style="font-size: 10px;">
        <thead>
        <tr>
            <th>NO</th>
            <th>TANGGAL MASUK</th>
            <th>NO REG</th>
            <th>RUANGAN/LANTAI</th>
            <th>BED</th>
            <th>NO RM</th>
            <th>NAMA PASIEN</th>
            <th>UMUR</th>
            <th>DOKTER</th>
        </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach ($pasien as $us ) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $us->tanggal_masuk?> <?= $us->jam_masuk?></td>
            <td><?= $us->no_registrasi?></td>
            <td><?= $us->nama_ruangan?></td>
            <td><?= $us->kelas?></td>
            <td><?= $us->no_rekam_medis?></td>
            <td><?= $us->nama_pasien?></td>
            <td><?= $us->umur?></td>
            <td><?= $us->nama_dokterna?></td>
          </tr>
          <?php } ?>
        </tbody>
</table>
</div>