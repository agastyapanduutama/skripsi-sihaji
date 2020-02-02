<?php
 echo validation_errors('<div class="alert alert-warning">','</div>');

 echo form_open('home/keluar_pasien/'.$pasien->id_pasien); ?>

<!-- <form action="<?= base_url('home/keluar_pasien/'.$pasien->id_pasien)?>" method="POST"> -->
	<div class="form-group">
      <div class="col-xs-8">
      <label for="">Pasien</label>
      <input class="form-control" readonly required type="text" name="alamat" value="<?= $pasien->id_pasien ?>(<?= $pasien->no_registrasi ?>) - <?= $pasien->tanggal_masuk ?> - <?= $pasien->nama_pasien ?>" >
      </div>
    </div>
    <br><br><br>

	<div class="form-group">
	    <div class="row">
	      <div class="col-xs-4">
	      	<label>Waktu Keluar</label>
	        <input required type="" readonly value="<?=(date("Y-m-d H:i:s"))?>" name="waktu_keluar" class="form-control" >
	      </div>
	      <div class="col-xs-4">
	      	<label>Alasan Keluar</label>
	      	<select class="form-control" required name="alasan_keluar">
	      		<option>Pilih</option>
	      		<option value="1">Sehat</option>
	      		<option value="2">Rujuk</option>
	      		<option value="3">Wafat</option>
	      		<option value="4">Evakuasi</option>
	      		<option value="5">Konsultasi</option>
	      		<option value="6">Rawat Inap</option>
	      	</select>
	      </div>
	    </div>
	</div>


	<div class="form-group">
	    <div class="row">
	      <div class="col-xs-4">
	      	<label>Ket Evakuasi <span style="color: red">(Jika alasan keluar Evakuasi)</span></label>
	        <select class="form-control" required name="keterangan">
	      		<option>Pilih</option>
	      		<option value="RSAS MADIHAN">RSAS MADIHAN</option>
	      		<option value="KKHI MEKAH">KKHI MEKAH</option>
	      		<option value="KKHI JEDAH">KKHI JEDAH</option>
	      	</select>
	      </div>



	      <div class="col-xs-4">
	      	<label>Ket Rujuk <span style="color: red">(Jika alasan keluar Rujuk)</span></label>
	      	<select class="form-control" required name="keterangan">
	      		<option>Pilih</option>
	      		<option value="RSAS MADIHAN">RSAS MADIHAN</option>
	      		<option value="RSAS MEKKAH">RSAS MEKKAH</option>
	      		<option value="RS Al-Anshar Madinah">RS Al-Anshar Madinah</option>
	      		<option value="RS King Fadh Madinah">RS King Fadh Madinah</option>
	      		<option value="RS Jerman Madinah">RS Jerman Madinah</option>
	      		<option value="RS Miqot Madinah">RS Miqot Madinah</option>
	      	</select>
	      </div>
	    </div>


	</div>

	
	

	<div class="box box-info">
	    <div class="box-footer">
	      <button class="btn btn-primary " name="submit" type="submit">
	      <i class="fa fa-save"></i> Simpan
	    </button>
	    <a href="<?= base_url('Home/index_keluar')?>" class="btn btn-danger">Batal</a>
	    </div>
	</div>
	<!-- </form> -->

	<?php form_close(); ?>