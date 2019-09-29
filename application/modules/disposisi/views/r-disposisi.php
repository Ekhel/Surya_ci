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
                                <li><span class="bread-blod">Disposisi</span>
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
              <?php echo $this->session->flashdata('update');?>
              <?php echo $this->session->flashdata('hapus');?>
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Disposisi<span class="table-project-n"></span> Surat Masuk</h1>
                            <div class="sparkline13-outline-icon">
                              <span><a href="#modalcreate" data-toggle="modal" title="Tambah Disposisi" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a></i></span>
                          </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table class="small table table-bordered">
                                <thead>
                                    <tr class="small">
                                        <th>No</th>
                                        <th>Tujuan</th>
                                        <th>Isi Dispo</th>
                                        <th>Sifat</th>
                                        <th>Batas Waktu</th>
                                        <th>Catatan</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($disposisi as $item){
                                  ?>
                                    <tr class="small">
                                      <td><?php echo $no++ ?></td>
                                      <td><?php echo $item->tujuan ?></td>
                                      <td><?php echo $item->isi_disposisi ?></td>
                                      <td><?php echo $item->sifat ?></td>
                                      <td><?php echo $item->batas_waktu ?></td>
                                      <td><?php echo $item->catatan ?></td>
                                      <td>
                                        <a href="#modalupdate" data-toggle="modal" type="button" class="btn btn-custon-three btn-primary btn-xs" onclick="update(
                                            '<?php echo $item->id_disposisi ?>',
                                            '<?php echo $item->id_suratmasuk ?>',
                                            '<?php echo $item->tujuan ?>',
                                            '<?php echo $item->isi_disposisi ?>',
                                            '<?php echo $item->sifat ?>',
                                            '<?php echo $item->batas_waktu ?>',
                                            '<?php echo $item->catatan ?>',
                                            '<?php echo $item->user ?>'
                                          )"><i class="fa fa-edit"></i></a>
                                        <a href="<?php echo base_url()?>disposisi/delete_disposisi/<?php echo $item->id_disposisi ?>" type="button" title="Hapus" class="btn btn-custon-three btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                        <a href="<?php echo base_url()?>disposisi/print_disposisi/<?php echo $item->id_disposisi ?>" type="button" title="Cetak Disposisi" class="btn btn-custon-three btn-default btn-xs" target="_blank"><i class="fa fa-print"></i></a>
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

<div class="modal fade" id="modalcreate" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-plus-circle"></i> Form Tambah Disposisi Surat </h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('disposisi/c-disposisi'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalupdate" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-plus-circle"></i> Form Edit Disposisi Surat </h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('disposisi/u-disposisi'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
  function update(id_disposisi,id_suratmasuk,tujuan,isi_disposisi,sifat,batas_waktu,catatan,user){
    $('#xid_disposisi').val(id_disposisi);
    $('#xid_suratmasuk').val(id_suratmasuk);
    $('#xtujuan').val(tujuan);
    $('#xisi_disposisi').val(isi_disposisi);
    $('#xsifat').val(sifat);
    $('#xbatas_waktu').val(batas_waktu);
    $('#xcatatan').val(catatan);
    $('#xuser').val(user);
  }
</script>
