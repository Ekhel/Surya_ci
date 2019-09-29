<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>disposisi/create_disposisi_proses" method="post">
                   <div class="form-group-inner">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="login2 pull-right pull-right-pro">Tujuan</label>
                        </div>
                        <div class="col-lg-9">
                            <input name="id_suratmasuk" type="hidden" value="<?php echo $suratmasuk['id_suratmasuk'] ?>"  class="form-control" />
                            <input name="user" type="hidden" value="<?php echo $this->session->userdata('nama_lengkap') ?>"  class="form-control" />
                            <input name="tujuan" type="text"  class="form-control" />
                        </div>
                    </div>
                   </div>
                   <div class="form-group-inner">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="login2 pull-right pull-right-pro">Isi Disposisi</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="isi_disposisi" class="form-control">
                        </div>
                    </div>
                   </div>
                   <div class="form-group-inner">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="login2 pull-right pull-right-pro">Sifat</label>
                        </div>
                        <div class="col-lg-9">
                            <select class="form-control" name="sifat">
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
                            <input name="batas_waktu" type="date"  class="form-control" />
                        </div>
                    </div>
                   </div>
                   <div class="form-group-inner">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="login2 pull-right pull-right-pro">Catatan</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="catatan" class="form-control">
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
