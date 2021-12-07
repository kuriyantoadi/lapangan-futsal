<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {


	public function dashboard()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu-user');
		$this->load->view('user/dashboard');
		$this->load->view('template/footer');
	}

	public function pesan_lapangan()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu-user');
		$this->load->view('user/pesan_lapangan');
		$this->load->view('template/footer');
	}

}
