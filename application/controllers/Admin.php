<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('login_admin');
		$this->load->view('template/footer');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$url = base_url();
		redirect('Admin');
	}

}
