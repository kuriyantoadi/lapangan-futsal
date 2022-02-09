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
    $this->db->order_by('nama_lapangan','ASC');
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

  public function riwayat_lihat($id_sewa)
  {
    $this->db->select('*');
    $this->db->from('tb_sewa_lapangan');
    $this->db->where('tb_sewa_lapangan.id_sewa',$id_sewa);
    $query = $this->db->get()->result();
    return $query;
  }

  public function cari_ketentuan()
  {
    $tampil = $this->db->get('tb_ketentuan')->result();
    return $tampil;
  }

  public function cari_fasilitas()
  {
    $tampil = $this->db->get('tb_fasilitas')->result();
    return $tampil;
  }

  function data_lama_sewa(){
    $this->db->order_by('lama_sewa','DASC');
    $tampil = $this->db->get('tb_lama_sewa')->result();
    return $tampil;
  }

  function pesanan_berlangsung(){
    $tampil = $this->db->get('tb_sewa_lapangan')->result();
    return $tampil;
  }

}

 ?>
