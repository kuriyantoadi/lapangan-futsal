<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

  public function __construct()
	{
			parent::__construct();
			$this->load->model('M_login');
      // $this->load->model('M_umkm');
	}

//Login User
  public function index()
  {
    $this->load->view('template/header');
    $this->load->view('login_user');
    $this->load->view('template/footer');
    // echo "string";
  }

  public function user()
  {
    $this->load->view('user/index');
  }

  public function user_login()
  {
    // echo "string";
    $username = htmlspecialchars($this->input->post('username', true), ENT_QUOTES);
    $password = htmlspecialchars($this->input->post('password', true), ENT_QUOTES);

    $cek_login = $this->M_login->user_login($username, $password);

    if ($cek_login->num_rows() > 0) {
      $data = $cek_login->row_array();

      if ($data['status']=='user') {
        $this->session->set_userdata('user', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_username', $data['username']);
        redirect('C_user/dashboard');

      }elseif ($data['status']=='pimpinan') {
        $this->session->set_userdata('pimpinan', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_username', $data['username']);

        redirect('C_pimpinan/dashboard');
      }else {
        $url = base_url('C_user');
        echo $this->session->set_flashdata('msg', 'Username atau password salah');
        redirect($url);
      }

    }

    $this->session->set_flashdata('msg', 'Username atau password salah');
    $url = base_url('C_user/index');
    redirect($url);
  }

  public function admin_login()
  {
    // echo "string";
    $username = htmlspecialchars($this->input->post('username', true), ENT_QUOTES);
    $password = htmlspecialchars($this->input->post('password', true), ENT_QUOTES);

    $cek_login = $this->M_login->admin_login($username, $password);

    if ($cek_login->num_rows() > 0) {
      $data = $cek_login->row_array();

      if ($data['status']=='admin') {
        $this->session->set_userdata('admin', true);
        $this->session->set_userdata('ses_id', $data['id_admin']);
        $this->session->set_userdata('ses_username', $data['username']);
        redirect('C_admin/dashboard');
        // echo "string";

      }elseif ($data['status']=='pimpinan') {
        $this->session->set_userdata('pimpinan', true);
        $this->session->set_userdata('ses_id', $data['id_admin']);
        $this->session->set_userdata('ses_username', $data['username']);

        redirect('C_pimpinan/dashboard');
      }else {
        $url = base_url('Admin');
        echo $this->session->set_flashdata('msg', 'Username atau password salah');
        // redirect($url);
        echo "string";
      }

    }

    $this->session->set_flashdata('msg', 'Username atau password salah');
    $url = base_url('C_user/index');
    redirect($url);
  }


  public function logout_umkm()
  {
    $this->session->sess_destroy();
    $url = base_url();
    redirect('C_login/umkm');
  }

  public function logout_masyarakat()
  {
    $this->session->sess_destroy();
    $url = base_url();
    redirect('C_login/masyarakat');
  }

  public function logout_user()
  {
    $this->session->sess_destroy();
    $url = base_url();
    redirect('C_login/user');
  }

}
