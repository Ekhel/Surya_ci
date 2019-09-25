<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class suratmasuk extends MX_Controller {
  public function __construct()
	{
		parent::__construct();
		$this->load->library(array('upload','session'));
    $this->load->model('M_suratmasuk');
		Modules::run('auth/cek_login');
	}
  public function index()
  {
    $data['title'] = 'Surat Masuk';
    $data['surat'] = $this->M_suratmasuk->suratmasuk();
    $this->template->load('MasterLayout','r-suratmasuk',$data);
  }
  public function create_suratmasuk()
  {
    $data['title'] = 'Tambah Surat Masuk';
    $data['kode'] = $this->M_suratmasuk->kode();
    $this->template->load('MasterLayout','c-suratmasuk',$data);
  }
  public function create_suratmasuk_proses()
  {
    $config['upload_path'] = './galeri/surat_masuk';
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
      redirect('suratmasuk');
		} else{
			$file_path = $this->upload->file_name;

      $data = array(
        'kode' => $this->input->post('kode'),
        'asal_surat' => $this->input->post('asal_surat'),
        'isi_suratmasuk' => $this->input->post('isi_suratmasuk'),
        'tgl_surat' => $this->input->post('tgl_surat'),
        'tgl_diterima' => $this->input->post('tgl_diterima'),
        'ket_suratmasuk' => $this->input->post('ket_suratmasuk'),
        'file_path' => $file_path,
      );

      $this->M_suratmasuk->create_suratmasuk($data);
      $this->session->set_flashdata(
          "simpan",
          "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Berhasil Menyimpan!
          </div>"
      );
      redirect('suratmasuk');
    }
  }
}
