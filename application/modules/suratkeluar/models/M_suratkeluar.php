<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_suratkeluar extends CI_Model {
  function suratkeluar()
  {
    $query = $this->db->query("SELECT * FROM tb_suratkeluar");
    return $query->result();
  }
  function create_suratkeluar($data)
  {
    $this->db->insert('tb_suratkeluar',$data);
  }
  function kode()
  {
    $this->db->select('RIGHT(tb_suratkeluar.kode,2) as kode', FALSE);
    $this->db->order_by('kode','DESC');
    $this->db->limit(1);
    $query = $this->db->get('tb_suratkeluar');
    if($query->num_rows() <> 0){
       $data = $query->row();
       $kode = intval($data->kode) + 1;
    }
    else{
       $kode = 1;
    }
      $tgl=date('dmY');
      $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
      $kodetampil = "BSK"."5".$tgl.$batas;
      return $kodetampil;
  }
}
