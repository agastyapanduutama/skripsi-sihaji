         <form action="<?= base_url('laporan/cari_jumlah_pasien_rujuk')?>" method="POST">
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
        LAPORAN REGISTER PASIEN KELUAR RUJUK
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
            <th>RUJUK</th>
    </tr>
    </thead>
    <tbody>
   <?php $no=1; foreach ($pasien as $us ) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $us->tanggal_masuk?> <?= $us->jam_masuk?></td>
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


