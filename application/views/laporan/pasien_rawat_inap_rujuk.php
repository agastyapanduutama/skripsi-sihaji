<!DOCTYPE html>
<html>
<head>
  <title>LAPORAN JUMLAH PASIEN RUJUK</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?=base_url() ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<table style="width: 100%;">
  <tr>
    <td align="center">
      <span style="line-height: 1.6; font-weight: bold; ">
        LAPORAN REGISTER PASIEN RUJUK
        <br>KKHI MADINAH
      </span>
    </td>
  </tr>
</table>

<hr class="line-title">

<table class="table table-bordered" style="font-size: 10px;">
        <thead>
        <tr>
            <th rowspan="3">NO</th>
            <th rowspan="3">TANGGAL MASUK</th>
            <th rowspan="3">TANGGAL KELUAR</th>
            <th rowspan="3">NO REG</th>
            <th rowspan="3">RUANGAN/LANTAI</th>
            <th rowspan="3">BED</th>
            <th rowspan="3">NO RM</th>
            <th rowspan="3">NAMA PASIEN</th>
            <th rowspan="3">UMUR</th>
            <th rowspan="3">DOKTER</th>
            <th rowspan="3">RUJUK</th>
        </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach ($cari as $us ) { ?>
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

</body>
</html>








