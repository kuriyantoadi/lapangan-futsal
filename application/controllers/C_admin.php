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

	public function admin_pass($id_admin)
	{
		$data['cari_admin'] = $this->M_admin->cari_admin($id_admin);

		$this->load->view('template/header');
		$this->load->view('template/menu-admin');
		$this->load->view('admin/admin_pass', $data);
		$this->load->view('template/footer');
	}

	public function admin_pass_up()
	{
		$id_admin = $this->input->post('id_admin');
		$pass = $this->input->post('password');
		$password = md5($pass);

		$data_edit = array(
			'password' => $password
		);

		$this->M_admin->admin_pass_up($id_admin, $data_edit);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						Data Berhasil Diubah
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>

						');
		redirect ('C_admin/tampil_admin');
	}

	public function data_pelanggan()
	{
		$data['tampil'] = $this->M_admin->data_pelanggan();

		$this->load->view('template/header');
		$this->load->view('template/menu-admin');
		$this->load->view('admin/data_pelanggan', $data);
		$this->load->view('template/footer');
	}

	public function pelanggan_hapus($id_pelanggan)
	{
		$id_pelanggan = array('id_pelanggan' => $id_pelanggan);

		$success = $this->M_admin->pelanggan_hapus($id_pelanggan);
		$this->session->set_flashdata('msg', '
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Data Berhasil Dihapus
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
						');
		redirect ('C_admin/data_pelanggan');

	}

	public function pelanggan_edit($id_pelanggan)
	{
		$data['cari_pelanggan'] = $this->M_admin->cari_pelanggan($id_pelanggan);

		$this->load->view('template/header');
		$this->load->view('template/menu-admin');
		$this->load->view('admin/pelanggan_edit', $data);
		$this->load->view('template/footer');
	}

	public function pelanggan_edit_up()
	{
		$id_pelanggan = $this->input->post('id_pelanggan');
		$username = $this->input->post('username');
		// $pass = $this->input->post('password');
		// $password = md5($pass);
		$nama_lengkap = $this->input->post('nama_lengkap');
		$status = $this->input->post('status');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$nama_club = $this->input->post('nama_club');


		$data_edit = array(
			'username' => $username,
			'nama_lengkap' => $nama_lengkap,
			'status' => $status,
			'no_hp' => $no_hp,
			'email' => $email,
			'alamat' => $alamat,
			'nama_club' => $nama_club
		);

		$this->M_admin->pelanggan_edit_up($id_pelanggan, $data_edit);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						Data Berhasil Diubah
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>

						');
		redirect ('C_admin/data_pelanggan');
	}

	public function pelanggan_detail($id_pelanggan)
	{
		$data['cari_pelanggan'] = $this->M_admin->cari_pelanggan($id_pelanggan);

		$this->load->view('template/header');
		$this->load->view('template/menu-admin');
		$this->load->view('admin/pelanggan_detail', $data);
		$this->load->view('template/footer');
	}

	public function pelanggan_pass($id_pelanggan)
	{
		$data['cari_pelanggan'] = $this->M_admin->cari_pelanggan($id_pelanggan);

		$this->load->view('template/header');
		$this->load->view('template/menu-admin');
		$this->load->view('admin/pelanggan_pass', $data);
		$this->load->view('template/footer');
	}

	public function pelanggan_pass_up()
	{
		$id_pelanggan = $this->input->post('id_pelanggan');
		$pass = $this->input->post('password');
		$password = md5($pass);

		$data_edit = array(
			'password' => $password
		);

		$this->M_admin->pelanggan_pass_up($id_pelanggan, $data_edit);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						Password Berhasil Diubah
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>

						');
		redirect ('C_admin/data_pelanggan');
	}

	public function data_lapangan()
	{
		$data['tampil'] = $this->M_admin->data_lapangan();

		$this->load->view('template/header');
		$this->load->view('template/menu-admin');
		$this->load->view('admin/data_lapangan', $data);
		$this->load->view('template/footer');
	}

	public function lapangan_hapus($id_lapangan)
	{
		$id_lapangan = array('id_lapangan' => $id_lapangan);

		$success = $this->M_admin->lapangan_hapus($id_lapangan);
		$this->session->set_flashdata('msg', '
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Data Berhasil Dihapus
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
						');
		redirect ('C_admin/data_lapangan');

	}

	public function lapangan_tambah()
	{
		$nama_lapangan = $this->input->post('nama_lapangan');
		$harga_sewa = $this->input->post('harga_sewa');
		$kondisi = $this->input->post('kondisi');

		$data_tambah = array(
			'nama_lapangan' => $nama_lapangan,
			'harga_sewa' => $harga_sewa,
			'kondisi' => $kondisi
		);

		$this->M_admin->lapangan_tambah($data_tambah);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-primary alert-dismissible fade show" role="alert">
						Data Berhasil Ditambah
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
						');
		redirect ('C_admin/data_lapangan');
	}

}
