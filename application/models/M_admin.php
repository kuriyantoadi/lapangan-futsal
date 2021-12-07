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


}

 ?>
