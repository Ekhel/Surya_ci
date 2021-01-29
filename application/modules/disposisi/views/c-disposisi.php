<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>disposisi/create_disposisi_proses" method="post">
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="login2 pull-right pull-right-pro">Diteruskan Kpd</label>
                            </div>
                            <div class="col-lg-9">
                                <input name="id_suratmasuk" type="hidden" value="<?php echo $suratmasuk['id_suratmasuk'] ?>"  class="form-control" />
                                <input name="user" type="hidden" value="<?php echo $this->session->userdata('nama_lengkap') ?>"  class="form-control" />
                                <select class="form-control" name="id_jabatan">
                                    <option value="">Pilih</option>
                                    <?php
                                    foreach($jabatan as $j => $val)
                                    {?>
                                    <option value="<?php echo $val->id_jabatan;?>"><?php echo $val->jabatan; ?></option>
                                    <?php
                                    }?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-2">
                                
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="keterangan" class="form-control">
                            </div>
                        </div>
                   </div>
                   <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="login2 pull-right pull-right-pro">Arahan</label>
                            </div>
                            <div class="col-lg-9">
                                <textarea type="text" name="arahan" class="form-control" ></textarea>
                                <input type="hidden" name="date_created" readonly="true" value="<?php echo date('Y-m-d') ?>">
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
