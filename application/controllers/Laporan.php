<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_admin');
		$this->load->model('model_laporan');
	}

	public function jumlah_pasien_rawat_inap()
	{
		$pasien = $this->model_admin->indexing();
		$ambil_diagnosa = $this->model_admin->tampil_diagnosa_pasien();
		$total = $this->model_laporan->hitung_inap();

		$data = array('pasien' => $pasien,
					  // 'total'	=> $total,
					  'diagnosa' => $ambil_diagnosa,
					  'isi'		=> 'laporan/index/index_rawat' );


		$this->load->view('templates/wrapper', $data);
	}	

	public function jumlah_pasien_per_ruangan()
	{
		$pasien = $this->model_laporan->peruangan();

		$data = array('pasien' => $pasien 
					,'isi'		=> 'laporan/index/index_ruangan');

		$this->load->view('templates/wrapper', $data);
	}

	public function jumlah_pasien_per_kloter()
	{
		$pasien = $this->model_laporan->kloter();

		$data = array('pasien' => $pasien 
					,'isi'		=> 'laporan/index/index_kloter');

		$this->load->view('templates/wrapper', $data);
	}

	public function jumlah_pasien_per_jenis_kelamin()
	{
		$pasien = $this->model_laporan->jenis_kelamin();

		$data = array('pasien' =>  $pasien
						,'isi'		=> 'laporan/index/index_jk' );

		$this->load->view('templates/wrapper', $data, FALSE);
	}

	public function jumlah_pasien_per_usia()
	{
		$pasien = $this->model_laporan->usia();

		$data = array('pasien' =>  $pasien
						,'isi'		=> 'laporan/index/index_umur');

		$this->load->view('templates/wrapper', $data, FALSE);
	}

	public function jumlah_pasien_evakuasi()
	{
		$pasien = $this->model_laporan->evakuasi();

		$data = array('pasien' =>  $pasien 
					,'isi'		=> 'laporan/index/index_evakuasi');

		$this->load->view('templates/wrapper', $data, FALSE);
	}

	public function jumlah_pasien_rujuk()
	{
		$pasien = $this->model_laporan->rujuk();

		$data = array('pasien' =>  $pasien
						,'isi'		=> 'laporan/index/index_rujuk' );

		$this->load->view('templates/wrapper', $data, FALSE);
	}

	// start

public function cari_jumlah_pasien_rawat_inap()
	{
		$pasien = $this->model_admin->indexing();
		$ambil_diagnosa = $this->model_admin->tampil_diagnosa_pasien();
		$cari = $this->model_laporan->cari_inap();

		$data = array('pasien' => $pasien,
					  'diagnosa' => $ambil_diagnosa,
					  'cari'	=> $cari,
					  'isi'		=> 'laporan/cari/cari_rawat' );


		$this->load->view('templates/wrapper', $data);
	}	

	public function cari_jumlah_pasien_per_ruangan()
	{
		$pasien = $this->model_laporan->peruangan();
		$cari = $this->model_laporan->cari_peruangan();

		$data = array('pasien' => $pasien 
					,'cari'	=> $cari,
					'isi'		=> 'laporan/cari/cari_ruangan');

		$this->load->view('templates/wrapper', $data);
	}

	public function cari_jumlah_pasien_per_kloter()
	{
		$pasien = $this->model_laporan->kloter();
		$cari = $this->model_laporan->cari_kloter();

		$data = array('pasien' => $pasien 
					,'cari'	=> $cari,
					'isi'		=> 'laporan/cari/cari_kloter');

		$this->load->view('templates/wrapper', $data);
	}

	public function cari_jumlah_pasien_per_jenis_kelamin()
	{
		$pasien = $this->model_laporan->jenis_kelamin();
		$cari = $this->model_laporan->cari_jenis_kelamin();

		$data = array('pasien' =>  $pasien
						,'cari'	=> $cari,
						'isi'		=> 'laporan/cari/cari_jk' );

		$this->load->view('templates/wrapper', $data, FALSE);
	}

	public function cari_jumlah_pasien_per_usia()
	{
		$pasien = $this->model_laporan->usia();
		$cari = $this->model_laporan->cari_usia();

		$data = array('pasien' =>  $pasien
						,'cari'	=> $cari,
						'isi'		=> 'laporan/cari/cari_umur');

		$this->load->view('templates/wrapper', $data, FALSE);
	}

	public function cari_jumlah_pasien_evakuasi()
	{
		$pasien = $this->model_laporan->evakuasi();
		$cari = $this->model_laporan->cari_evakuasi();

		$data = array('pasien' =>  $pasien 
					,'cari'	=> $cari,
					'isi'		=> 'laporan/cari/cari_evakuasi');

		$this->load->view('templates/wrapper', $data, FALSE);
	}

	public function cari_jumlah_pasien_rujuk()
	{
		$pasien = $this->model_laporan->rujuk();
		$cari = $this->model_laporan->cari_rujuk();

		$data = array('pasien' =>  $pasien
						,'cari'	=> $cari,
						'isi'		=> 'laporan/cari/cari_rujuk' );

		$this->load->view('templates/wrapper', $data, FALSE);
	}

	// end

	public function cari_pasien_ruangan()
	{
		$cari = $this->model_laporan->cari_peruangan();

		$data = array('cari' => $cari ,
					  
					);

		$this->load->view('laporan/pasien_peruangan', $data);
	}

	public function cari_pasien_jenis_kelamin()
	{

		$cari = $this->model_laporan->cari_jenis_kelamin();

		if ($this->input->post('jenis_kelamin') === '3') {
			$cari = $this->model_laporan->cari_jenis_kelamin_semua();

			$data = array('cari' => $cari ,
					);
			$this->load->view('laporan/pasien_per_jenis_kelamin', $data);
			


		}else{

		$data = array('cari' => $cari ,
					  
					);

		$this->load->view('laporan/pasien_per_jenis_kelamin', $data);
		}
	}

	public function cari_pasien_usia()
	{
		$cari = $this->model_laporan->cari_usia();

		$data = array('cari' => $cari ,
					  
					);

		$this->load->view('laporan/pasien_per_usia', $data);
	}

	public function cari_pasien_evakuasi()
	{
		$cari = $this->model_laporan->cari_evakuasi();

		$data = array('cari' => $cari ,
					  
					);

		$this->load->view('laporan/pasien_evakuasi', $data);
	}

	public function cari_pasien_rujuk()
	{
		$cari = $this->model_laporan->cari_rujuk();

		$data = array('cari' => $cari ,
					  
					);

		$this->load->view('laporan/pasien_rawat_inap_rujuk', $data);
	}

	public function cari_pasien_inap()
	{
		$cari = $this->model_laporan->cari_inap();

		$data = array('cari' => $cari ,
					  
					);

		$this->load->view('laporan/pasien_rawat_inap', $data);
	}

	public function cari_pasien_kloter()
	{
		$cari = $this->model_laporan->cari_inap();

		$data = array('cari' => $cari ,
					  
					);

		$this->load->view('laporan/pasien_per_kloter', $data);
	}


}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */