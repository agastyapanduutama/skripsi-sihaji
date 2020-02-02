<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_admin');
	}

	public function index()
	{
		$data = array('isi' =>'dashboard' , );
		$this->load->view('templates/wrapper', $data, FALSE);
	}

	public function dashboard()
	{
		$total_jk = $this->model_admin->hitung_jk();
		$ieweh = $this->model_admin->ie();

		


		$data = array('isi' =>  'dashboard/index',
					  'total_jk'	=> $total_jk,
		 );
		$this->load->view('templates/wrapper', $data, FALSE);
	}

	public function list_pasien()
	{
		$pasien = $this->model_admin->indexing();
		$total = $this->model_admin->total_pasien();

		$data = array('isi' => 'office/index.php' ,
					  'total'	=> $total,
					   'pasien'	=> $pasien , );	

		$this->load->view('templates/wrapper', $data, FALSE);
	}

	public function tambah_pasien()
	{
		$pasien = $this->model_admin->indexing();
		$dokter = $this->model_admin->indexing_dokter();
		$ruangan = $this->model_admin->indexing_ruangan();
		$kedatangan = $this->model_admin->indexing_kedatangan();
		$pendidikan = $this->model_admin->indexing_pendidikan();
		$pekerjaan = $this->model_admin->indexing_pekerjaan();
		$provinsi = $this->model_admin->indexing_provinsi();
		$kota = $this->model_admin->indexing_kota();
		$kecamatan = $this->model_admin->indexing_kecamatan();
		$kelurahan = $this->model_admin->indexing_kelurahan();
		$x['no_registrasi']=$this->model_admin->get_no_registrasi();

		$valid = $this->form_validation;
		
		$valid->set_rules('no_rekam_medis', 'No Rekam Medis','required|is_unique[pasien.no_rekam_medis]',
				array('required'	=> '%s Harus diisi',
					  'is_unique'	=> '%s Sudah ada, silakan rubah'));

	
		if ($valid->run()===FALSE) {
		
		$data = array('isi'			=> 'office/tambah_pasien',
					  'dokter'		=> $dokter, 
					  'ruangan'		=> $ruangan, 
					  'kedatangan'	=> $kedatangan, 
					  'pendidikan'	=> $pendidikan, 
					  'pekerjaan'	=> $pekerjaan, 
					  'pasien'		=> $pasien ,
					  'provinsi'	=> $provinsi ,
					  'kota'		=> $kota ,
					  'kecamatan'	=> $kecamatan ,
					  'kelurahan'	=> $kelurahan ,
					  'x'			=> $x,
					);


		$this->load->view('templates/wrapper', $data, FALSE);
		
		}else{
			$i = $this->input;
			$data = array(	
							'nama_dokterna'		=> $i->post('nama_dokterna'),
							'id_ruangan'		=> $i->post('ruangan'),
							'id_kedatangan'		=> $i->post('kedatangan'),
							'no_registrasi'		=> $i->post('no_registrasi'),
							'no_rekam_medis'	=> $i->post('no_rekam_medis'),
							'passport'			=> $i->post('passport'),
							'nama_pasien'		=> $i->post('nama_pasien'),
							'tempat_lahir'		=> $i->post('tempat_lahir'),
							'tanggal_lahir'		=> $i->post('tanggal_lahir'),
							'umur'				=> $i->post('umur'),
							'alamat'			=> $i->post('alamat'),
							'rt'				=> $i->post('rt'),
							'rw'				=> $i->post('rw'),
							'negara'			=> $i->post('negara'),
							'provinsi'			=> $i->post('provinsi'),
							'kota'				=> $i->post('kota'),
							'kecamatan'			=> $i->post('kecamatan'),
							'kelurahan'			=> $i->post('kelurahan'),
							'jenis_kelamin'		=> $i->post('jenis_kelamin'),
							'status'			=> $i->post('status'),
							'status'			=> $i->post('status'),
							'golongan_darah'	=> $i->post('golongan_darah'),
							'no_hp'				=> $i->post('no_hp'),
							'pendidikan'		=> $i->post('pendidikan'),
							'kbbih'				=> $i->post('kbbih'),
							'kloter'			=> $i->post('kloter'),
							'tanggal_masuk'		=> $i->post('tanggal_masuk'),
							'jam_masuk'		=> $i->post('jam_masuk'),
							'pekerjaan'			=> $i->post('pekerjaan')
							
		);
			$this->model_admin->tambah_pasien($data);
			$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan');
			redirect(base_url('home/tambah_pasien'),'refresh');	
		}
	}

	public function pasien_edit($id_pasien)
	{
		$pasien = $this->model_admin->detail_pasien($id_pasien);
		$pasien_result = $this->model_admin->indexing();
		$dokter = $this->model_admin->indexing_dokter();
		$ruangan = $this->model_admin->indexing_ruangan();
		$kedatangan = $this->model_admin->indexing_kedatangan();
		$pendidikan = $this->model_admin->indexing_pendidikan();
		$pekerjaan = $this->model_admin->indexing_pekerjaan();
		$provinsi = $this->model_admin->indexing_provinsi();
		$kota = $this->model_admin->indexing_kota();
		$kecamatan = $this->model_admin->indexing_kecamatan();
		$kelurahan = $this->model_admin->indexing_kelurahan();
		$x['no_registrasi']=$this->model_admin->get_no_registrasi();

		$valid = $this->form_validation;
		
		$valid->set_rules('no_rekam_medis', 'No Rekam Medis','required',
				array('required'	=> '%s Harus diisi'));
		
		if ($valid->run()===FALSE) {
		
		$data = array('isi'			=> 'office/edit_pasien',
					  'pasien'		=> $pasien ,
					  'dokter'		=> $dokter, 
					  'pasien_result'=> $pasien_result, 
					  'ruangan'		=> $ruangan, 
					  'kedatangan'	=> $kedatangan, 
					  'pendidikan'	=> $pendidikan, 
					  'pekerjaan'	=> $pekerjaan, 
					  'provinsi'	=> $provinsi ,
					  'kota'		=> $kota ,
					  'kecamatan'	=> $kecamatan ,
					  'kelurahan'	=> $kelurahan ,
					  'x'			=> $x,
					);


		$this->load->view('templates/wrapper', $data, FALSE);
		
		}else{
			$i = $this->input;
			$data = array(	'id_pasien'			=> $id_pasien,
							'nama_dokterna'		=> $i->post('nama_dokterna'),
							'id_ruangan'		=> $i->post('ruangan'),
							'id_kedatangan'		=> $i->post('kedatangan'),
							'no_registrasi'		=> $i->post('no_registrasi'),
							'no_rekam_medis'	=> $i->post('no_rekam_medis'),
							'passport'			=> $i->post('passport'),
							'nama_pasien'		=> $i->post('nama_pasien'),
							'tempat_lahir'		=> $i->post('tempat_lahir'),
							'tanggal_lahir'		=> $i->post('tanggal_lahir'),
							'umur'				=> $i->post('umur'),
							'alamat'			=> $i->post('alamat'),
							'rt'				=> $i->post('rt'),
							'rw'				=> $i->post('rw'),
							'negara'			=> $i->post('negara'),
							'provinsi'			=> $i->post('provinsi'),
							'kota'				=> $i->post('kota'),
							'kecamatan'			=> $i->post('kecamatan'),
							'kelurahan'			=> $i->post('kelurahan'),
							'jenis_kelamin'		=> $i->post('jenis_kelamin'),
							'status'			=> $i->post('status'),
							'status'			=> $i->post('status'),
							'golongan_darah'	=> $i->post('golongan_darah'),
							'no_hp'				=> $i->post('no_hp'),
							'kbbih'				=> $i->post('kbbih'),
							'kloter'			=> $i->post('kloter'),
							'tanggal_masuk'		=> $i->post('tanggal_masuk'),
							'jam_masuk'			=> $i->post('jam_masuk'),
							'pendidikan'		=> $i->post('pendidikan'),
							'pekerjaan'			=> $i->post('pekerjaan')
							
		);
			$this->model_admin->edit_pasien($data);
			$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan');
			redirect(base_url('home/tambah_pasien'),'refresh');	
		}
	}

	public function pasien_hapus($id_pasien)
	{
			$data = array('id_pasien' => $id_pasien);
			$this->model_admin->hapus_pasien($data);
			$this->session->set_flashdata('sukses', 'Data berhasil Dihapus');
			redirect(base_url('home/tambah_pasien'),'refresh');	
	}

	function login()
	{
		$this->load->view('login/login');
	}

	

	public function pasien_keluar(){
			$pasien = $this->model_admin->get_all();
			$datana = array('isi' => 'office/pasien_keluar',
							'pasien'	=> $pasien , );
			$this->load->view('templates/wrapper',$datana, FALSE);

		}
 
	public function search(){
			$keyword = $this->input->post('keyword');
			$pasien = $this->model_admin->get_pasien_keyword($keyword);
		// $data['pasien']=$this->model_admin->get_pasien_keyword($keyword);
			$datana = array('isi' =>  'office/pasien_keluar_cari',
							'pasien'	=> $pasien );
			$this->load->view('templates/wrapper',$datana );
		}

	

	function get_kota(){
		$id=$this->input->post('id');
		$data=$this->model_admin->get_kota($id);
		echo json_encode($data);
	}

	function get_kecamatan(){
		$id=$this->input->post('id');
		$data=$this->model_admin->get_kecamatan($id);
		echo json_encode($data);
	}

	function get_kelurahan(){
		$id=$this->input->post('id');
		$data=$this->model_admin->get_kelurahan($id);
		echo json_encode($data);
	}


	public function keluar_pasien($id_pasien)
	{
		$pasien = $this->model_admin->detail_pasien($id_pasien);
		$valid = $this->form_validation;
		$valid->set_rules('alasan_keluar', 'Alasan Keluar','required',
				array('required'	=> '%s Harus diisi'));
		
		if ($valid->run()===FALSE) {
		
		$data = array('isi'			=> 'office/keluar',
					  'pasien' 		=> $pasien,
					);

		$this->load->view('templates/wrapper', $data, FALSE);
		
		}else{
			$i = $this->input;
			$data = array(	'id_pasien'			=> $id_pasien,
							'status_pasien'		=> '1',
							'alasan_keluar'		=> $i->post('alasan_keluar'),
							'keterangan'		=> $i->post('keterangan')
		);
			$this->model_admin->keluar_pasien($data);
			$this->session->set_flashdata('sukses', 'berhasil');
			redirect(base_url('home/index_keluar'),'refresh');	
		}
	}

	public function edit_keluar_pasien($id_pasien)
	{
		$pasien = $this->model_admin->detail_pasien($id_pasien);
		$valid = $this->form_validation;
		$valid->set_rules('alasan_keluar', 'Alasan Keluar','required',
				array('required'	=> '%s Harus diisi'));
		
		if ($valid->run()===FALSE) {
		
		$data = array('isi'			=> 'office/edit_keluar',
					  'pasien' 		=> $pasien,
					);

		$this->load->view('templates/wrapper', $data, FALSE);
		
		}else{
			$i = $this->input;
			$data = array(	'id_pasien'			=> $id_pasien,
							'status_pasien'		=> '1',
							'alasan_keluar'		=> $i->post('alasan_keluar'),
							'keterangan'		=> $i->post('keterangan')
		);
			$this->model_admin->keluar_pasien($data);
			$this->session->set_flashdata('sukses', 'berhasil');
			redirect(base_url('home/index_keluar'),'refresh');	
		}
	}


	public function index_keluar()
	{
		$pasien = $this->model_admin->index_pasien_keluar();

		$data = array('isi' =>'office/list_pasien_keluar',
					  'pasien'=> $pasien , );
		$this->load->view('templates/wrapper', $data, FALSE);
	}



}






/* End of file Home.php */
/* Location: ./application/controllers/Home.php */