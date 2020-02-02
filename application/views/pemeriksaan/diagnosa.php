 <section class="content">
   

         


          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pasien Registrasi</h3>
            </div>
          </div>

   <?php 

// var_dump($this->session->userdata('nama_user'));

echo validation_errors('<div class="alert alert-warning">','</div>');

echo form_open(base_url('pemeriksaan/pemeriksaan_diagnosa/'. $pasien->id_pasien), 'class="form-horizontal"');;
 ?>
          <div class="row">
            <div class="col-md-6">
              <div class="box-body">
                <input type="hidden" id="idpasien" name="idpasien" value="<?= $pasien->id_pasien ?>" >
                <input type="hidden" id="creator" name="creator" value="<?= $this->session->userdata('nama_user') ?>" >knt

                <div class="form-group">
                  <label for="nama_pasien">Nama Pasien</label>
                  <input readonly type="text" name="nama_pasien" class="form-control" value="<?= $pasien->nama_pasien?>" id="nama_pasien" >
                </div>

                 <div class="form-group">
                  <label for="no_rek">No RM</label>
                  <input readonly type="number" value="<?= $pasien->no_rekam_medis?>" name="no_rekam_medis" class="form-control" id="no_rek" >
                </div>

                 <div class="form-group">
                  <label for="no_registrasi">No Registrasi</label>
                  <input readonly type="text" value="<?= $pasien->no_registrasi?>" name="no_registrasi" class="form-control" id="no_registrasi" >
                </div>

                 <div class="form-group">
                  <label for="no_rek">Tanggal Lahir</label>
                  <div class="row">
                    <div class="col-xs-5">
                      <input type="date" readonly class="form-control" value="<?= $pasien->tanggal_lahir?>">
                    </div>
                    <div class="col-xs-1">
                      /
                    </div>
                    <div class="col-xs-2">
                      <input type="" readonly value="<?= $pasien->umur?>" class="form-control">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="no_rek">Jenis Kelamin</label>
                  <input readonly  type="text" name="no_rekam_medis" class="form-control" value=" <?php 
                if ($pasien->jenis_kelamin===0) {
                  echo "Perempuan";
                }else{
                  echo "Laki-Laki";
                }
                ?>" id="no_rek" >
                </div>

               


                

                <div class="form-group">
                  <label for="no_rek">Dokter</label>
                   <input required type="text" name="nama_dokterna" class="form-control" value="<?= $pasien->nama_dokterna?>" id="no_rek" >
                </div>

                 <button class="btn btn-success" name="submit" type="submit">
                  Simpan
                </button>

              </div>
            </div>
          </div>
<?php echo form_close(); ?>
           <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Diagnosa</h3>
            </div>
          </div>

</section>


        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Kodefikasi Diagnosa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="list_diagnosa" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <!-- <th>Id Pasien</th> -->
                  <th>Deskripsi</th>
                  <!-- <th>Status</th> -->
                  <th>Kasus</th>
                  <th>Tanggal Diagnosa</th>
                  <th>Creator</th>
                  <th>Editor</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                
              </tbody>
            </table>
          </div>
        </div>


    <div class="box-footer">
      <button class="btn btn-success" name="submit" id="btntambah" type="submit" data-toggle="modal" data-target="#myModal">
      Tambah
    </button>
    </div>
 
  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Kodefikasi Diagnosa</h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
          
            <input type="hidden" id="in_idpasien" name="idpasien">

           <div class="form-group">
            <label>Kode</label>
            <input required type="text" class="form-control" id="in_diagnosa" >
            <button type="button" class="btn btn-primary" id="btn-search"><i class="fa fa-search"></i> Cari</button>
          </div>

          <span id="loading">LOADING...</span>

         <div class="form-group">
          <label for="">Deskripsi</label>
          <input type="text" class="form-control" id="in_deskripsi" >
        </div>

        

         <div class="form-group">
          <label for="">Status</label>
          <!-- <input type="text" class="form-control" id="in_status" > -->
          <select id="in_status" class="form-control">
            <option value="Sudah Koding">Sudah Koding</option>
            <option value="Belum Koding">Belum Koding</option>
          </select>
         </div>

         <div class="form-group">
          <label for="">Kasus</label>
          <input type="text" class="form-control"  id="in_kasus" >
        </div>


        <!--  <div class="form-group">
          <label for="">Tanggal Diagnosa</label>
          <input type="date" class="form-control" value="<?= date("d/m/Y") ?>" id="in_tanggal_diagnosa" >
        </div> -->

        <!-- <input type="" value="<?= $this->session->userdata('nama_user');?>" name=""> -->


         <div class="form-group">
          <label for="">Creator</label>
          <input type="text" readonly class="form-control" name="" id="in_creator">
        </div>


         <div class="form-group">
          <label for="">Editor</label>
          <input type="text" class="form-control" id="in_editor" >
        </div>


        </button>

        </div>
        <!-- footer modal -->
        <div class="modal-footer">
        <button class="btn btn-primary" name="submit" type="submit" onclick="tambah()" data-toggle="modal" data-target="#myModal">
          Simpan
        </button>
        <button type="button" class="btn btn-primary" onclick="tambah()">Simpan tambah</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="modal-edit">
  <div class="modal-dialog modal-xs">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input type="hidden" name="id" id="id_data">
        </div>

         <div class="form-group">
            <label>Kode</label>
            <input required type="text" class="form-control" id="ed_kode" >
            <button type="button" class="btn btn-primary" id="btn-search1"><i class="fa fa-search"></i> Cari</button>
          </div>

          <span id="loading1">LOADING...</span>

         <div class="form-group">
          <label for="">Deskripsi</label>
          <input type="text" class="form-control" id="ed_deskripsi" >
        </div>

        

         <div class="form-group">
          <label for="">Status</label>
          <input type="text" class="form-control" id="ed_status" >
          <!-- <select id="ed_status" class="form-control">
            <option value="Sudah Koding">Sudah Koding</option>
            <option value="Belum Koding">Belum Koding</option>
          </select> -->
        </div>

         <div class="form-group">
          <label for="">Kasus</label>
          <input type="text" class="form-control" id="ed_kasus" >
        </div>

        <!--  <div class="form-group">
          <label for="">Tanggal Diagnosa</label>
          <input type="date" class="form-control" id="ed_tanggal_diagnosa" >
        </div> -->


         <div class="form-group">
          <label for="">Creator</label>
          <input type="text" readonly class="form-control" value="" id="ed_creator" >
        </div>


         <div class="form-group">
          <label for="">Editor</label>
          <input type="text" class="form-control" id="ed_editor" >
        </div>



      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" onclick="simpan()">Simpan</button>
      </div>
    </div>
  </div>
</div>

<script>
   $(document).ready(function () {
                $('#in_tanggal_diagnosa').datepicker({
                    format: "yyyy-mm-dd",
                    autoclose: true
                });
            });

    $(document).ready(function () {
                $('#ed_tanggal_diagnosa').datepicker({
                    format: "yyyy-mm-dd",
                    autoclose: true
                });
            });
</script>