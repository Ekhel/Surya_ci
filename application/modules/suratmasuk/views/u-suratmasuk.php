<?php foreach($detail as $item){?>
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
                                <li><span class="bread-blod">Edit</span>
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
                    <h4> Edit Surat Masuk</h4>
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
                                <form action="<?php echo base_url()?>suratmasuk/update_suratmasuk_proses" method="post" enctype="multipart/form-data">
                                   <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="login2 pull-right pull-right-pro">Kode</label>
                                        </div>
                                        <div class="col-lg-3">
                                            <input name="id_suratmasuk" type="hidden" value="<?php echo $item->id_suratmasuk ?>" readonly="true" class="form-control" />
                                            <input name="kode" type="text" value="<?php echo $item->kode ?>" readonly="true" class="form-control" />
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">Asal Surat</label>
                                       </div>
                                       <div class="col-lg-9">
                                           <input name="asal_surat" type="text" value="<?php echo $item->asal_surat ?>" class="form-control" />
                                       </div>
                                   </div>
                                 </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">Isi Surat</label>
                                      </div>
                                      <div class="col-lg-9">
                                          <input name="isi_suratmasuk" type="text" value="<?php echo $item->isi_suratmasuk ?>" class="form-control" />
                                      </div>
                                  </div>
                                 </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">Tgl Surat</label>
                                      </div>
                                      <div class="col-lg-4">
                                          <input name="tgl_surat" type="date" class="form-control" value="<?php echo $item->tgl_surat ?>" />
                                      </div>
                                  </div>
                                 </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">Tgl Diterima</label>
                                      </div>
                                      <div class="col-lg-4">
                                          <input name="tgl_diterima" type="date" class="form-control" value="<?php echo $item->tgl_diterima ?>" />
                                      </div>
                                  </div>
                                 </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">Keterangan</label>
                                      </div>
                                      <div class="col-lg-9">
                                          <textarea name="ket_suratmasuk" rows="8" cols="80" class="form-control"><?php echo $item->ket_suratmasuk ?></textarea>
                                      </div>
                                  </div>
                                 </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">

                                      </div>
                                      <div class="col-lg-2">
                                          <?php if($item->file_path != ''){ ?>
                                            <img src="<?php echo base_url()?>galeri/surat_masuk/<?php echo $item->file_path ?>" alt="" width="150px">
                                          <?php } ?>
                                      </div>
                                  </div>
                                 </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">File</label>
                                      </div>
                                      <div class="col-lg-9">
                                          <input name="file_path" type="file" value="<?php echo $item->file_path ?>" class="form-control" />
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

<?php } ?>
