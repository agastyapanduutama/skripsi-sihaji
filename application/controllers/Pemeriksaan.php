<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemeriksaan extends CI_Controller {


	public function index()
	{
		$pasien = $this->model_admin->indexing();

		$data = array('isi' => 'pemeriksaan/index.php' ,
					   'pasien'	=> $pasien , 
					);	

		$this->load->view('templates/wrapper', $data, FALSE);
	}

	public function cari()
	{
		

		$pasien = $this->model_admin->indexing();
		$cari = $this->model_admin->cari_data();

		$data = array('isi' => 'pemeriksaan/hasil' ,
					  'pasien' => $pasien,
					  'cari' => $cari );


		$this->load->view('templates/wrapper', $data);

	}

	public function search(){
		// Ambil data NIS yang dikirim via ajax post
		$nis = $this->input->post('nis');
		
		$siswa = $this->model_admin->viewByNis($nis);
		
		// var_dump($siswa->nama_diagnosa);
		// var_dump($siswa);

		if( ! empty($siswa)){ // Jika data siswa ada/ditemukan
			// Buat sebuah array
			$callback = array(
				'status' => 'success', // Set array status dengan success
				'in_deskripsi' => $siswa->nama_diagnosa, // Set array nama 
			);
		}else{
			$callback = array('status' => 'failed'); // set array status dengan failed
		}

		echo json_encode($callback); // konversi varibael $callback menjadi JSON
	}

	public function pemeriksaan_diagnosa($id_pasien)
	{
		// var_dump();
		$valid = $this->form_validation;

		$valid->set_rules('nama_dokterna', 'Nama Dokter','required',
				array('required'	=> '%s Harus diisi'));

		if ($valid->run()===FALSE) {

		$pasien = $this->model_admin->detail_pasien($id_pasien);
		$ambil_diagnosa = $this->model_admin->diagnosa_pasien($id_pasien);


		$data = array('isi' 		=> 'pemeriksaan/diagnosa' ,
					  'pasien'		=> $pasien ,
					  'diagnosa'	=> $ambil_diagnosa,
					  'script'		=> 'diagnosa',
					   );	

		$this->load->view('templates/wrapper', $data, FALSE);

		}else{
			$i = $this->input;
			$data = array(	'id_pasien'			=> $id_pasien,
							'nama_dokterna'		=> $i->post('nama_dokterna')
							
		);
			$this->model_admin->edit_pasien($data);
			$this->session->set_flashdata('success', 'Data berhasil diedit');
			redirect(base_url('pemeriksaan/'),'refresh');	
		}
		
	}



  

  public function diagnosaadd()
  {
    $data = array(
    	'id_pasienna' => $this->input->post('id_pasien'),
	    'kode_diagnosa' => $this->input->post('kode_diagnosa'), 
	    'deskripsi' => $this->input->post('deskripsi'), 
	    'instalasi' => $this->input->post('instalasi'), 
	    'status' => $this->input->post('status'), 
	    'kasus' => $this->input->post('kasus'), 
	    'tanggal_diagnosa' => $this->input->post('tanggal_diagnosa'), 
	    'creator' => $this->input->post('creator'), 
	    'editor' => $this->input->post('editor'), 
	  );
	  $this->db->insert('diagnosa', $data);
	  if ($this->db->affected_rows() > 0) {
        $pesan = array(
          'status' => 'sukses',
          'pesan' => 'Berhasil Menambah Data !',
        );
        echo json_encode($pesan);
      }
  }
  public function diagnosaedit()
  {
      $this->db->where('id', $this->input->post('id'));
      $data = array(
        // 'id_pasienna' => $this->input->post('id_pasien'),
	    'kode_diagnosa' => $this->input->post('kode_diagnosa'), 
	    'deskripsi' => $this->input->post('deskripsi'), 
	    'instalasi' => $this->input->post('instalasi'), 
	    'status' => $this->input->post('status'), 
	    'kasus' => $this->input->post('kasus'), 
	    'tanggal_diagnosa' => $this->input->post('tanggal_diagnosa'), 
	    'creator' => $this->input->post('creator'), 
	    'editor' => $this->input->post('editor'), 
      );
      $this->db->update('diagnosa', $data);
      $pesan = array(
        'status' => 'sukses', 
        'pesan' => 'Berhasil Mengubah Data !',
      );
      echo json_encode($pesan);
  }

  public function diagnosadelete()
  {
      // $this->db->select('t_galeri');
      $this->db->where('id', $this->input->post('id'));
      $this->db->delete('diagnosa');
      $pesan = array(
        'status' => 'sukses', 
        'pesan' => 'Berhasil Menghapus Data !',
      );
      echo json_encode($pesan);
  }

}

/* End of file Pemeriksaan.php */
/* Location: ./application/controllers/Pemeriksaan.php */