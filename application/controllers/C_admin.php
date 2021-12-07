<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('M_admin');
	}

	public function index()
	{
		redirect('C_admin/dashboard');
	}

	public function dashboard()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu-admin');
		$this->load->view('admin/dashboard');
		$this->load->view('template/footer');
	}

	public function tampil_admin()
	{
		$data['tampil'] = $this->M_admin->tampil_admin();

		$this->load->view('template/header');
		$this->load->view('template/menu-admin');
		$this->load->view('admin/data_admin', $data);
		$this->load->view('template/footer');
	}

	public function admin_edit($id_admin)
	{
		$data['cari_admin'] = $this->M_admin->cari_admin($id_admin);

		$this->load->view('template/header');
		$this->load->view('template/menu-admin');
		$this->load->view('admin/admin_edit', $data);
		$this->load->view('template/footer');
	}

	public function admin_edit_up()
	{
		$id_admin = $this->input->post('id_admin');
		$username = $this->input->post('username');
		$status = $this->input->post('status');

		$data_edit = array(
			'username' => $username,
			'status' => $status
		);

		$this->M_admin->admin_edit_up($id_admin, $data_edit);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						Data Berhasil Diubah
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>

						');
		redirect ('C_admin/tampil_admin');
	}

	public function admin_hapus($id_admin)
	{
		$id_admin = array('id_admin' => $id_admin);

		$success = $this->M_admin->admin_hapus($id_admin);
		$this->session->set_flashdata('msg', '
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Data Berhasil Dihapus
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
						');
		redirect ('C_admin/tampil_admin');

	}


	public function admin_tambah()
	{
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$status = $this->input->post('status');
		$password = md5($pass);

		$data_tambah = array(
			'username' => $username,
			'password' => $password,
			'status' => $status
		);

		$this->M_admin->admin_tambah($data_tambah);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-primary alert-dismissible fade show" role="alert">
						Data Berhasil Ditambah
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
						');
		redirect ('C_admin/tampil_admin');
	}


}
