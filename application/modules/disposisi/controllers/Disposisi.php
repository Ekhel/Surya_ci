<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class disposisi extends MX_Controller {
  public function __construct()
	{
		parent::__construct();
		$this->load->library(array('upload','session'));
    $this->load->model('M_disposisi');
		Modules::run('auth/cek_login');
	}
  public function dispo_suratmasuk($id_suratmasuk)
  {
    $data['title'] = 'Disposisi Surat Masuk';
    $data['disposisi'] = $this->M_disposisi->disposisi($id_suratmasuk);
    $data['jabatan'] = $this->M_disposisi->jabatan();
    $data['suratmasuk'] = $this->db->get_where('tb_suratmasuk', ['id_suratmasuk' => $id_suratmasuk])->row_array();
    $this->template->load('MasterLayout','r-disposisi',$data);
  }
  public function create_disposisi_proses()
  {
    $id_suratmasuk = $this->input->post('id_suratmasuk');
    $id_jabatan = $this->input->post('id_jabatan');
    $tgl_teruskan = $this->input->post('tgl_teruskan');
    $arahan = $this->input->post('arahan');
    $keterangan = $this->input->post('keterangan');
    $date_created = $this->input->post('date_created');

    $data = array(
      'id_suratmasuk'   => $id_suratmasuk,
      'id_jabatan'      => $id_jabatan,
      'tgl_teruskan'    => $tgl_teruskan,
      'arahan'          => $arahan,
      'keterangan'      => $keterangan,
      'date_created'    => $date_created
    );

    $this->M_disposisi->create_disposisi($data);
    $this->session->set_flashdata(
        "simpan",
        "<div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success !</strong> Berhasil Menyimpan!
        </div>"
    );
    redirect('disposisi/dispo_suratmasuk/'.$id_suratmasuk.'');
  }
  function update_disposisi_proses()
  {
    $id_disposisi = $this->input->post('id_disposisi');
    $id_suratmasuk = $this->input->post('id_suratmasuk');
    $tujuan = $this->input->post('tujuan');
    $isi_disposisi = $this->input->post('isi_disposisi');
    $sifat = $this->input->post('sifat');
    $batas_waktu = $this->input->post('batas_waktu');
    $catatan = $this->input->post('catatan');
    $user = $this->input->post('user');

    $data = array(
      'id_disposisi'    => $id_disposisi,
      'id_suratmasuk'   => $id_suratmasuk,
      'tujuan'          => $tujuan,
      'isi_disposisi'   => $isi_disposisi,
      'sifat'           => $sifat,
      'batas_waktu'     => $batas_waktu,
      'catatan'         => $catatan,
      'user'            => $user
    );

    $where = array(
      'id_disposisi'    => $id_disposisi,
    );

    $this->M_disposisi->update_disposisi($where,$data,'tb_disposisi');
    $this->session->set_flashdata(
        "update",
        "<div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success !</strong> Berhasil Mengupdate Data!
        </div>"
    );
    redirect('disposisi/dispo_suratmasuk/'.$id_suratmasuk.'');
  }
  public function delete_disposisi($id_disposisi)
  {
    $data['title'] = 'Hapus Disposisi Surat Masuk';
    $data['detail'] = $this->db->get_where('tb_disposisi', ['id_disposisi' => $id_disposisi])->row_array();

    $this->template->load('MasterLayout','d-disposisi',$data);
  }
  function delete_disposisi_proses($id_disposisi = 0)
  {
    $id_disposisi = $this->input->post('id_disposisi');
    $id_suratmasuk = $this->input->post('id_suratmasuk');

    $where = array(
      'id_disposisi'    => $id_disposisi
    );

    $this->M_disposisi->delete_disposisi($id_disposisi);
    $this->session->set_flashdata("hapus","
        <div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success !</strong> Berhasil Menghapus Data!
        </div>"
    );
    redirect('disposisi/dispo_suratmasuk/'.$id_suratmasuk.'');
  }
  public function print_disposisi($id_disposisi)
  {
    $data['title'] = 'Cetak Disposisi';
    $data['detail'] = $this->M_disposisi->print_disposisi($id_disposisi);
    $this->load->view('disposisi/cetak-disposisi',$data);
  }
}
