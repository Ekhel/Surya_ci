<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>master/create_klasifikasi_proses" method="post">
                   <div class="form-group-inner">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="login2 pull-right pull-right-pro">Kode</label>
                        </div>
                        <div class="col-lg-9">
                            <input name="kode" type="text" id="xkode" readonly="true" class="form-control" />
                        </div>
                    </div>
                  </div>
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Klasifikasi</label>
                       </div>
                       <div class="col-lg-9">
                           <input name="nama" type="text" id="xnama" class="form-control" />
                       </div>
                   </div>
                 </div>
                 <div class="form-group-inner">
                  <div class="row">
                      <div class="col-lg-2">
                          <label class="login2 pull-right pull-right-pro">Uraian</label>
                      </div>
                      <div class="col-lg-9">
                          <input name="uraian" type="text" id="xuraian" class="form-control" />
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
