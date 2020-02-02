

 <section class="content">
   
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Registrasi Pasien Baru</h3>
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

echo form_open(base_url('home/tambah_pasien'), 'class="form-horizontal"');;
 ?>
              <div class="box-body">

                <div class="form-group">
                  <label for="no_rek">No Rekam Medis</label>
                  <input required type="number" name="no_rekam_medis" class="form-control" id="no_rek" >
                </div>
<!-- <?php var_dump($x['no_registrasi']) ?> -->
                <input required type="hidden" name="no_registrasi" value="KKHI<?php echo $x['no_registrasi'];?>">
              
                <div class="form-group">
                  <label for="passport">Passport</label>
                  <input required type="text" name="passport" class="form-control" id="passport">
                </div>

                 <div class="form-group">
                  <label for="nama">Nama Pasien</label>
                  <input required type="text" name="nama_pasien" class="form-control" id="nama">
                </div>

                 <div class="form-group">
                  <label for="tempatlahir">Tempat Lahir</label>
                  <input required type="text" name="tempat_lahir" class="form-control" id="tempatlahir">
                </div>

                 <div class="form-group">
                  <label>Tanggal Lahir</label>
                    <div class="row">
                      <div class="col-xs-5">
                        <input required type="" name="tanggal_lahir" id="datepicker" class="form-control" autocomplete="off">
                      </div>
                    </div>
                  </div>


                   <div class="form-group">
                  <label>Umur</label>
                    <div class="row">
                      <div class="col-xs-3">
                        <input required type="number" name="umur" id="umur" class="form-control" readonly>
                      </div>
                    </div>
                  </div>

                 <div class="form-group">
                  <label for="">Alamat</label>
                  <input required type="text" name="alamat" class="form-control" id="">
                </div>

                 <div class="form-group">
                  <label>RT / RW</label>
                    <div class="row">
                      <div class="col-xs-4">
                        <input required type="text" name="rt" class="form-control" >
                      </div>
                      <div class="col-xs-4">
                        <input required type="text" name="rw" class="form-control" >
                      </div>
                    </div>
                </div>

                 <div class="form-group">
                  <label for="">Golongan Darah</label>
                   <select required name="golongan_darah" class="form-control">
                      <option> Pilih Darah</option>
                      <option value="a"> A </option>
                      <option value="b"> B </option>
                      <option value="o"> O </option>
                      <option value="ab"> AB </option>
                    </select>
                </div>

                 <div class="form-group">
                  <label for="">Pendidikan</label>
                   <select required name="pendidikan" class="form-control">
                      <option> Pilih Pendidikan</option>
                      <?php foreach ($pendidikan as $pendidikan): ?>
                        <option value="<?= $pendidikan->id_pendidikan?>"><?= $pendidikan->nama_pendidikan?></option>
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
                      <option value="1"> Indonesia </option>
                    </select>
                </div>

                <div class="form-group">
                  <label for="">Provinsi</label>
                    <select required name="provinsi" id="provinsi" class="form-control">
                      <option> Pilih Provinsi</option>
                      <?php foreach ($provinsi as $provinsi): ?>
                      <option value="<?= $provinsi->id_provinsi?>"> <?= $provinsi->nama_provinsi?>  </option>
                      <?php endforeach ?>
                    </select>
                </div>


                <div class="form-group">
                  <label for="">Kota / Kabupaten</label>
                    <select required name="kota" id="kota" class="kota form-control">
                      <option> Pilih Kota / Kabupaten</option>
                       <!-- <?php foreach ($kota as $kota): ?>
                      <option value="<?= $kota->id_kota?>"> <?= $kota->nama_kota?>  </option>
                      <?php endforeach ?> -->
                    </select>
                </div>


                <div class="form-group">
                  <label for="">Kecamatan</label>
                    <select required name="kecamatan" class=" kecamatan form-control">
                      <option> Pilih Kecamatan</option>
                       <!-- <?php foreach ($kecamatan as $kecamatan): ?>
                      <option value="<?= $kecamatan->id_kecamatan?>"> <?= $kecamatan->nama_kecamatan?>  </option>
                      <?php endforeach ?> -->
                      
                      <script type="text/javascript"></script>
                    </select>
                </div>

                <div class="form-group">
                  <label for="">Kelurahan</label>
                    <select required name="kelurahan" class=" kelurahan form-control">
                      <option> Pilih Kelurahan</option>
                      <!--  <?php foreach ($kelurahan as $kelurahan): ?>
                      <option value="<?= $kelurahan->id_kelurahan?>"> <?= $kelurahan->nama_kelurahan?>  </option>
                      <?php endforeach ?> -->
                    </select>
                </div>


                <div class="form-group">
                  <label for="" class="">Jenis Kelamin</label>
                    <p><input required type='radio' name='jenis_kelamin' value='1' />Pria</p>
                    <p><input type='radio' name='jenis_kelamin' value='0' />Perempuan</p>
                </div>

                <div class="form-group">
                  <label for="" class="">STATUS</label>
                  <select required name="status" class="form-control">
                   <option> Pilih </option>
                    <option value="2"> Menikah </option>
                    <option value="3"> Belum Menikah </option>
                    <option value="4"> Janda </option>
                    <option value="5"> Duda </option>
                  </select>
                </div>         

                
                <div class="form-group">
                  <label for="" class="">No Telepon</label>
                  <input required type="number" name="no_hp" class="form-control" name="">
                </div>       

                  <div class="form-group">
                  <label>Pekerjaan</label>
                    <select required name="pekerjaan" class="form-control">
                      <option> Pilih </option>
                      <?php foreach ($pekerjaan as $pekerjaan): ?>
                        <option value="<?=$pekerjaan->id_pekerjaan?>"><?= $pekerjaan->nama_pekerjaan?></option>                        
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
            <div class="col-xs-3">
              <input required type="date" value="" name="tanggal_masuk" class="form-control" name="">
            </div>
            <div class="col-xs-2">
              <!-- time Picker -->
              <div class="bootstrap-timepicker">
                  <div class="input-group">
                    <input type="time" name="jam_masuk" class="form-control">
                  </div>
            </div>
          </div>
      </div>

      <div class="form-group">
      <label>Kedatangan</label>
        <select required name="kedatangan" class="form-control">
          <option> Pilih Kedatangan </option>
          <?php foreach ($kedatangan as $kedatangan ): ?>
            <option value="<?= $kedatangan->id_kedatangan?>"><?= $kedatangan->jenis_kedatangan ?></option>
          <?php endforeach ?>
        </select>
      </div>

      <div class="form-group">
      <label>Ruangan</label>
        <select required name="ruangan" class="form-control">
          <option> Pilih Ruangan </option>
          <?php foreach ($ruangan as $ruangan): ?>
            <option value="<?= $ruangan->id_ruangan?>"><?= $ruangan->nama_ruangan?></option>
          <?php endforeach ?>
        </select>
      </div> 

      <!--  <div class="form-group">
      <label>Dokter</label>
        <select required name="dokter" class="form-control">
          <option> Pilih Dokter </option>
          <?php foreach ($dokter as $dokter): ?>
            <option value="<?= $dokter->id_dokter?>"><?= $dokter->nama_dokterna?></option>
          <?php endforeach ?>
        </select>
      </div> -->

       <div class="form-group">
        <label>Dokter</label>
          <div class="row">
            <div class="col-xs-6">
              <input required type="text" name="nama_dokterna" class="form-control">
            </div>
          </div>
      </div> 

       <div class="form-group">
        <label>KBIH</label>
          <div class="row">
            <div class="col-xs-6">
              <input required type="text" name="kbbih" class="form-control">
            </div>
          </div>
      </div> 
        <div class="form-group">
        <label>KLOTER</label>
          <div class="row">
            <div class="col-xs-6">
              <input required type="text" name="kloter" class="form-control">
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


<table class="table table-bordered" id="example">
</table>


<div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
    <tr>
      <th>No</th>
      <th>No Registrasi</th>
      <th>No MedRec</th>
      <th>Nama Pasien</th>
      <th>Ruangan</th>
      <th>Dokter</th>
      <th>Tanggal</th>
      <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php $no=1; foreach ($pasien as $us ) { ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $us->no_registrasi?></td>
      <td><?= $us->no_rekam_medis?></td>
      <td><?= $us->nama_pasien?></td>
      <td><?= $us->nama_ruangan?></td>
      <td><?= $us->nama_dokterna?></td>
      <td><?= $us->tanggal_input?></td>
      <td>
        <a href="<?= base_url('home/pasien_edit/'.$us->id_pasien)?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a>
        <a href="<?= base_url('home/pasien_hapus/'.$us->id_pasien)?>" class="btn btn-danger btn-xs" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fa fa-trash"></i>Hapus</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>


  </div>
  <!-- /.box-body -->
</div>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="<?= base_url()?>assets/admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script type="text/javascript">
    //Timepicker
    // $('.timepicker').timepicker({
    //   showInputs: false
    // })

    $('.timepicker').timepicker({
    timeFormat: 'h:mm p',
    interval: 60,
    minTime: '10',
    maxTime: '6:00pm',
    defaultTime: '11',
    startTime: '10:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});

    var timepicker = new TimePicker('time', {
  lang: 'en',
  theme: 'dark'
});
timepicker.on('change', function(evt) {
  
  var value = (evt.hour || '00') + ':' + (evt.minute || '00');
  evt.element.value = value;

});

    window.setTimeout("waktu()",1000);  
function waktu() {   
var tanggal = new Date();  
setTimeout("waktu()",1000);  
document.getElementById("jam").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
}


    </script>
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

       $(document).ready(function () {
                $('#datepicker1').datepicker({
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

    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.2.3.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>

    <script type="text/javascript">
  $(document).ready(function(){
    $('#provinsi').change(function(){
      var id=$(this).val();
      $.ajax({
        url : "<?php echo base_url();?>/home/get_kota",
        method : "POST",
        data : {id: id},
        async : false,
            dataType : 'json',
        success: function(data){
          var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<option value="' + data[i].id_kota + '">'+data[i].nama_kota+'</option>';
                }
                $('#kota').html(html);
        }
    });
  });
});
</script>



<script type="text/javascript">
  $(document).ready(function(){
    $('#kota').change(function(){
      var id=$(this).val();
      $.ajax({
        url : "<?php echo base_url();?>/home/get_kecamatan",
        method : "POST",
        data : {id: id},
        async : false,
            dataType : 'json',
        success: function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<option value="' + data[i].id_kecamatan + '">'+data[i].nama_kecamatan+'</option>';
                }
                $('.kecamatan').html(html);
        }
      });
    });
  });


  $("#").delegate("")

</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.kecamatan').change(function(){
      var id=$(this).val();
      $.ajax({
        url : "<?php echo base_url();?>/home/get_kelurahan",
        method : "POST",
        data : {id: id},
        async : false,
            dataType : 'json',
        success: function(data){
          var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<option>'+data[i].nama_kelurahan+'</option>';
                }
                $('.kelurahan').html(html);
          
        }
      });
    });
  });




</script>





