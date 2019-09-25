<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class suratmasuk extends MX_Controller {
  public function __construct()
	{
		parent::__construct();
		$this->load->library(array('upload','form_validation'));
		Modules::run('auth/cek_login');
	}
  public function index()
  {
    $data['title'] = 'AMS | Surat Masuk';
    $this->template->load('MasterLayout','r-suratmasuk',$data);
  }
  public function create_suratmasuk()
  {
    $data['title'] = 'Tambah Surat Masuk';
    $this->template->load('MasterLayout','c-suratmasuk',$data);
  }
  function create_suratmasuk_proses()
  {
    $config['upload_path'] = './galeri/surat_masuk/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_width']  = 1024*3;
		$config['max_height']  = 768*3;

    if ( ! $this->upload->do_upload('gambar'))
		{
			$gambar = "";
			$this->session->set_flashdata('message', $this->upload->display_errors());
		} else{
      $kode = $this->input->post('kode');
      $asal_surat = $this->input->post('asal_surat');
      $isi_suratmasuk = $this->input->post('isi_suratmasuk');
      $tgl_surat = $this->input->post('tgl_surat');
      $tgl_diterima = $this->input->post('tgl_diterima');
      $ket_suratmasuk = $this->input->post('ket_suratmasuk');
			$file = $this->upload->file_name;

      $data = array(
        'kode' => $kode,
        'asal_surat' => $asal_surat,
        'isi_surat' => $isi_suratmasuk,
        'tgl_surat' => $tgl_surat,
        'tgl_diterima' => $tgl_diterima,
        'ket_suratmasuk' => $ket_suratmasuk,
        'gambar' => $file
      );

      $this->M_suratmasuk->create_suratmasuk($data);
      $this->session->set_flashdata(
          "simpan",
          "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Berhasil Menyimpan Data!
          </div>"
      );
      redirect('suratmasuk');
  }
}
