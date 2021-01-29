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
    //$data['kode'] = $this->M_suratmasuk->kode();
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
        'no_agenda' => $this->input->post('no_agenda'),
        'no_surat'  => $this->input->post('no_surat'),
        'asal_surat' => $this->input->post('asal_surat'),
        'perihal' => $this->input->post('perihal'),
        'sifat'   => $this->input->post('sifat'),
        'lampiran'  => $this->input->post('lampiran'),
        'tgl_surat' => $this->input->post('tgl_surat'),
        'tgl_diterima' => $this->input->post('tgl_diterima'),
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
  function update_suratmasuk($id_suratmasuk)
  {
    $data['title'] = 'Edit Surat Masuk';
    $where = array('id_suratmasuk' => $id_suratmasuk);
    $data['detail'] = $this->db->query("SELECT * FROM tb_suratmasuk WHERE id_suratmasuk = '$id_suratmasuk' ")->result();

    $this->template->load('MasterLayout','u-suratmasuk',$data);
  }
  public function update_suratmasuk_proses()
  {
    $config['upload_path'] = './galeri/surat_masuk';
		$config['allowed_types'] = 'gif|jpg|png';
    $config['encrypt_name'] = TRUE;
    $config['overwrite'] = TRUE;
		$config['max_width']  = 1024*3;
		$config['max_height']  = 768*3;
    $config['max_size'] = 1024*3;

    $id_suratmasuk = $this->input->post('id_suratmasuk');
    $kode = $this->input->post('kode');
    $asal_surat = $this->input->post('asal_surat');
    $isi_suratmasuk = $this->input->post('isi_suratmasuk');
    $tgl_surat = $this->input->post('tgl_surat');
    $tgl_diterima = $this->input->post('tgl_diterima');
    $ket_suratmasuk = $this->input->post('ket_suratmasuk');
    $file = $this->db->get_where('tb_suratmasuk', ['id_suratmasuk' => $id_suratmasuk]);

    if($file->num_rows() > 0){
      $gambar = $file->row();
      $name = $gambar->file_path;
      if($name != null){
        $delete_path = './galeri/surat_masuk/'.$name;
        @unlink($delete_path);
      }
    }

    $this->upload->initialize($config);

    if ( ! $this->upload->do_upload('file_path'))
		{
			$file_path = "";
			$this->session->set_flashdata(
        "error",
        "<div class='alert alert-danger fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>error !</strong> Gagal Mengupdate Data!
        </div>"
      );
      redirect('suratmasuk');
		} else{
			$file_path = $this->upload->file_name;

      $data = array(
        'id_suratmasuk' => $id_suratmasuk,
        'kode' => $kode,
        'asal_surat' => $asal_surat,
        'isi_suratmasuk' => $isi_suratmasuk,
        'tgl_surat' => $tgl_surat,
        'tgl_diterima' => $tgl_diterima,
        'ket_suratmasuk' => $ket_suratmasuk,
        'file_path' => $file_path,
      );

      $where = array(
        'id_suratmasuk'  => $id_suratmasuk
      );

      $this->M_suratmasuk->update_suratmasuk($where,$data,'tb_suratmasuk');
      $this->session->set_flashdata(
          "update",
          "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Berhasil Mengupdate data!
          </div>"
      );
      redirect('suratmasuk');
    }
  }
  function delete_suratmasuk($id_suratmasuk)
  {
    $data['title'] = 'Konfirmasi Hapus Item';
    $data['detail'] = $this->db->get_where('tb_suratmasuk',['id_suratmasuk' => $id_suratmasuk])->row_array();

    $this->template->load('MasterLayout','d-suratmasuk',$data);
  }
  function delete_suratmasuk_proses($id_suratmasuk = 0)
  {
    $id_suratmasuk = $this->input->post('id_suratmasuk');

    $file = $this->db->get_where('tb_suratmasuk', ['id_suratmasuk' => $id_suratmasuk]);

    if($file->num_rows() > 0){
      $gambar = $file->row();
      $name = $gambar->file_path;
      if($name != null){
        $delete_path = './galeri/surat_masuk/'.$name;
        @unlink($delete_path);
      }
    }

    $this->M_suratmasuk->delete_suratmasuk($id_suratmasuk);
    $this->session->set_flashdata("hapus","
        <div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success !</strong> Berhasil Menghapus Data!
        </div>"
    );
    redirect('suratmasuk');
  }
}
