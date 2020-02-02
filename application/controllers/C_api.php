<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_api extends CI_Controller {
  function __construct()
  {
    parent::__construct();
   
    $this->load->model('M_api');
    error_reporting(0);
  }
 
  function list_diagnosa($id_pasienna)
  {

    $t = "diagnosa"; //table
    $f = [null, 'kode_diagnosa']; //fillable
    $s = ['kode_diagnosa']; //searchable

    $list = $this->M_api->tampildata($id_pasienna ,$t, $f, $s);
    $data = array();
    $no=1;


    foreach ($list as $field) {
      $row = array();
      $row[] = $no++;
      $row[] = $field->kode_diagnosa;
      // $row[] = $field->id_pasienna;
      $row[] = $field->deskripsi;
      // $row[] = $field->status;
      $row[] = $field->kasus;
      $row[] = $field->tanggal_diagnosa;
      $row[] = $field->creator;
      $row[] = $field->editor;
      // $row[] = $field->creator;
      $id = $field->id;
      $button = "<button type='button' class='btn btn-warning btn-xs' id='edit' data-id='$id'> <i class='fas fa-pencil-alt'></i> Edit</button>
      <button type='button' class='btn btn-danger btn-xs' id='hapus' data-id='$id'> <i class='fas fa-trash-alt'></i> Hapus</button>";
      $row[] = $button;
      $data[] = $row;
    }
    $result = array(
      'draw' => $_POST['draw'],
      'recordsTotal' => $this->M_api->countAll($t),
      'recordsFiltered' => $this->M_api->countFiltered($t, $f, $s),
      'data' => $data
    );
    echo json_encode($result);
  }

  function list_diagnosa1()
  {
    $t = "diagnosa"; //table
    $f = [null, 'kode_diagnosa']; //fillable
    $s = ['kode_diagnosa']; //searchable
   
    $list = $this->M_api->resultDataTables($t, $f, $s,);
    $data = array();
    $no=1;
    foreach ($list as $field) {
      $row = array();
      $row[] = $no++;
      $row[] = $field->kode_diagnosa;
      $row[] = $field->id_pasienna;
      $row[] = $field->deskripsi;
      $row[] = $field->kasus;
      $row[] = $field->tanggal_diagnosa;
      $row[] = $field->creator;
      $row[] = $field->editor;
      $row[] = $field->editor;
      // $row[] = $field->creator;
      $id = $field->id;
      $button = "<button type='button' class='btn btn-warning btn-xs' id='edit' data-id='$id'> <i class='fas fa-pencil-alt'></i> Edit</button>
      <button type='button' class='btn btn-danger btn-xs' id='hapus' data-id='$id'> <i class='fas fa-trash-alt'></i> Hapus</button>";
      $row[] = $button;
      $data[] = $row;
    }
    $result = array(
      'draw' => $_POST['draw'],
      'recordsTotal' => $this->M_api->countAll($t),
      'recordsFiltered' => $this->M_api->countFiltered($t, $f, $s),
      'data' => $data
    );
    echo json_encode($result);
  }
 
  public function get_row($table, $id)
  {
      $this->db->where('id', $id);
      $this->db->from($table);
      $data = $this->db->get()->row();
      echo json_encode($data);
    
  }
}