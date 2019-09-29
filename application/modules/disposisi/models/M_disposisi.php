<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_disposisi extends CI_Model {
  function disposisi($id_suratmasuk)
  {
    $query = $this->db->query("SELECT * FROM tb_disposisi WHERE id_suratmasuk = '$id_suratmasuk' ");

    return $query->result();
  }
  function create_disposisi($data)
  {
    $this->db->insert('tb_disposisi',$data);
  }
  function update_disposisi($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function delete_disposisi($where = 0)
  {
    $this->db->delete('tb_disposisi', array('id_disposisi' => $where));
  }
  function print_disposisi($id_disposisi)
  {
    $query = $this->db->query("SELECT * FROM tb_disposisi
    LEFT JOIN tb_suratmasuk ON tb_disposisi.id_suratmasuk = tb_suratmasuk.id_suratmasuk
    WHERE id_disposisi = '$id_disposisi' ");

    return $query->result();
  }
}
