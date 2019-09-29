<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>disposisi/update_disposisi_proses" method="post">
                   <div class="form-group-inner">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="login2 pull-right pull-right-pro">Tujuan</label>
                        </div>
                        <div class="col-lg-9">
                            <input name="id_disposisi" type="hidden" id="xid_disposisi" class="form-control" />
                            <input name="id_suratmasuk" type="hidden" id="xid_suratmasuk" class="form-control" />
                            <input name="user" type="hidden" id="xuser" class="form-control" />
                            <input name="tujuan" type="text" id="xtujuan" class="form-control" />
                        </div>
                    </div>
                   </div>
                   <div class="form-group-inner">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="login2 pull-right pull-right-pro">Isi Disposisi</label>
                        </div>
                        <div class="col-lg-9">
                            <input name="isi_disposisi" type="text" id="xisi_disposisi" class="form-control" />
                        </div>
                    </div>
                   </div>
                   <div class="form-group-inner">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="login2 pull-right pull-right-pro">Sifat</label>
                        </div>
                        <div class="col-lg-9">
                          <select class="form-control" name="sifat" id="xsifat">
                            <option value="Biasa">Biasa</option>
                            <option value="Penting">Penting</option>
                            <option value="Segera">Segera</option>
                            <option value="Rahasia">Rahasia</option>
                          </select>
                        </div>
                    </div>
                   </div>
                   <div class="form-group-inner">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="login2 pull-right pull-right-pro">Batas Waktu</label>
                        </div>
                        <div class="col-lg-9">
                            <input name="batas_waktu" type="date" id="xbatas_waktu" class="form-control" />
                        </div>
                    </div>
                   </div>
                   <div class="form-group-inner">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="login2 pull-right pull-right-pro">Catatan</label>
                        </div>
                        <div class="col-lg-9">
                            <input name="catatan" type="text" id="xcatatan" class="form-control" />
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
