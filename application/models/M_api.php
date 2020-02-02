<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_api extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    // define
    // $this->table = 't_kandidat';
    // $this->fillable = [null, 'id', 'nama', 'foto', 'stat'];
    // $this->searchable = ['nama', 'foto', 'stat'];
    $this->orderable = array('id', 'desc');
  }

  public function resultQueryDataTables($t, $f, $s)
  {
    $this->db->from($t);
    // searchable
    $i = 0;
    foreach ($s as $key) {
      if ($_POST['search']['value']) {
        if ($i == 0) {
          $this->db->group_start();
          $this->db->like($key, $_POST['search']['value']);
        }
        else {
          $this->db->or_like($key, $_POST['search']['value']);
        }
        if ($i == count($s) - 1) {
          $this->db->group_end();
        }
      }
      $i++;
    }

    // orderable
    if (isset($_POST['order'])) {
      $this->db->order_by($f[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
    }
    else {
      $this->db->order_by(key($this->orderable), $this->orderable[key($this->orderable)]);
      $this->db->order_by('id','desc');
    }

  }

  public function resultDataTables($t, $f, $s)
  {
    $this->resultQueryDataTables($t, $f, $s);
    if ($_POST['length'] != -1) {
      $this->db->limit($_POST['length'], $_POST['start']);
    }
    // $this->db->where('id_pasienna', '21');
    $query = $this->db->get();
    return $query->result();
  }

  public function tampildata($id_pasienna)
  {
    $this->db->select('*');
    $this->db->from('diagnosa');
    if ($_POST['length'] != -1) {
      $this->db->limit($_POST['length'], $_POST['start']);
    }
    $this->db->where('id_pasienna',$id_pasienna);
    $query = $this->db->get();
    return $query->result();

  }

  public function countFiltered($t, $f, $s)
  {
    $this->resultQueryDataTables($t, $f, $s);
    $query = $this->db->get();
    return $query->num_rows();
  }

  public function countAll($t)
  {
    $this->db->from($t);
    return $this->db->count_all_results();
  }

}
