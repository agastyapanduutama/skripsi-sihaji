<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_laporan extends CI_Model {

	function indexing()	{
		$this->db->select('*');
		$this->db->from('pasien','dokter','ruangan');
		$this->db->join('dokter', 'dokter.id_dokter = pasien.id_dokter', 'left');
		$this->db->join('ruangan', 'ruangan.id_ruangan = pasien.id_ruangan', 'left');
		$this->db->order_by('id_pasien', 'ASC');
		$this->db->where('status_pasien','0');
		
		$query = $this->db->get();
		return $query->result();
	}

	function peruangan()	{
		$this->db->select('*');
		$this->db->from('pasien','dokter','ruangan');
		$this->db->join('dokter', 'dokter.id_dokter = pasien.id_dokter', 'left');
		$this->db->join('ruangan', 'ruangan.id_ruangan = pasien.id_ruangan', 'left');
		$this->db->order_by('nama_ruangan', 'ASC');
		// $this->db->where('status_pasien','0');
		$query = $this->db->get();
		return $query->result();
	}

	function kloter()	{
		$this->db->select('*');
		$this->db->from('pasien','dokter','ruangan');
		$this->db->join('dokter', 'dokter.id_dokter = pasien.id_dokter', 'left');
		$this->db->join('ruangan', 'ruangan.id_ruangan = pasien.id_ruangan', 'left');
		$this->db->order_by('kloter', 'ASC');
		// $this->db->where('status_pasien','0');
		$query = $this->db->get();
		return $query->result();
	}

	function jenis_kelamin()	{
		$this->db->select('*');
		$this->db->from('pasien','dokter','ruangan');
		$this->db->join('dokter', 'dokter.id_dokter = pasien.id_dokter', 'left');
		$this->db->join('ruangan', 'ruangan.id_ruangan = pasien.id_ruangan', 'left');
		$this->db->order_by('jenis_kelamin', 'ASC');
		// $this->db->where('status_pasien','0');
		$query = $this->db->get();
		return $query->result();
	}

	function usia()	{
		$this->db->select('*');
		$this->db->from('pasien','dokter','ruangan');
		$this->db->join('dokter', 'dokter.id_dokter = pasien.id_dokter', 'left');
		$this->db->join('ruangan', 'ruangan.id_ruangan = pasien.id_ruangan', 'left');
		$this->db->order_by('umur', 'ASC');
		// $this->db->where('status_pasien','0');
		$query = $this->db->get();
		return $query->result();
	}

	function evakuasi()	{
		$this->db->select('*');
		$this->db->from('pasien','dokter','ruangan');
		$this->db->join('dokter', 'dokter.id_dokter = pasien.id_dokter', 'left');
		$this->db->join('ruangan', 'ruangan.id_ruangan = pasien.id_ruangan', 'left');
		$this->db->order_by('umur', 'ASC');
		$this->db->where('alasan_keluar','4');
		$query = $this->db->get();
		return $query->result();
	}

	function rujuk()	{
		$this->db->select('*');
		$this->db->from('pasien','dokter','ruangan');
		$this->db->join('dokter', 'dokter.id_dokter = pasien.id_dokter', 'left');
		$this->db->join('ruangan', 'ruangan.id_ruangan = pasien.id_ruangan', 'left');
		$this->db->order_by('umur', 'ASC');
		$this->db->where('alasan_keluar','2');
		$query = $this->db->get();
		return $query->result();
	}

	public function cari_data()
	{
		$this->db->select('*');
		$this->db->from('pasien','dokter','ruangan');
		$this->db->join('dokter', 'dokter.id_dokter = pasien.id_dokter', 'left');
		$this->db->join('ruangan', 'ruangan.id_ruangan = pasien.id_ruangan', 'left');
		$this->db->order_by('id_pasien', 'DESC');
		$this->db->where('status_pasien','0');
		$this->db->where('tanggal_masuk >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_masuk <=',$this->input->post('tgl_akhir'));
		$query = $this->db->get();
		return $query->result();
	}

	function cari_peruangan()	{
		$this->db->select('*');
		$this->db->from('pasien','dokter','ruangan');
		$this->db->join('dokter', 'dokter.id_dokter = pasien.id_dokter', 'left');
		$this->db->join('ruangan', 'ruangan.id_ruangan = pasien.id_ruangan', 'left');
		$this->db->where('tanggal_masuk >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_masuk <=',$this->input->post('tgl_akhir'));
		$this->db->order_by('nama_ruangan', 'ASC');
		// $this->db->where('status_pasien','0');
		$query = $this->db->get();
		return $query->result();
	}

	function cari_jenis_kelamin()	{
		$this->db->select('*');
		$this->db->from('pasien','dokter','ruangan');
		$this->db->join('dokter', 'dokter.id_dokter = pasien.id_dokter', 'left');
		$this->db->join('ruangan', 'ruangan.id_ruangan = pasien.id_ruangan', 'left');
		$this->db->where('tanggal_masuk >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_masuk <=',$this->input->post('tgl_akhir'));
		$this->db->where('jenis_kelamin',$this->input->post('jenis_kelamin'));
		$this->db->order_by('jenis_kelamin', 'ASC');
		// $this->db->where('status_pasien','0');
		$query = $this->db->get();
		return $query->result();
	}

	function cari_jenis_kelamin_semua()	{
		$this->db->select('*');
		$this->db->from('pasien','dokter','ruangan');
		$this->db->join('dokter', 'dokter.id_dokter = pasien.id_dokter', 'left');
		$this->db->join('ruangan', 'ruangan.id_ruangan = pasien.id_ruangan', 'left');
		$this->db->where('tanggal_masuk >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_masuk <=',$this->input->post('tgl_akhir'));
		// $this->db->where('jenis_kelamin',$this->input->post('jenis_kelamin'));
		$this->db->order_by('jenis_kelamin', 'ASC');
		// $this->db->where('status_pasien','0');
		$query = $this->db->get();
		return $query->result();
	}

	function cari_usia()	{
		$this->db->select('*');
		$this->db->from('pasien','dokter','ruangan');
		$this->db->join('dokter', 'dokter.id_dokter = pasien.id_dokter', 'left');
		$this->db->join('ruangan', 'ruangan.id_ruangan = pasien.id_ruangan', 'left');
		$this->db->where('tanggal_masuk >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_masuk <=',$this->input->post('tgl_akhir'));
		$this->db->order_by('umur', 'ASC');
		// $this->db->where('status_pasien','0');
		$query = $this->db->get();
		return $query->result();
	}

	function cari_kloter()	{
		$this->db->select('*');
		$this->db->from('pasien','dokter','ruangan');
		$this->db->join('dokter', 'dokter.id_dokter = pasien.id_dokter', 'left');
		$this->db->join('ruangan', 'ruangan.id_ruangan = pasien.id_ruangan', 'left');
		$this->db->where('tanggal_masuk >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_masuk <=',$this->input->post('tgl_akhir'));
		$this->db->order_by('kloter', 'ASC');
		// $this->db->where('status_pasien','0');
		$query = $this->db->get();
		return $query->result();
	}

	function cari_evakuasi()	{
		$this->db->select('*');
		$this->db->from('pasien','dokter','ruangan');
		$this->db->join('dokter', 'dokter.id_dokter = pasien.id_dokter', 'left');
		$this->db->join('ruangan', 'ruangan.id_ruangan = pasien.id_ruangan', 'left');
		$this->db->where('tanggal_masuk >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_masuk <=',$this->input->post('tgl_akhir'));
		$this->db->order_by('umur', 'ASC');
		$this->db->where('alasan_keluar','4');
		$query = $this->db->get();
		return $query->result();
	}

	function cari_rujuk()	{
		$this->db->select('*');
		$this->db->from('pasien','dokter','ruangan');
		$this->db->join('dokter', 'dokter.id_dokter = pasien.id_dokter', 'left');
		$this->db->join('ruangan', 'ruangan.id_ruangan = pasien.id_ruangan', 'left');
		$this->db->where('tanggal_masuk >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_masuk <=',$this->input->post('tgl_akhir'));
		$this->db->order_by('umur', 'ASC');
		$this->db->where('alasan_keluar','2');
		$query = $this->db->get();
		return $query->result();
	}
	
	function cari_inap()	{
		$this->db->select('*');
		$this->db->from('pasien','dokter','ruangan');
		$this->db->join('dokter', 'dokter.id_dokter = pasien.id_dokter', 'left');
		$this->db->join('ruangan', 'ruangan.id_ruangan = pasien.id_ruangan', 'left');
		$this->db->where('tanggal_masuk >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_masuk <=',$this->input->post('tgl_akhir'));
		$this->db->order_by('id_pasien', 'ASC');
		$this->db->where('status_pasien','0');
		$query = $this->db->get();
		return $query->result();
	}

	function hitung_inap()
	{
		$this->db->like('status_pasien','0');
		$this->db->from('pasien');
		$this->db->count_all_results();
    }

}

/* End of file model_laporan.php */
/* Location: ./application/models/model_laporan.php */