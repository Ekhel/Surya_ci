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
                                <li><span class="bread-blod">Masuk</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
              <?php echo $this->session->flashdata('simpan');?>
              <?php echo $this->session->flashdata('error');?>
              <?php echo $this->session->flashdata('update');?>
              <?php echo $this->session->flashdata('hapus');?>
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data<span class="table-project-n"></span> Surat Masuk</h1>
                            <div class="sparkline13-outline-icon">
                              <span><a href="<?php echo base_url()?>suratmasuk/create_suratmasuk" title="Tambah Surat Masuk" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a></i></span>
                          </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="no">No</th>
                                        <th data-field="No Surat">No. Surat</th>
                                        <th data-field="asal"> Asal Surat</th>
                                        <th data-field="perihal">Perihal</th>
                                        <th data-field="tgl_surat">Tgl surat</th>
                                        <th data-field="file">File</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($surat as $item){
                                  ?>
                                  <tr>
                                    <td><?php echo $item->no_agenda ?></td>
                                    <td><?php echo $item->no_surat ?></td>
                                    <td><?php echo $item->asal_surat ?></td>
                                    <td><?php echo $item->perihal ?></td>
                                    <td><?php echo $item->tgl_surat ?></td>
                                    <td><a href="<?php echo base_url()?>galeri/surat_masuk/<?php echo $item->file_path ?>" target="_blank"><img src="<?php echo base_url()?>assets/img/logo/file.png" width="25px"></img></a></td>
                                    <td>
                                      <a href="<?php echo base_url()?>disposisi/dispo_suratmasuk/<?php echo $item->id_suratmasuk ?>" type="button" title="Disposisi" class="btn btn-custon-three btn-danger btn-xs"><i class="fa fa-list"></i></a>
                                      <a href="<?php echo base_url()?>suratmasuk/update_suratmasuk/<?php echo $item->id_suratmasuk ?>" type="button" class="btn btn-custon-three btn-primary btn-xs" ><i class="fa fa-edit"></i></a>
                                      <a href="<?php echo base_url()?>suratmasuk/delete_suratmasuk/<?php echo $item->id_suratmasuk ?>" type="button" title="Hapus" class="btn btn-custon-three btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                    </td>
                                  </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
