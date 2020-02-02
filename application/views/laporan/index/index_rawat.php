         <form action="<?= base_url('laporan/cari_jumlah_pasien_rawat_inap')?>" method="POST">
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
        LAPORAN REGISTER PASIEN RAWAT INAP
        <br>KKHI MADINAH
      </span>
    </td>
  </tr>
</table>
</div>

           <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
        <tr>
            <th rowspan="3">NO</th>
            <th rowspan="3">TANGGAL KUNJUNGAN</th>
            <!-- <th rowspan="3">IDNA</th> -->
            <th rowspan="3">NO REG</th>
            <th rowspan="3">NO RM</th>
            <th rowspan="3">NAMA PASIEN</th>
            <th colspan="2">UMUR</th>
            <th rowspan="3">DOKTER</th>
            <th rowspan="3">DIAGNOSA</th>
            <th rowspan="3">NAMA POLI</th>
            <tr>
                <td>L</td>
                <td>P</td>
            </tr>
        </tr>
        </thead>
        <br><br>
        <tbody>
          <?php $no=1; foreach ($pasien as $us ) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $us->tanggal_masuk?> <?= $us->jam_masuk?></td>
            <!-- <td><?= $us->id_pasien?></td> -->
            <td><?= $us->no_registrasi?></td>
            <td><?= $us->no_rekam_medis?></td>
            <td><?= $us->nama_pasien?></td>
            <td><?php if ($us->jenis_kelamin==='1') {
              echo "$us->umur th";
            } ?></td>
            <td><?php if ($us->jenis_kelamin==='0') {
              echo "$us->umur th";
            } ?></td>
            <td><?= $us->nama_dokterna?></td>
            <td><!-- <?= $us->kode_diagnosa===$us->id_pasien?> -->
             <!--  <?php foreach ($diagnosa as $key): ?>
                <i><?= $key->kode_diagnosa===$us->id_pasien?></i>
              <?php endforeach ?> -->
            </td>
            <td><?= $us->nama_ruangan?></td>
          </tr>

       

          <?php } ?>
        </tbody>
      </table>
    </div>


<?php 
    $this->db->like('status_pasien','0');
    $this->db->from('pasien');
    echo "Total semua pasien " . $this->db->count_all_results(); 
    ?>