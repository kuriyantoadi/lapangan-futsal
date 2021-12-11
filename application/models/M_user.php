<?php

class M_user extends CI_Model{

  //tampil admin
  public function daftar($data_tambah)
  {
    $this->db->insert('tb_pelanggan', $data_tambah);
  }

}

 ?>
