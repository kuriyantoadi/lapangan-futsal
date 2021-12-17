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

  public function lapangan_edit_up($id_lapangan, $data_edit)
  {
    $this->db->where('id_lapangan', $id_lapangan);
    $this->db->update('tb_lapangan',$data_edit);
  }

  public function tambah_photo($id_lapangan, $data_edit)
  {
    $this->db->where('id_lapangan', $id_lapangan);
    $this->db->update('tb_lapangan',$data_edit);
  }

  public function data_akun_up($id_admin, $data_edit)
  {
    $this->db->where('id_admin', $id_admin);
    $this->db->update('tb_admin',$data_edit);
  }

  public function data_akun_password($id_admin, $data_edit)
  {
    $this->db->where('id_admin', $id_admin);
    $this->db->update('tb_admin',$data_edit);
  }

  function data_ketentuan(){
    $tampil = $this->db->get('tb_ketentuan')->result();
    return $tampil;
  }

  function cari_ketentuan($id_ketentuan){
    $this->db->select('*');
    $this->db->from('tb_ketentuan');
    $this->db->where('tb_ketentuan.id_ketentuan',$id_ketentuan);
    $query = $this->db->get()->result();
    return $query;
  }

  public function ketentuan_tambah($data_tambah)
  {
    $this->db->insert('tb_ketentuan', $data_tambah);
  }

  public function ketentuan_edit_up($id_ketentuan, $data_edit)
  {
    $this->db->where('id_ketentuan', $id_ketentuan);
    $this->db->update('tb_ketentuan',$data_edit);
  }

  public function ketentuan_hapus($id_ketentuan)
  {
    $this->db->where($id_ketentuan);
    $this->db->delete('tb_ketentuan');
  }

  function data_fasilitas(){
    $tampil = $this->db->get('tb_fasilitas')->result();
    return $tampil;
  }

  public function fasilitas_tambah($data_tambah)
  {
    $this->db->insert('tb_fasilitas', $data_tambah);
  }

  function cari_fasilitas($id_fasilitas){
    $this->db->select('*');
    $this->db->from('tb_fasilitas');
    $this->db->where('tb_fasilitas.id_fasilitas',$id_fasilitas);
    $query = $this->db->get()->result();
    return $query;
  }

  public function fasilitas_edit_up($id_fasilitas, $data_edit)
  {
    $this->db->where('id_fasilitas', $id_fasilitas);
    $this->db->update('tb_fasilitas',$data_edit);
  }

  public function fasilitas_hapus($id_fasilitas)
  {
    $this->db->where($id_fasilitas);
    $this->db->delete('tb_fasilitas');
  }

}

 ?>
