<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('M_admin');

			// session login
			if ($this->session->userdata('admin') != true) {
				$url = base_url('Admin');
				redirect($url);
			}
	}

	public function index()
	{
		redirect('C_admin/dashboard');
	}

	public function dashboard()
	{
		$this->load->view('template/header-admin');
		$this->load->view('admin/dashboard');
		$this->load->view('template/footer');
	}

	public function tampil_admin()
	{
		$data['tampil'] = $this->M_admin->tampil_admin();

		$this->load->view('template/header-admin');
		$this->load->view('admin/data_admin', $data);
		$this->load->view('template/footer');
	}

	public function admin_edit($id_admin)
	{
		$data['cari_admin'] = $this->M_admin->cari_admin($id_admin);

		$this->load->view('template/header-admin');
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

		echo $username;
		echo $pass;

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


		$this->load->view('template/header-admin');
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


		$this->load->view('template/header-admin');
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


		$this->load->view('template/header-admin');
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


		$this->load->view('template/header-admin');
		$this->load->view('admin/pelanggan_detail', $data);
		$this->load->view('template/footer');
	}

	public function pelanggan_pass($id_pelanggan)
	{
		$data['cari_pelanggan'] = $this->M_admin->cari_pelanggan($id_pelanggan);


		$this->load->view('template/header-admin');
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


		$this->load->view('template/header-admin');
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

	// public function lapangan_tambah()
	// {
	// 	$nama_lapangan = $this->input->post('nama_lapangan');
	// 	$harga_sewa = $this->input->post('harga_sewa');
	// 	$kondisi = $this->input->post('kondisi');
	//
	// 	$data_tambah = array(
	// 		'nama_lapangan' => $nama_lapangan,
	// 		'harga_sewa' => $harga_sewa,
	// 		'kondisi' => $kondisi
	// 	);
	//
	// 	$this->M_admin->lapangan_tambah($data_tambah);
	//
	// 	$this->session->set_flashdata('msg', '
	// 				<div class="alert alert-primary alert-dismissible fade show" role="alert">
	// 					Data Berhasil Ditambah
	// 					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	// 				</div>
	// 					');
	// 	redirect ('C_admin/data_lapangan');
	// }

	public function lapangan_tambah()
	{

			$config['upload_path'] = 'assets/photo_lapangan/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 5000;
			$config['encrypt_name']			= TRUE;
			$id_lapangan = $this->input->post('id_lapangan');

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('photo_file')) {
				$error = array('error' => $this->upload->display_errors());
				echo $error;
				// $this->load->view('upload', $error);
			}else {
				$_data = array('upload_data' => $this->upload->data());
				$nama_lapangan = $this->input->post('nama_lapangan');
				$harga_sewa = $this->input->post('harga_sewa');
				$kondisi = $this->input->post('kondisi');

				$data_tambah = array(
					'photo_file'=> $_data['upload_data']['file_name'],
					'nama_lapangan' => $nama_lapangan,
					'harga_sewa' => $harga_sewa,
					'kondisi' => $kondisi
				);
				$this->M_admin->lapangan_tambah($data_tambah);

				$this->session->set_flashdata('msg', '
							<div class="alert alert-primary alert-dismissible fade show" role="alert">
								Tambah Lapangan Berhasil
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
				');

				redirect('C_admin/data_lapangan/');
			}
		}


	public function lapangan_edit($id_lapangan)
	{
		$data['cari_lapangan'] = $this->M_admin->cari_lapangan($id_lapangan);


		$this->load->view('template/header-admin');
		$this->load->view('admin/lapangan_edit', $data);
		$this->load->view('template/footer');
	}


	public function lapangan_edit_up()
	{
		$id_lapangan = $this->input->post('id_lapangan');

		$data_edit = array(
			'nama_lapangan' => $this->input->post('nama_lapangan'),
			'harga_sewa' => $this->input->post('harga_sewa'),
			'kondisi' => $this->input->post('kondisi')
		);

		$this->M_admin->lapangan_edit_up($id_lapangan, $data_edit);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-info alert-dismissible fade show" role="alert">
						Edit Lapangan Berhasil
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
						');

		redirect('C_admin/lapangan_edit/'.$id_lapangan);

	}

	public function lapangan_hapus_photo($id_lapangan)
	{
		$_id = $this->db->get_where('tb_lapangan',['id_lapangan' => $id_lapangan])->row();

		$data_edit = array(
			'photo_file' => ''
		);

		$this->M_admin->lapangan_hapus_photo($id_lapangan, $data_edit);
		unlink('assets/photo_lapangan/'.$_id->photo_file);
		// redirect('C_admin/lapangan_edit/'.$id_lapangan);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Photo Berhasil <b>Dihapus</b>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
						');

		redirect('C_admin/lapangan_edit/'.$id_lapangan);
	}

	public function lapangan_detail($id_lapangan)
	{
		$data['cari_lapangan'] = $this->M_admin->cari_lapangan($id_lapangan);


		$this->load->view('template/header-admin');
		$this->load->view('admin/lapangan_detail', $data);
		$this->load->view('template/footer');
	}

	public function tambah_photo() //belum selesai
	{
		$config['upload_path'] = 'assets/photo_lapangan/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 5000;
		$config['encrypt_name']			= TRUE;
		$id_lapangan = $this->input->post('id_lapangan');


		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('photo_file')) {
			$error = array('error' => $this->upload->display_errors());
			echo $error;
			// $this->load->view('upload', $error);
		}else {
			$_data = array('upload_data' => $this->upload->data());

			$data_edit = array(
				'photo_file'=> $_data['upload_data']['file_name']
			);
			$this->M_admin->tambah_photo($id_lapangan, $data_edit);

			$this->session->set_flashdata('msg', '
						<div class="alert alert-primary alert-dismissible fade show" role="alert">
						 	Photo Berhasil <b>Diupload</b>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
							');

			redirect('C_admin/lapangan_edit/'.$id_lapangan);
		}
	}

	public function data_akun($ses_id)
	{
		$data['cari_admin'] = $this->M_admin->cari_admin($ses_id);

		$this->load->view('template/header-admin');
		$this->load->view('admin/data_akun', $data);
		$this->load->view('template/footer');
	}

	public function data_akun_up()
	{
		$id_admin = $this->input->post('id_admin');
		$username = $this->input->post('username');
		$status = $this->input->post('status');

		$data_edit = array(
			'username' => $username,
			'status' => $status
		);

		$this->M_admin->data_akun_up($id_admin, $data_edit);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-primary alert-dismissible fade show" role="alert">
					Data berhasil diupdate
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
						');
		redirect ('C_admin');
	}

	public function data_akun_password()
	{
		$id_admin = $this->input->post('id_admin');
		$pass = $this->input->post('password');
		$password = md5($pass);

		$data_edit = array(
			'password' => $password
		);

		$this->M_admin->data_akun_password($id_admin, $data_edit);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-primary alert-dismissible fade show" role="alert">
					Data berhasil diupdate
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
						');
		redirect ('C_admin');
	}

	public function ketentuan()
	{
		$data['data_ketentuan'] = $this->M_admin->data_ketentuan();

		$this->load->view('template/header-admin');
		$this->load->view('admin/ketentuan', $data);
		$this->load->view('template/footer');
	}

	public function kententuan_tambah()
	{
		$isi_ketentuan = $this->input->post('isi_ketentuan');

		$data_tambah = array(
			'isi_ketentuan' => $isi_ketentuan
		);

		$this->M_admin->ketentuan_tambah($data_tambah);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-primary alert-dismissible fade show" role="alert">
					Data berhasil ditambah
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
						');
		redirect ('C_admin/ketentuan');
	}

	public function ketentuan_edit($id_ketentuan)
	{
		$data['cari_ketentuan'] = $this->M_admin->cari_ketentuan($id_ketentuan);

		$this->load->view('template/header-admin');
		$this->load->view('admin/ketentuan_edit', $data);
		$this->load->view('template/footer');
	}

	public function ketentuan_edit_up()
	{
		$id_ketentuan = $this->input->post('id_ketentuan');
		$isi_ketentuan = $this->input->post('isi_ketentuan');

		$data_edit = array(
			'isi_ketentuan' => $isi_ketentuan
		);

		$this->M_admin->ketentuan_edit_up($id_ketentuan, $data_edit);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-primary alert-dismissible fade show" role="alert">
					Data berhasil diupdate
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
						');
		redirect ('C_admin/ketentuan');
	}

	public function ketentuan_hapus($id_ketentuan)
	{
		$id_ketentuan = array('id_ketentuan' => $id_ketentuan);

		$success = $this->M_admin->ketentuan_hapus($id_ketentuan);
		$this->session->set_flashdata('msg', '
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Data Berhasil Dihapus
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
						');
		redirect ('C_admin/ketentuan');

	}

	public function fasilitas()
	{
		$data['data_fasilitas'] = $this->M_admin->data_fasilitas();

		$this->load->view('template/header-admin');
		$this->load->view('admin/fasilitas', $data);
		$this->load->view('template/footer');
	}

	public function fasilitas_tambah()
	{
		$isi_fasilitas = $this->input->post('isi_fasilitas');

		$data_tambah = array(
			'isi_fasilitas' => $isi_fasilitas
		);

		$this->M_admin->fasilitas_tambah($data_tambah);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-primary alert-dismissible fade show" role="alert">
					Data berhasil ditambah
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
						');
		redirect ('C_admin/fasilitas');
	}

	public function fasilitas_edit($id_fasilitas)
	{
		$data['cari_fasilitas'] = $this->M_admin->cari_fasilitas($id_fasilitas);

		$this->load->view('template/header-admin');
		$this->load->view('admin/fasilitas_edit', $data);
		$this->load->view('template/footer');
	}

	public function fasilitas_edit_up()
	{
		$id_fasilitas = $this->input->post('id_fasilitas');
		$isi_fasilitas = $this->input->post('isi_fasilitas');

		$data_edit = array(
			'isi_fasilitas' => $isi_fasilitas
		);

		$this->M_admin->fasilitas_edit_up($id_fasilitas, $data_edit);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-primary alert-dismissible fade show" role="alert">
					Data berhasil diupdate
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
						');
		redirect ('C_admin/fasilitas');
	}

	public function fasilitas_hapus($id_fasilitas)
	{
		$id_fasilitas = array('id_fasilitas' => $id_fasilitas);

		$success = $this->M_admin->fasilitas_hapus($id_fasilitas);
		$this->session->set_flashdata('msg', '
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Data Berhasil Dihapus
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
						');
		redirect ('C_admin/fasilitas');
	}

	public function data_pesan_lapangan()
	{
		$data['tampil'] = $this->M_admin->data_pesan_lapangan();

		$this->load->view('template/header-admin');
		$this->load->view('admin/data_pesan_lapangan', $data);
		$this->load->view('template/footer');
	}

	public function pesan_lapangan_hapus($id_sewa)
	{
		$id_sewa = array('id_sewa' => $id_sewa);

		$success = $this->M_admin->pesan_lapangan_hapus($id_sewa);
		$this->session->set_flashdata('msg', '
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Data Berhasil Dihapus
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
						');
		redirect ('C_admin/data_pesan_lapangan');
	}

	public function pesan_lapangan_edit($id_sewa)
	{
		$data['cari_sewa'] = $this->M_admin->cari_sewa($id_sewa);

		$this->load->view('template/header-admin');
		$this->load->view('admin/data_pesan_edit', $data);
		$this->load->view('template/footer');
	}

	public function pesan_lapangan_edit_up()
	{
		$id_sewa = $this->input->post('id_sewa');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$no_hp = $this->input->post('no_hp');
		$nama_club = $this->input->post('nama_club');
		$jam_main = $this->input->post('jam_main');
		$tgl_main = $this->input->post('tgl_main');
		$lama_main = $this->input->post('lama_main');
		$nama_lapangan = $this->input->post('nama_lapangan');
		$bukti_pembayaran = $this->input->post('bukti_pembayaran');
		$status_pembayaran = $this->input->post('status_pembayaran');
		$nominal_pembayaran = $this->input->post('nomiminal_pembyaran');

		// date_default_timezone_set('Asia/Jakarta');
		// $tgl_pesan = date('d-m-Y H:i:s');

		$data_edit = array(
			// 'id_pelanggan' => $id_pelanggan,
			'nama_lengkap' => $nama_lengkap,
			'no_hp' => $no_hp,
			'nama_club' => $nama_club,
			// 'tgl_pesan' => $tgl_pesan,
			'jam_main' => $jam_main,
			'tgl_main' => $tgl_main,
			'lama_main' => $lama_main,
			'nama_lapangan' => $nama_lapangan,
			'status_pembayaran' => $status_pembayaran,
			'nominal_pembayaran' => $nominal_pembayaran
		);

		$this->M_admin->pesan_lapangan_edit_up($id_sewa, $data_edit);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-primary alert-dismissible fade show" role="alert">
					Edit Data Berhasil
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
						');

		redirect ('C_admin/data_pesan_lapangan');
	}

	public function pesan_lapangan_lihat($id_sewa)
	{
		$data['cari_sewa'] = $this->M_admin->cari_sewa($id_sewa);

		$this->load->view('template/header-admin');
		$this->load->view('admin/data_pesan_lihat', $data);
		$this->load->view('template/footer');
	}

	public function data_pesan_lapangan_tolak($id_sewa)
	{

		$data_edit = array(
			'status_sewa' => 'Ditolak'
		);

		$this->M_admin->pesan_lapangan_edit_up($id_sewa, $data_edit);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						Pesan Lapangan Ditolak
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>

						');
		redirect ('C_admin/data_pesan_lapangan');
	}

	public function data_pesan_lapangan_diterima($id_sewa)
	{

		$data_edit = array(
			'status_sewa' => 'Diterima'
		);

		$this->M_admin->pesan_lapangan_edit_up($id_sewa, $data_edit);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						Pesan Lapangan Diterima
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>

						');
		redirect ('C_admin/data_pesan_lapangan');
	}

	public function data_pesan_lapangan_selesai($id_sewa)
	{

		$data_edit = array(
			'status_sewa' => 'Selesai'
		);

		$this->M_admin->pesan_lapangan_edit_up($id_sewa, $data_edit);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						Pesan Lapangan Selesai
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>

						');
		redirect ('C_admin/data_pesan_lapangan');
	}

	public function pesan_lapangan_catatan()
	{
		$id_sewa = $this->input->post('id_sewa');
		$catatan = $this->input->post('catatan');

		$data_edit = array(
			'catatan' => $catatan
		);

		$this->M_admin->pesan_lapangan_edit_up($id_sewa, $data_edit);

		$this->session->set_flashdata('msg', '
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						Catatan untuk pelanggan terkirim
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>

						');
		redirect ('C_admin/pesan_lapangan_lihat/'.$id_sewa);

		}

}
