<?php

class M_admin extends CI_Model{

  //tampil admin
  function tampil_admin(){
    $tampil = $this->db->get('tb_admin')->result();
    return $tampil;
  }

  //cari data edit
  function cari_admin($id_admin){
    $this->db->select('*');
    $this->db->from('tb_admin');
    $this->db->where('tb_admin.id_admin',$id_admin);
    $query = $this->db->get()->result();
    return $query;
  }

  public function admin_edit_up($id_admin, $data_edit)
  {
    $this->db->where('id_admin', $id_admin);
    $this->db->update('tb_admin', $data_edit);
  }

  public function admin_hapus($id_admin)
  {
    $this->db->where($id_admin);
    $this->db->delete('tb_admin');
  }

  public function admin_tambah($admin_tambah)
  {
    $this->db->insert('tb_admin', $admin_tambah);
  }

  public function admin_pass_up($id_admin, $data_edit)
  {
    $this->db->where('id_admin', $id_admin);
    $this->db->update('tb_admin', $data_edit);
  }

  function data_pelanggan(){
    $tampil = $this->db->get('tb_pelanggan')->result();
    return $tampil;
  }

  public function pelanggan_hapus($id_pelanggan)
  {
    $this->db->where($id_pelanggan);
    $this->db->delete('tb_pelanggan');
  }

  public function pelanggan_edit_up($id_pelanggan, $data_edit)
  {
    $this->db->where('id_pelanggan', $id_pelanggan);
    $this->db->update('tb_pelanggan', $data_edit);
  }

  function cari_pelanggan($id_pelanggan){
    $this->db->select('*');
    $this->db->from('tb_pelanggan');
    $this->db->where('tb_pelanggan.id_pelanggan',$id_pelanggan);
    $query = $this->db->get()->result();
    return $query;
  }

  public function pelanggan_pass_up($id_pelanggan, $data_edit)
  {
    $this->db->where('id_pelanggan', $id_pelanggan);
    $this->db->update('tb_pelanggan', $data_edit);
  }

  function data_lapangan(){
    $tampil = $this->db->get('tb_lapangan')->result();
    return $tampil;
  }

  // public function lapangan_hapus_photo($id_lapangan)
  // {
  //   $this->db->where($id_lapangan);
  //   $this->db->delete('tb_lapangan');
  // }

  public function lapangan_hapus($id_lapangan)
  {
    $this->db->where($id_lapangan);
    $this->db->delete('tb_lapangan');
  }

  public function lapangan_tambah($data_tambah)
  {
    $this->db->insert('tb_lapangan', $data_tambah);
  }

  function cari_lapangan($id_lapangan){
    $this->db->select('*');
    $this->db->from('tb_lapangan');
    $this->db->where('tb_lapangan.id_lapangan',$id_lapangan);
    $query = $this->db->get()->result();
    return $query;
  }

  public function lapangan_hapus_photo($id_lapangan, $data_edit)
  {
    $this->db->where('id_lapangan', $id_lapangan);
    $this->db->update('tb_lapangan', $data_edit);
  }

}

 ?>
