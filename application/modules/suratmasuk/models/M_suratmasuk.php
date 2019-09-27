<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_suratmasuk extends CI_Model {
  function suratmasuk()
  {
    $query = $this->db->query("SELECT * FROM tb_suratmasuk");
    return $query->result();
  }
  function create_suratmasuk($data)
  {
    $this->db->insert('tb_suratmasuk',$data);
  }
  function update_suratmasuk($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function kode()
  {
    $this->db->select('RIGHT(tb_suratmasuk.kode,2) as kode', FALSE);
    $this->db->order_by('kode','DESC');
    $this->db->limit(1);
    $query = $this->db->get('tb_suratmasuk');
    if($query->num_rows() <> 0){
       $data = $query->row();
       $kode = intval($data->kode) + 1;
    }
    else{
       $kode = 1;
    }
      $tgl=date('dmY');
      $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
      $kodetampil = "BSM"."5".$tgl.$batas;
      return $kodetampil;
  }
  function delete_suratmasuk($where = 0)
  {
    $this->db->delete('tb_suratmasuk', array('id_suratmasuk' => $where));
  }
}
