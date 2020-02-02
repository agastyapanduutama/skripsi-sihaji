<?php echo form_open('home/search') ?>
		<input type="text" class="form-control" style="width: 200px;" name="keyword" placeholder="No Registrasi">
		<input type="submit" class="btn btn-primary" name="search_submit" value="Cari">
	<?php echo form_close() ?>



<div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No Registrasi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($pasien as $us ) { ?>
                <tr>
                  <td>
						<a href="<?= base_url('home/keluar_pasien/'.$us->id_pasien)?>">
						<label class="label-control">(<?= $us->no_registrasi ?>) MedRec <?= $us->no_rekam_medis?> - <?= $us->tanggal_masuk ?> - <?= $us->nama_pasien ?></label>
						</a>
                  </td>
                 
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>