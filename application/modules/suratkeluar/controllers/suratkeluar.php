<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class suratkeluar extends MX_Controller {
  public function __construct()
	{
		parent::__construct();
		$this->load->library(array('upload','session'));
    $this->load->model('M_suratkeluar');
		Modules::run('auth/cek_login');
	}
  public function index()
  {
    $data['title'] = 'Surat Keluar';
    $data['suratkeluar'] = $this->M_suratkeluar->suratkeluar();
    $this->template->load('MasterLayout','r-suratkeluar',$data);
  }
  public function create_suratkeluar()
  {
    $data['title'] = 'Tambah Surat Keluar';
    $data['kode'] = $this->M_suratkeluar->kode();
    $this->template->load('MasterLayout','c-suratkeluar',$data);
  }
  public function create_suratkeluar_proses()
  {
    $config['upload_path'] = './galeri/surat_keluar';
		$config['allowed_types'] = 'gif|jpg|png';
    $config['encrypt_name'] = TRUE;
    $config['overwrite'] = TRUE;
		$config['max_width']  = 1024*3;
		$config['max_height']  = 768*3;
    $config['max_size'] = 1024*3;

    $this->upload->initialize($config);

    if ( ! $this->upload->do_upload('file_path'))
		{
			$file_path = "";
			$this->session->set_flashdata(
        "error",
        "<div class='alert alert-danger fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>error !</strong> Gagal Menambah Data!
        </div>"
      );
      redirect('suratkeluar');
		} else{
			$file_path = $this->upload->file_name;

      $data = array(
        'kode' => $this->input->post('kode'),
        'no_surat' => $this->input->post('no_surat'),
        'tujuan' => $this->input->post('tujuan'),
        'isi_suratkeluar' => $this->input->post('isi_suratkeluar'),
        'tgl_suratkeluar' => $this->input->post('tgl_suratkeluar'),
        'tgl_catat' => $this->input->post('tgl_catat'),
        'ket_suratkeluar' => $this->input->post('ket_suratkeluar'),
        'user' => $this->input->post('user'),
        'file_path' => $file_path,
      );

      $this->M_suratkeluar->create_suratkeluar($data);
      $this->session->set_flashdata(
          "simpan",
          "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Berhasil Menyimpan!
          </div>"
      );
      redirect('suratkeluar');
    }
  }
}
