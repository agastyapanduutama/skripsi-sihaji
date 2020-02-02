

 <section class="content">
   
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Pasien</h3>
            </div>
          </div>

      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pasien</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <?php 

echo validation_errors('<div class="alert alert-warning">','</div>');

echo form_open(base_url('home/pasien_edit/'.$pasien->id_pasien), 'class="form-horizontal"');;
 ?>
              <div class="box-body">

                <div class="form-group">
                  <label for="no_rek">No Registrasi</label>
                  <input value="<?=$pasien->no_registrasi ?>" class="form-control" required readonly name="no_registrasi" >
                </div>

                <div class="form-group">
                  <label for="no_rek">No Rekam Medis</label>
                  <input value="<?=$pasien->no_rekam_medis?>" required type="number" name="no_rekam_medis" class="form-control" id="no_rek" >
                </div>

                
              
                  <div class="form-group">
                  <label for="passport">Passport</label>
                  <input required type="text" name="passport" class="form-control" id="passport" value="<?= $pasien->passport?>">
                </div>

                 <div class="form-group">
                  <label for="nama">Nama Pasien</label>
                  <input value="<?=$pasien->nama_pasien?>" required type="text" name="nama_pasien" class="form-control" id="nama">
                </div>

                 <div class="form-group">
                  <label for="tempatlahir">Tempat Lahir</label>
                  <input value="<?=$pasien->tempat_lahir?>" required type="text" name="tempat_lahir" class="form-control" id="tempatlahir">
                </div>

                 <div class="form-group">
                  <label>Tanggal Lahir</label>
                    <div class="row">
                      <div class="col-xs-5">
                        <input value="<?=$pasien->tanggal_lahir?>" required type="date" name="tanggal_lahir" id="datepicker" class="form-control" autocomplete="off">
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                  <label>Umur</label>
                    <div class="row">
                      <div class="col-xs-3">
                        <input value="<?=$pasien->umur?>" required type="number" name="umur" id="umur" class="form-control" readonly>
                      </div>
                    </div>
                  </div>

                 <div class="form-group">
                  <label for="">Alamat</label>
                  <input value="<?=$pasien->alamat?>" required type="text" name="alamat" class="form-control" id="">
                </div>

                 <div class="form-group">
                  <label>RT / RW</label>
                    <div class="row">
                      <div class="col-xs-4">
                        <input value="<?=$pasien->rt?>" required type="text" name="rt" class="form-control" >
                      </div>
                      <div class="col-xs-4">
                        <input value="<?=$pasien->rw?>" required type="text" name="rw" class="form-control" >
                      </div>
                    </div>
                </div>

                 <div class="form-group">
                  <label for="">Golongan Darah</label>
                   <select required name="golongan_darah" class="form-control">
                      <option> Pilih Darah</option>
                      <option <?php if ($pasien->golongan_darah==='A') {
                        echo "selected";
                      } ?> value="A"> A </option>
                      <option <?php if ($pasien->golongan_darah==='B') {
                        echo "selected";
                      } ?> value="B"> B </option>
                      <option <?php if ($pasien->golongan_darah==='O') {
                        echo "selected";
                      } ?> value="O"> O </option>
                      <option <?php if ($pasien->golongan_darah==='AB') {
                        echo "selected";
                      } ?> value="AB"> AB </option>
                    </select>
                </div>

                 <div class="form-group">
                  <label for="">Pendidikan</label>
                   <select required name="pendidikan" class="form-control">
                      <option> Pilih Pendidikan</option>
                      <?php foreach ($pendidikan as $pendidikan): ?>
                        <option value="<?= $pendidikan->id_pendidikan?>" <?php if ($pendidikan->id_pendidikan==$pasien->pendidikan) { echo "selected"; } ?>><?= $pendidikan->nama_pendidikan?></option>
                      <?php endforeach ?>
                    </select>
                </div>

              </div>
              <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">

                 <div class="form-group">
                  <label for="">Negara</label>
                    <select required name="negara" class="form-control">
                      <option> Pilih Negara</option>
                      <option <?php if ($pasien->negara==='1') {
                        echo("selected");
                      } ?>> Indonesia </option>
                    </select>
                </div>

                <div class="form-group">
                  <label for="">Provinsi</label>
                    <select required name="provinsi" id="provinsi" class="form-control">
                      <option> Pilih Provinsi</option>
                      <?php foreach ($provinsi as $provinsi): ?>
                      <option value="<?= $provinsi->id_provinsi?>" <?php if ($provinsi->id_provinsi==$pasien->provinsi) { echo "selected"; } ?>> <?= $provinsi->nama_provinsi?>  </option>
                      <?php endforeach ?>
                    </select>
                </div>


                <div class="form-group">
                  <label for="">Kota / Kabupaten</label>
                    <select required name="kota"  class="kota form-control">
                      <option> Pilih Kota / Kabupaten</option>
                       <?php foreach ($kota as $kota): ?>
                      <option value="<?= $kota->id_kota?>" <?php if ($kota->id_kota==$pasien->kota) { echo "selected"; } ?>> <?= $kota->nama_kota?>  </option>
                      <?php endforeach ?>
                    </select>
                </div>


                <div class="form-group">
                  <label for="">Kecamatan</label>
                    <select required name="kecamatan" class=" kecamatan form-control">
                      <option> Pilih Kecamatan</option>
                       <?php foreach ($kecamatan as $kecamatan): ?>
                      <option value="<?= $kecamatan->id_kecamatan?>" <?php if ($kecamatan->id_kecamatan==$pasien->kecamatan) { echo "selected"; } ?>> <?= $kecamatan->nama_kecamatan?>  </option>
                      <?php endforeach ?>
                      
                      <script type="text/javascript"></script>
                    </select>
                </div>

                <div class="form-group">
                  <label for="">Kelurahan</label>
                    <select required name="kelurahan" class=" kelurahan form-control">
                      <option> Pilih Kelurahan</option>
                       <?php foreach ($kelurahan as $kelurahan): ?>
                      <option value="<?= $kelurahan->id_kelurahan?>" <?php if ($kelurahan->id_kelurahan==$pasien->kelurahan) { echo "selected"; } ?>> <?= $kelurahan->nama_kelurahan?>  </option>
                      <?php endforeach ?>
                    </select>
                </div>


                <div class="form-group">
                  <label for="" class="">Jenis Kelamin</label>
                    <p><input required type='radio'
                     <?php if ($pasien->jenis_kelamin==='1') { echo "checked"; } ?> name='jenis_kelamin' value='1' />Pria</p>
                    <p><input type='radio'
                     <?php if ($pasien->jenis_kelamin==='0') { echo "checked"; } ?> name='jenis_kelamin' value='0' />Perempuan</p>
                </div>

                <div class="form-group">
                  <label for="" class="">STATUS</label>
                  <select required name="status" class="form-control">
                    <option> Pilih </option>
                    <option <?php if ($pasien->status==="1") {
                      echo "selected";
                    } ?> value="1"> Menikah </option>
                    <option <?php if ($pasien->status==="2") {
                      echo "selected";
                    } ?> value="2"> Belum Menikah </option>
                    <option <?php if ($pasien->status==="3") {
                      echo "selected";
                    } ?> value="3"> Janda </option>
                    <option <?php if ($pasien->status==="4") {
                      echo "selected";
                    } ?> value="4"> Duda </option>
                  </select>
                </div>         

                
                <div class="form-group">
                  <label for="" class="">No Telepon</label>
                  <input value="<?=$pasien->no_hp?>" required type="number" name="no_hp" class="form-control" name="">
                </div>       

                  <div class="form-group">
                  <label>Pekerjaan</label>
                    <select required name="pekerjaan" class="form-control">
                      <option> Pilih </option>
                      <?php foreach ($pekerjaan as $pekerjaan): ?>
                        <option value="<?=$pekerjaan->id_pekerjaan?>" <?php if ($pekerjaan->id_pekerjaan==$pasien->pekerjaan) { echo "selected"; } ?> ><?= $pekerjaan->nama_pekerjaan?></option>             
                      <?php endforeach ?>
                    </select>
                  </div>       
              
              <!-- /.box-footer -->

          </div>
      </div>
    </div>
  </div>

  <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title">Kedatangan</h3>
      </div>

      <div class="form-group">
        <label>Tanggal</label>
          <div class="row">
            <div class="col-xs-2">
              <input value="<?=$pasien->tanggal_masuk?>" required type="date" name="tanggal_masuk" class="form-control" name="">
            </div>
          </div>
      </div>

      <div class="form-group">
      <label>Kedatangan</label>
        <select required name="kedatangan" class="form-control">
          <option> Pilih Kedatangan </option>
          <?php foreach ($kedatangan as $kedatangan ): ?>
            <option value="<?= $kedatangan->id_kedatangan?>" <?php if ($kedatangan->id_kedatangan==$pasien->id_kedatangan) { echo "selected"; } ?> ><?= $kedatangan->jenis_kedatangan ?></option>
          <?php endforeach ?>
        </select>
      </div>

      <div class="form-group">
      <label>Ruangan</label>
        <select required name="ruangan" class="form-control">
          <option> Pilih Ruangan </option>
          <?php foreach ($ruangan as $ruangan): ?>
            <option value="<?= $ruangan->id_ruangan?>" <?php if ($ruangan->id_ruangan==$pasien->id_ruangan) { echo "selected"; } ?>><?= $ruangan->nama_ruangan?></option>
          <?php endforeach ?>
        </select>
      </div> 

       <!-- <div class="form-group">
      <label>Dokter</label>
        <select required name="dokter" class="form-control">
          <option> Pilih Dokter </option>
          <?php foreach ($dokter as $dokter): ?>
            <option value="<?= $dokter->id_dokter?>" <?php if ($dokter->id_dokter==$pasien->id_dokter) { echo "selected"; } ?>><?= $dokter->nama_dokterna?></option>
          <?php endforeach ?>
        </select>
      </div>  -->

       <div class="form-group">
        <label>Dokter</label>
          <div class="row">
            <div class="col-xs-6">
              <input required type="text" value="<?= $pasien->nama_dokterna?>" name="nama_dokterna" class="form-control">
            </div>
          </div>
      </div> 


       <div class="form-group">
        <label>KBBIH</label>
          <div class="row">
            <div class="col-xs-6">
              <input required type="text" value="<?= $pasien->kbbih?>" name="kbbih" class="form-control">
            </div>
          </div>
      </div> 
        <div class="form-group">
        <label>KLOTER</label>
          <div class="row">
            <div class="col-xs-6">
              <input required type="text" value="<?= $pasien->kloter?>" name="kloter" class="form-control">
            </div>
          </div>
      </div> 

  </div>
</section>



 <div class="box box-info">
  <div class="box-header with-border">
    <div class="box-footer">
      <button class="btn btn-success btn-lg" name="submit" type="submit">
      <i class="fa fa-save"></i>Simpan
    </button>
    <button class="btn btn-info btn-lg" name="reset" type="reset">
      <i class="fa fa-save"></i>reset
    </button>
    </div>

     <?php echo form_close(); ?> 
<br><br><br>


         <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">List Register</h3>
            </div>
          </div>


  </div>
  <!-- /.box-body -->
</div>




    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script>




       $(document).ready(function () {
                $('#datepicker').datepicker({
                 //merubah format tanggal datepicker ke dd-mm-yyyy
                    format: "yyyy-mm-dd",
                    //aktifkan kode dibawah untuk melihat perbedaanya, disable baris perintah diatasa
                    //format: "dd-mm-yyyy",
                    autoclose: true
                });
            });
 
        window.onload=function(){
            $('#datepicker').on('change', function() {
                var dob = new Date(this.value);
                var today = new Date();
                var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                $('#umur').val(age);
            });
        }
 
    </script>
