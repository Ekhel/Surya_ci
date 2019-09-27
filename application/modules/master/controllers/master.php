<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class master extends MX_Controller {
  public function __construct()
	{
		parent::__construct();
		$this->load->library(array('upload','session'));
    $this->load->model('M_master');
		Modules::run('auth/cek_login');
	}
  public function klasifikasi()
  {
    $data['title'] = 'Klasifikasi Surat';
    $data['kla'] = $this->M_master->klasifikasi();

    $this->template->load('MasterLayout','r-klasifikasi',$data);
  }
  function create_klasifikasi_proses()
  {
    $kode = $this->input->post('kode');
    $nama = $this->input->post('nama');
    $uraian = $this->input->post('uraian');

    $data = array(
      'kode'      => $kode,
      'nama'      => $nama,
      'uraian'    => $uraian
    );

    $this->M_master->create_klasifikasi($data);

    $this->session->set_flashdata(
        "simpan",
        "<div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success!</strong> Berhasil Menambahkan Data.
        </div>"
    );
    redirect('master/klasifikasi');
  }
  function update_klasifikasi_proses()
  {
    $kode = $this->input->post('kode');
    $nama = $this->input->post('nama');
    $uraian = $this->input->post('uraian');

    $data = array(
      'kode'      => $kode,
      'nama'      => $nama,
      'uraian'    => $uraian
    );

    $where = array(
      'kode'      => $kode
    );

    $this->M_master->update_klasifikasi($where,$data,'tb_klasifikasi');

    $this->session->set_flashdata(
        "simpan",
        "<div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success!</strong> Berhasil Menambahkan Data.
        </div>"
    );
    redirect('master/klasifikasi');
  }
}
