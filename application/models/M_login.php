<?php

class M_login extends CI_Model{

  //tampil buku
  function user_login($username, $password){
    $login = $this->db->query("SELECT * from tb_pelanggan where username='$username' AND password=md5('$password') ");
    return $login;
  }

  function admin_login($username, $password){
    $login = $this->db->query("SELECT * from tb_admin where username='$username' AND password=md5('$password') ");
    return $login;
  }

}

 ?>
