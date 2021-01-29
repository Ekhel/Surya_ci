<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_disposisi extends CI_Model {
  function disposisi($id_suratmasuk)
  {
    $query = $this->db->query("SELECT 
    id_disposisi,
    tb_disposisi.id_suratmasuk as id_suratmasuk,
    tb_jabatan.jabatan as jabatan,
    tb_suratmasuk.perihal as perihal,
    arahan,
    keterangan
    FROM tb_disposisi
    LEFT JOIN tb_suratmasuk ON tb_disposisi.id_suratmasuk = tb_suratmasuk.id_suratmasuk
    LEFT JOIN tb_jabatan ON tb_disposisi.id_jabatan = tb_jabatan.id_jabatan 
    WHERE tb_disposisi.id_suratmasuk = '$id_suratmasuk' ");

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

  function jabatan(){
    $query = $this->db->query("SELECT * FROM tb_jabatan");
    return $query->result();
  }

  function delete_disposisi($where = 0)
  {
    $this->db->delete('tb_disposisi', array('id_disposisi' => $where));
  }

  function print_disposisi($id_disposisi)
  {
    $query = $this->db->query("SELECT 
    id_disposisi,
    keterangan,
    arahan,
    tb_suratmasuk.no_agenda as no_agenda,
    tb_suratmasuk.perihal as perihal,
    tb_suratmasuk.lampiran as lampiran,
    tb_jabatan.jabatan as jabatan,
    tb_suratmasuk.sifat as sifat,
    tb_suratmasuk.tgl_surat as tgl_surat,
    tb_suratmasuk.tgl_diterima as tgl_diterima
    FROM tb_disposisi
    LEFT JOIN tb_suratmasuk ON tb_disposisi.id_suratmasuk = tb_suratmasuk.id_suratmasuk
    LEFT JOIN tb_jabatan ON tb_disposisi.id_jabatan = tb_jabatan.id_jabatan
    WHERE id_disposisi = '$id_disposisi' ");

    return $query->result();
  }

}
