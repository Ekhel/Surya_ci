<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_master extends CI_Model {
  function klasifikasi()
  {
    $query = $this->db->query("SELECT * FROM tb_klasifikasi");

    return $query->result();
  }
  function create_klasifikasi($data)
  {
    $this->db->insert('tb_klasifikasi',$data);
  }
  function update_klasifikasi($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
}
