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

		$this->M_pelanggan->daftar($data_tambah);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-primary alert-dismissible fade show" role="alert">
						Pendaftaran Berhasil, silahkan lakukan login
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
						');
		redirect ('C_login');
	}

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

	public function pesan_lapangan()
	{
		$ses_id = $this->session->userdata('ses_id');
		$data['cari_pelanggan'] = $this->M_pelanggan->cari_pelanggan($ses_id);
		$data['data_lapangan'] = $this->M_pelanggan->data_lapangan();
		$data['data_lama_sewa'] = $this->M_pelanggan->data_lama_sewa();


		$this->load->view('template/header-pelanggan');
		$this->load->view('pelanggan/pesan_lapangan', $data);
		$this->load->view('template/footer');
	}

	public function pesan_lapangan_up()
	{
		$config['upload_path'] = 'assets/bukti_pembayaran/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 5000;
		$config['encrypt_name']			= TRUE;
		// $id_lapangan = $this->input->post('id_lapangan');


		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('bukti_pembayaran')) {
			$error = array('error' => $this->upload->display_errors());
			echo var_dump($error);
			// $this->load->view('upload', $error);
		}else {
			$_data = array('upload_data' => $this->upload->data());
			$id_pelanggan = $this->session->userdata('ses_id');

			$nama_lengkap = $this->input->post('nama_lengkap');
			$no_hp = $this->input->post('no_hp');
			$nama_club = $this->input->post('nama_club');
			$jam_main = $this->input->post('jam_main');
			$tgl_main = $this->input->post('tgl_main');
			$lama_main = $this->input->post('lama_main');
			$nama_lapangan = $this->input->post('nama_lapangan');
			$bukti_pembayaran = $this->input->post('bukti_pembayaran');
			$harga_sewa = $this->input->post('harga_sewa');
			$nominal_pembayaran = $this->input->post('nominal_pembayaran');

			date_default_timezone_set('Asia/Jakarta');
			$tgl_pesan = date('d-m-Y H:i:s');

			$harga_sewa = preg_replace("/[^0-9]/","",$harga_sewa);
			$status_pembayaran = $nominal_pembayaran - $harga_sewa;

			echo $status_pembayaran;

			$data_tambah = array(
				'bukti_pembayaran'=> $_data['upload_data']['file_name'],
				'id_pelanggan' => $id_pelanggan,
				'nama_lengkap' => $nama_lengkap,
				'no_hp' => $no_hp,
				'nama_club' => $nama_club,
				'tgl_pesan' => $tgl_pesan,
				'jam_main' => $jam_main,
				'tgl_main' => $tgl_main,
				'lama_main' => $lama_main,
				'nama_lapangan' => $nama_lapangan,
				'harga_sewa' => $harga_sewa,
				'nominal_pembayaran' => $nominal_pembayaran,
				'status_pembayaran' => $status_pembayaran,
				'status_sewa' => 'Menunggu'
			);

			$this->M_pelanggan->pesan_lapangan_up($data_tambah);

			$this->session->set_flashdata('msg', '
						<div class="alert alert-primary alert-dismissible fade show" role="alert">
							Pemesanan lapangan menunggu konfirmasi
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
							');

			redirect('C_pelanggan/riwayat_pesan_lapangan/');
		}
	}

	public function riwayat_pesan_lapangan()
	{
		$id_pelanggan = $this->session->userdata('ses_id');
		$data['tampil'] = $this->M_pelanggan->riwayat_pesan_lapangan($id_pelanggan);

		$this->load->view('template/header-pelanggan');
		$this->load->view('pelanggan/riwayat_pesan_lapangan', $data);
		$this->load->view('template/footer');
	}

	public function riwayat_lihat($id_sewa)
	{
		// $id_pelanggan = $this->session->userdata('ses_id');
		$data['tampil'] = $this->M_pelanggan->riwayat_lihat($id_sewa);

		$this->load->view('template/header-pelanggan');
		$this->load->view('pelanggan/riwayat_lihat', $data);
		$this->load->view('template/footer');
	}

	public function ketentuan()
	{
		$data['cari_ketentuan'] = $this->M_pelanggan->cari_ketentuan();

		$this->load->view('template/header-pelanggan');
		$this->load->view('pelanggan/ketentuan', $data);
		$this->load->view('template/footer');
	}

	public function fasilitas()
	{
		$data['cari_fasilitas'] = $this->M_pelanggan->cari_fasilitas();

		$this->load->view('template/header-pelanggan');
		$this->load->view('pelanggan/fasilitas', $data);
		$this->load->view('template/footer');
	}

}
