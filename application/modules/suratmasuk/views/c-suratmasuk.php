<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6">

                        </div>
                        <div class="col-lg-6">
                            <ul class="breadcome-menu">
                                <li><a href="#">Surat</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="<?php echo base_url()?>suratmasuk">Masuk</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Tambah</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
  <div class="container-fluid">
    <div class="col-lg-12">
        <div class="sparkline12-list shadow-reset mg-t-30">
            <div class="sparkline12-hd">
                <div class="main-sparkline12-hd">
                    <h4> Tambah Surat</h4>
                    <div class="sparkline12-outline-icon">
                        <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                        <span><i class="fa fa-wrench"></i></span>
                        <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <div class="sparkline12-graph">
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="all-form-element-inner">
                                <form action="<?php echo base_url()?>suratmasuk/create_suratmasuk_proses" method="post" enctype="multipart/form-data">
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label class="login2 pull-right pull-right-pro">No. Agenda</label>
                                            </div>
                                            <div class="col-lg-3">
                                                <input name="no_agenda" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label class="login2 pull-right pull-right-pro">No. Surat</label>
                                            </div>
                                            <div class="col-lg-3">
                                                <input name="no_surat" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label class="login2 pull-right pull-right-pro">Asal Surat</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input name="asal_surat" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label class="login2 pull-right pull-right-pro">perihal</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input name="perihal" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label class="login2 pull-right pull-right-pro">Sifat</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <select name="sifat" class="form-control">
                                                    <option value="Undagan">Undangan</option>
                                                    <option value="Biasa">Biasa</option>
                                                    <option value="Penting">Penting</option>
                                                    <option value="Rahasia">Rahasia</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label class="login2 pull-right pull-right-pro">Lampiran</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <select name="lampiran" class="form-control">
                                                    <option value="Ada">Ada</option>
                                                    <option value="Tidak Ada">Tidak Ada</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label class="login2 pull-right pull-right-pro">Tgl Surat</label>
                                            </div>
                                            <div class="col-lg-4">
                                                <input name="tgl_surat" type="date" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label class="login2 pull-right pull-right-pro">Tgl Diterima</label>
                                            </div>
                                            <div class="col-lg-4">
                                                <input name="tgl_diterima" type="date" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label class="login2 pull-right pull-right-pro">File</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input name="file_path" type="file" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-2">
                                            </div>
                                            <div class="col-lg-2">
                                                <input type="submit" class="btn btn-primary" value="Simpan">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<br/>
