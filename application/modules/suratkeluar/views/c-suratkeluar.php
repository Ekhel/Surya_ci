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
                                <li><a href="<?php echo base_url()?>suratkeluar">Keluar</a> <span class="bread-slash">/</span>
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
                    <h4> Tambah Surat keluar</h4>
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
                                <form action="<?php echo base_url()?>suratkeluar/create_suratkeluar_proses" method="post" enctype="multipart/form-data">
                                   <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="login2 pull-right pull-right-pro">Kode</label>
                                        </div>
                                        <div class="col-lg-3">
                                            <input name="user" type="hidden" value="<?php echo $this->session->userdata('nama') ?>" readonly="true" class="form-control" />
                                            <input name="kode" type="text" value="<?php echo $kode ?>" readonly="true" class="form-control" />
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">No Surat</label>
                                       </div>
                                       <div class="col-lg-9">
                                           <input name="no_surat" type="text" class="form-control" />
                                       </div>
                                   </div>
                                 </div>
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">Tujuan</label>
                                       </div>
                                       <div class="col-lg-9">
                                           <input name="tujuan" type="text" class="form-control" />
                                       </div>
                                   </div>
                                 </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">Isi Surat</label>
                                      </div>
                                      <div class="col-lg-9">
                                          <input name="isi_suratkeluar" type="text" class="form-control" />
                                      </div>
                                  </div>
                                 </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">Tgl Surat</label>
                                      </div>
                                      <div class="col-lg-4">
                                          <input name="tgl_suratkeluar" type="date" class="form-control" />
                                          <input name="tgl_catat" type="hidden" value="<?php echo date('Y-m-d') ?>" class="form-control" />
                                      </div>
                                  </div>
                                 </div>

                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">Keterangan</label>
                                      </div>
                                      <div class="col-lg-9">
                                          <textarea name="ket_suratkeluar" rows="8" cols="80" class="form-control"></textarea>
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
