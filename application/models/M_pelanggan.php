<?php

class M_pelanggan extends CI_Model{

  //tampil pelanggan
  public function daftar($data_tambah)
  {
    $this->db->insert('tb_pelanggan', $data_tambah);
  }

  public function cari_pelanggan($id_pelanggan){
    $this->db->select('*');
    $this->db->from('tb_pelanggan');
    $this->db->where('tb_pelanggan.id_pelanggan',$id_pelanggan);
    $query = $this->db->get()->result();
    return $query;
  }

  public function pelanggan_edit_up($id_pelanggan, $data_edit)
  {
    $this->db->where('id_pelanggan', $id_pelanggan);
    $this->db->update('tb_pelanggan', $data_edit);
  }

  function data_lapangan(){
    $tampil = $this->db->get('tb_lapangan')->result();
    return $tampil;
  }

  public function pesan_lapangan_up($data_tambah)
  {
    $this->db->insert('tb_sewa_lapangan', $data_tambah);
  }

  public function riwayat_pesan_lapangan($id_pelanggan){
    $this->db->select('*');
    $this->db->from('tb_sewa_lapangan');
    $this->db->where('tb_sewa_lapangan.id_pelanggan',$id_pelanggan);
    $query = $this->db->get()->result();
    return $query;
  }

}

 ?>
