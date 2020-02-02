         <form action="<?= base_url('laporan/cari_jumlah_pasien_per_jenis_kelamin')?>" method="POST">
            <input type="" placeholder="tanggal masuk" id="datepicker" name="tgl_awal" autocomplete="off" required>
            <input type="" placeholder="tanggal keluar" id="datepicker1" name="tgl_akhir" autocomplete="off" required>
            <br>
            Jenis Kelamin
             <select class="form-control" name="jenis_kelamin" style="width: 200px">
              <option value="3">Pria & Wanita</option>
              <option value="1">Pria</option>
              <option value="0">Wanita</option>
            </select>

            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Filter</button>

          </form>

          <form action="<?= base_url('laporan/jumlah_pasien_per_jenis_kelamin')?>">
            <button type="submit" class="btn btn-primary">Reset</button>
          </form>

          <br>
           <div class="box box-primary">

<table style="width: 100%;">
  <tr>
    <td align="center">
      <span style="line-height: 1.6; font-weight: bold; ">
        LAPORAN REGISTER PASIEN JENIS KELAMIN
        <br>KKHI MADINAH
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
</div>

