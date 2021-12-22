<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pelanggan extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('M_pelanggan');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$url = base_url();
		redirect('');
	}

	public function dashboard()
	{

		$this->load->view('template/header-pelanggan');
		$this->load->view('pelanggan/dashboard');
		$this->load->view('template/footer');
	}

	public function daftar()
	{
		$pelangganname = $this->input->post('pelangganname');
		$pass = $this->input->post('password');
		$password = md5($pass);
		$nama_lengkap = $this->input->post('nama_lengkap');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$nama_club = $this->input->post('nama_club');

		$data_tambah = array(
			'pelangganname' => $pelangganname,
			'password' => $password,
			'nama_lengkap' => $nama_lengkap,
			'status' => 'aktif',
			'no_hp' => $no_hp,
			'email' => $email,
			'alamat' => $alamat,
			'nama_club' => $nama_club
		);

		$this->M_pelanggan->daftar($data_tambah);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-primary alert-dismissible fade show" role="alert">
						Pendaftaran Berhasil, silahkan lakukan login
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
						');
		redirect ('C_login');
	}

	// public function pesan_lapangan()
	// {
	//
	// 	$this->load->view('template/header-pelanggan');
	// 	$this->load->view('pelanggan/pesan_lapangan');
	// 	$this->load->view('template/footer');
	// }

	public function data_akun($ses_id)
	{
		$data['cari_pelanggan'] = $this->M_pelanggan->cari_pelanggan($ses_id);

		$this->load->view('template/header-pelanggan');
		$this->load->view('pelanggan/data_akun', $data);
		$this->load->view('template/footer');
	}

	public function data_akun_up()
	{
		$id_pelanggan = $this->input->post('id_pelanggan');
		$username = $this->input->post('username');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');
		$nama_club = $this->input->post('nama_club');

		$data_edit = array(
			'username' => $username,
			'nama_lengkap' => $nama_lengkap,
			'no_hp' => $no_hp,
			'alamat' => $alamat,
			'email' => $email,
			'nama_club' => $nama_club
		);

		$this->M_pelanggan->pelanggan_edit_up($id_pelanggan, $data_edit);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						Data Berhasil Diubah
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>

						');
		redirect ('C_pelanggan/data_akun/'.$id_pelanggan);
	}

	public function data_akun_password()
	{
		$id_pelanggan = $this->input->post('id_pelanggan');
		$pass = $this->input->post('password');
		$password = md5($pass);

		$data_edit = array(
			'password' => $password,
		);

		$this->M_pelanggan->pelanggan_edit_up($id_pelanggan, $data_edit);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						Data Berhasil Diubah
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>

						');
		redirect ('C_pelanggan/data_akun/'.$id_pelanggan);
	}

	public function pesan_lapangan($ses_id)
	{
		$data['cari_pelanggan'] = $this->M_pelanggan->cari_pelanggan($ses_id);

		$this->load->view('template/header-pelanggan');
		$this->load->view('pelanggan/pesan_lapangan', $data);
		$this->load->view('template/footer');
	}

}
