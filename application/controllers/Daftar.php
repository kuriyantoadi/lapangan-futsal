<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {


	public function index()
	{
    $this->load->view('template/header');
		$this->load->view('pelanggan/daftar');
    $this->load->view('template/footer');

	}
}
