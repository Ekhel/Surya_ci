<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <div class="breadcome-heading">

                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <ul class="breadcome-menu">
                            <li><a href="#">Surat</a> <span class="bread-slash">/</span>
                            </li>
                            <li><a href="<?php echo base_url()?>suratmasuk">Masuk</a> <span class="bread-slash">/</span>
                            </li>
                            <li><span class="bread-blod">Hapus</span>
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="button-adminpro-area mg-b-15">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10">
        <div class="button-ad-wrap shadow-reset nt-mg-b-30">
          <div class="alert-title">
              <h2><strong>Hapus !!!</strong></h2>
              <br/>
              <p class="alert alert-warning">
                <strong>PERINGATAN !! :</strong><br/>
                Apakah Anda Yakin Ingin Menghapus Item ini ??? <br/>
                Dengan Menghapus Item ini Anda akan menghapus Semua item yang berelasi dengan data ini !!<br/>
              </p>

              <hr/>
              <form class="" action="<?php echo base_url()?>suratmasuk/delete_suratmasuk_proses" method="post">
                <input type="hidden" name="id_suratmasuk" value="<?php echo $detail['id_suratmasuk'] ?>">
                <div class="form-group-inner">
                  <div class="row">
                      <div class="col-lg-2">
                          <label class="login2 pull-right pull-right-pro">KODE</label>
                      </div>
                      <div class="col-lg-9">
                        <input name="kode" type="text" readonly="true" value="<?php echo $detail['kode'] ?>" class="form-control" />
                      </div>
                  </div>
               </div>
                <div class="form-group-inner">
                  <div class="row">
                      <div class="col-lg-2">
                          <label class="login2 pull-right pull-right-pro">Asal Surat</label>
                      </div>
                      <div class="col-lg-9">
                        <input name="asal_surat" type="text" readonly="true" value="<?php echo $detail['asal_surat'] ?>" class="form-control" />
                      </div>
                  </div>
               </div>
               <div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">Isi Surat </label>
                     </div>
                     <div class="col-lg-9">
                       <input name="isi_surat" type="text" readonly="true" value="<?php echo $detail['isi_suratmasuk'] ?>" class="form-control" />
                     </div>
                 </div>
               </div>
               <div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">Tgl Surat</label>
                     </div>
                     <div class="col-lg-9">
                       <input name="tgl_surat" type="text" readonly="true" value="<?php echo $detail['tgl_surat'] ?>" class="form-control" />
                     </div>
                 </div>
               </div>
               <div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">Tgl Diterima</label>
                     </div>
                     <div class="col-lg-9">
                       <input name="tgl_diterima" type="text" readonly="true" value="<?php echo $detail['tgl_diterima'] ?>" class="form-control" />
                     </div>
                 </div>
               </div>
               <div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">Keterangan</label>
                     </div>
                     <div class="col-lg-9">
                       <input name="ket_suratmasuk" type="text" readonly="true" value="<?php echo $detail['ket_suratmasuk'] ?>" class="form-control" />
                     </div>
                 </div>
               </div>
               <div class="form-group-inner">
                <div class="row">
                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-2">
                        <?php if($detail['file_path'] != ''){ ?>
                          <img src="<?php echo base_url()?>galeri/surat_masuk/<?php echo $detail['file_path'] ?>" alt="" width="150px">
                        <?php } ?>
                    </div>
                </div>
               </div>
                <div class="form-group-inner">
                   <div class="row">
                     <div class="col-lg-2">
                     </div>
                     <div class="col-lg-6">
                       <input type="submit" class="btn btn-primary" value="Hapus" />

                     </div>
                     <div class="col-lg-1">

                     </div>
                   </div>
               </div>
              </form>

          </div>
          <hr/>
        </div>
      </div>
    </div>
  </div>
</div>
