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


}

 ?>
