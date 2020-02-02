<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {

	public function login($username,$password){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where(array('username' => $username, 
							   'password' => $password));
		$this->db->order_by('id_user', 'asc');
		$query = $this->db->get();
		return $query->row();
	}	


	function indexing()	{
		$this->db->select('*');
		$this->db->from('pasien','dokter','ruangan');
		$this->db->join('dokter', 'dokter.id_dokter = pasien.id_dokter', 'left');
		$this->db->join('ruangan', 'ruangan.id_ruangan = pasien.id_ruangan', 'left');
		$this->db->order_by('id_pasien', 'DESC');
		$this->db->where('status_pasien','0');
		$query = $this->db->get();
		return $query->result();
	}

	function indexingnana()	{
		$this->db->select('*');
		$this->db->from('pasien','dokter','ruangan','diagnosa');
		$this->db->join('dokter', 'dokter.id_dokter = pasien.id_dokter', 'left');
		$this->db->join('ruangan', 'ruangan.id_ruangan = pasien.id_ruangan', 'left');
		$this->db->join('diagnosa', 'diagnosa.id_pasienna = pasien.id_pasien', 'left');
		$this->db->order_by('id_pasien', 'DESC');
		$this->db->where('status_pasien','0');
		$query = $this->db->get();
		return $query->result();
	}

	function detail_pasien($id_pasien)	{
		$this->db->select('*');
		$this->db->from('pasien','dokter','ruangan');
		$this->db->join('dokter', 'dokter.id_dokter = pasien.id_dokter', 'left');
		$this->db->join('ruangan', 'ruangan.id_ruangan = pasien.id_ruangan', 'left');
		$this->db->where('id_pasien', $id_pasien);
		$this->db->order_by('id_pasien', 'DESC');
		$query = $this->db->get();
		return $query->row();
	}

	function tambah_pasien($data){
		$this->db->insert('pasien', $data);
	}

	public function hapus_pasien($data) {
		$this->db->where('id_pasien', $data['id_pasien']);
		$this->db->delete('pasien', $data);
	}

	public function edit_pasien($data) {
		$this->db->where('id_pasien', $data['id_pasien']);
		$this->db->update('pasien', $data);
	}

	function indexing_pekerjaan(){
		$this->db->select('*');
		$this->db->from('pekerjaan');
		$this->db->order_by('id_pekerjaan', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	function indexing_pendidikan(){
		$this->db->select('*');
		$this->db->from('pendidikan');
		$this->db->order_by('id_pendidikan', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	function indexing_dokter(){
		$this->db->select('*');
		$this->db->from('dokter');
		$this->db->order_by('id_dokter', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	function indexing_ruangan(){
		$this->db->select('*');
		$this->db->from('ruangan');
		$this->db->order_by('id_ruangan', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

	function indexing_kedatangan(){
		$this->db->select('*');
		$this->db->from('kedatangan');
		$this->db->order_by('id_kedatangan', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	function indexing_provinsi(){
		$this->db->select('*');
		$this->db->from('provinsi');
		$this->db->order_by('id_provinsi', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	function indexing_kota(){
		$this->db->select('*');
		$this->db->from('kota');
		$this->db->order_by('id_kota', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	function indexing_kecamatan(){
		$this->db->select('*');
		$this->db->from('kecamatan');
		$this->db->order_by('id_kecamatan', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	function indexing_kelurahan(){
		$this->db->select('*');
		$this->db->from('kelurahan');
		$this->db->order_by('id_kelurahan', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	function get_kota($id){
		$hasil=$this->db->query("SELECT * FROM kota WHERE id_provinsi='$id'");
		return $hasil->result();
	}

	function get_kecamatan($id){
		$hasil=$this->db->query("SELECT * FROM kecamatan WHERE id_kota='$id'");
		return $hasil->result();
	}

	function get_kelurahan($id){
		$hasil=$this->db->query("SELECT * FROM kelurahan WHERE id_kecamatan='$id'");
		return $hasil->result();
	}



	function get_no_registrasi(){
        $q = $this->db->query("SELECT MAX(RIGHT(no_registrasi,4)) AS kd_max FROM pasien WHERE DATE(tanggal_input)=CURDATE()");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('dmy').$kd;
    }
 
    function simpan_registrasi($no_registrasi){
        $hasil=$this->db->query("INSERT INTO pasien (no_registrasi) VALUES ('$no_registrasi')");
        return $hasil;
    }


    public function get_all(){
    		$this->db->select('*');
			$this->db->from('pasien');
			$this->db->where('status_pasien', '0');
			$query = $this->db->get();
			return $query->result();

			// return $this->db->get('pasien')->result();
		}
	public function get_pasien_keyword($keyword){
			$this->db->select('*');
			$this->db->from('pasien');
			$this->db->like('no_registrasi',$keyword);
			$this->db->where('status_pasien','0');
			$this->db->order_by('id_pasien', 'desc');
			return $this->db->get()->result();
		}

	public function viewBy_no_registrasi($no_registrasi){
		$this->db->where('no_registrasi', $no_registrasi);
		$result = $this->db->get('pasien')->row(); 
		return $result; 
	}

	public function keluar_pasien($data)
	{
		$this->db->where('id_pasien', $data['id_pasien']);
		$this->db->update('pasien', $data);
	}

	public function index_pasien_keluar()
	{
		$this->db->select('*');
		$this->db->from('pasien','dokter','ruangan');
		$this->db->join('dokter', 'dokter.id_dokter = pasien.id_dokter', 'left');
		$this->db->join('ruangan', 'ruangan.id_ruangan = pasien.id_ruangan', 'left');
		$this->db->where('status_pasien', '1');
		$this->db->order_by('id_pasien', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function total_pasien()
	{
		$total=$this->db->query("SELECT Count(*) FROM pasien");
		return $total->result();
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

		function diagnosa_pasien($id_pasien)	{
		$this->db->select('*');
		$this->db->from('pasien','diagnosa');
		$this->db->join('diagnosa', 'diagnosa.id_pasienna = pasien.id_pasien', 'left');
		$this->db->where('id_pasien', $id_pasien);
		$query = $this->db->get();
		return $query->result();
	}

	function tampil_diagnosa_pasien()	{
		$this->db->select('*');
		$this->db->from('pasien','diagnosa','ruangan');
		$this->db->join('diagnosa', 'diagnosa.id_pasienna = pasien.id_pasien', 'left');
		$this->db->join('ruangan', 'ruangan.id_ruangan = pasien.id_ruangan', 'left');
		// $this->db->where('id_pasien', 'id_pasienna');
		$query = $this->db->get();
		return $query->result();
	}

	public function viewByNis($nis){
		$this->db->where('kode_diagnosa', $nis);
		$result = $this->db->get('jenis_diagnosa')->row(); // Tampilkan data siswa berdasarkan NIS
		
		return $result; 
	}


	function hitung_jk()
	{
		$this->db->like('jenis_kelamin','1');
		$this->db->from('pasien');
		$this->db->count_all_results();
    }

    function ie()	{
		$this->db->select('*');
		$this->db->like('kloter');
		$this->db->from('pasien');
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file model_admin.php */
/* Location: ./application/models/model_admin.php */