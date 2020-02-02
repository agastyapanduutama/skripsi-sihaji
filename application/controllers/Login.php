<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username','required',
				array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('password', 'password','required',
				array('required' => '%s Harus Diisi'));

		if ($this->form_validation->run()) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->aunt_login->login($username,$password);
		}

		$this->load->view('login/login');
	}

	function keluar()
	{
		$this->aunt_login->logout();
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */