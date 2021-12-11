<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('M_user');
	}


	public function dashboard()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu-user');
		$this->load->view('user/dashboard');
		$this->load->view('template/footer');
	}

	public function daftar()
	{
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$password = md5($pass);
		$nama_lengkap = $this->input->post('nama_lengkap');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$nama_club = $this->input->post('nama_club');

		$data_tambah = array(
			'username' => $username,
			'password' => $password,
			'nama_lengkap' => $nama_lengkap,
			'status' => 'aktif',
			'no_hp' => $no_hp,
			'email' => $email,
			'alamat' => $alamat,
			'nama_club' => $nama_club
		);

		$this->M_user->daftar($data_tambah);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-primary alert-dismissible fade show" role="alert">
						Pendaftaran Berhasil, silahkan lakukan login
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
						');
		redirect ('C_login');
	}

	public function pesan_lapangan()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu-user');
		$this->load->view('user/pesan_lapangan');
		$this->load->view('template/footer');
	}

}
