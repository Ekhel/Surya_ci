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
                            <li><a href="<?php echo base_url()?>disposisi/dispo_suratmasuk/<?php echo $detail['id_suratmasuk'] ?>">Disposisi</a> <span class="bread-slash">/</span>
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
              </p>

              <hr/>
              <form class="" action="<?php echo base_url()?>disposisi/delete_disposisi_proses" method="post">
                <input type="hidden" name="id_suratmasuk" value="<?php echo $detail['id_suratmasuk'] ?>">
                <input type="hidden" name="id_disposisi" value="<?php echo $detail['id_disposisi'] ?>">
                <div class="form-group-inner">
                  <div class="row">
                      <div class="col-lg-2">
                          <label class="login2 pull-right pull-right-pro">Tujuan</label>
                      </div>
                      <div class="col-lg-9">
                        <input name="tujuan" type="text" readonly="true" value="<?php echo $detail['tujuan'] ?>" class="form-control" />
                      </div>
                  </div>
               </div>
                <div class="form-group-inner">
                  <div class="row">
                      <div class="col-lg-2">
                          <label class="login2 pull-right pull-right-pro">Isi Disposisi</label>
                      </div>
                      <div class="col-lg-9">
                        <input name="isi_disposisi" type="text" readonly="true" value="<?php echo $detail['isi_disposisi'] ?>" class="form-control" />
                      </div>
                  </div>
               </div>
               <div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">Batas Waktu </label>
                     </div>
                     <div class="col-lg-9">
                       <input name="batas_waktu" type="text" readonly="true" value="<?php echo $detail['batas_waktu'] ?>" class="form-control" />
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
