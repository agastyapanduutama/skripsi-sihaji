<!DOCTYPE html>
<html>
<head>
  <title>LAPORAN JUMLAH PASIEN RAWAT INAP PER JENIS KELAMIN</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?=base_url() ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<table style="width: 100%;">
  <tr>
    <td align="center">
      <span style="line-height: 1.6; font-weight: bold; ">
        LAPORAN REGISTER PASIEN RAWAT INAP BERDASARKAN KLOTER
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
            <th>NO PASSPORT</th>
            <th>NAMA PASIEN</th>
            <th>NAMA KBIH</th>
            <th>KLOTER</th>
        </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach ($cari as $us ) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $us->tanggal_masuk?> <?= $us->jam_masuk?></td>
            <td><?= $us->passport?></td>
            <td><?= $us->nama_pasien?></td>
            <td><?= $us->kbbih?></td>
            <td><?= $us->kloter?></td>
          </tr>
          <?php } ?>
        </tbody>
</table>
</div>