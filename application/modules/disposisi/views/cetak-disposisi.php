<script src="<?php echo base_url('assets/js/jquery-1.11.3.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.battatech.excelexport.min.js"></script>
<title><?php echo $title ?></title>
<script type="text/javascript">
	  $(document).ready(function() {
	    $("#cetak").click(function(event) {
	      event.preventDefault();
	      window.print();
	    });
	    $("#export_excel").click(function(event) {
	      event.preventDefault();
	      $("#container").btechco_excelexport({
	        containerid: "container",
	        datatype: $datatype.Table
	      });
	    });
			window.onload = function() { window.print(); }
	  });
</script>
<style type="text/css">
	body {
		margin: 0px;
		padding: 0px;
	}
	.title {
		text-align: center;
		font-family: Verdana;
		font-weight: bold;
		margin-bottom: 10px;
	}
	.table {
		border-collapse: collapse;
	}
	.table thead {
		font-size: 11px;
		font-weight: bold;
	}
	.table .header td{
		background-color: #C1C1C1;
		text-align: center;
	}
	.table thead td {
		background-color: #EEEEEE;
	}
	.prog {
		background-color: #dddddd;
	}
	.table tr {
		border-collapse: collapse;
	}
	.table td{
		font-size: 12px;
		padding: 5px;
		border-collapse: collapse;
		border: thin solid black;
	}
	.gray {
		background-color: gray;
	}
	.green {
		background-color: green;
	}
	@media print
	{
		.no-print, .no-print *
		{
		    display: none !important;
		}
		body {
    background: none;
    -ms-zoom: 1.665;
  	}
	  div.portrait, div.landscape {
	    margin: 0;
	    padding: 0;
	    border: none;
	    background: none;
	  }
	  div.landscape {
	    transform: rotate(270deg) translate(-276mm, 0);
	    transform-origin: 0 0;
	  }
	}
	.box_export {
	    top: 0px;
	    right: 0px;
	    padding: 10px 0px 10px 0px;
	    background: gray;
	    height: 20px;
	    margin: 0px;
	    margin-bottom: 10px;
	  }
	  .box_export ul {
	    margin: 0px;
	    padding: 0px;
	  }
	  .box_export li {
	    display: inline;
	  }
	  .box_export li a {
	    color: white;
	    text-decoration: none;
	    padding: 0px 10px 0px 10px;
	  }
	  .box_export li a:hover {
	    background-color: green;
	  }
    .lg-text {
      font-size: 14px;
      padding: 5px;
      font-weight: bold;
    }
    .italic-text {
      font-size: 11px;
      font-style: italic;
      padding: 5px;
    }
    .normal-text {
      font-family: Verdana;
      font-size: 12px;
      font-style: normal;
      padding: 5px;
    }
    .profile-img{
        text-align: center;
    }
    .profile-img img{
        width: 70%;
        height: 100%;
    }
    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }
    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }

</style>

<div class="box_export no-print"><ul><li><a href="#" id="cetak">Print</a></li></ul></div>
	<div id="container">
		<br />
		<div class="title">
			<table width="100%">
				<tr>
					<td rowspan="4" align='center'>
						<img height="50px" width="35px" src="<?php echo base_url()?>assets/img/logo/KabJayapura.png" />
					</td>
				</tr>
				<tr>
					<td align='center'><text class="lg-text">PEMERINTAH KABUPATEN JAYAPURA</text></td>
				</tr>
				<tr>
					<td align='center'><text class="lg-text">BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA</text></td>
				</tr>
				<tr>
					<td align='center'><text class="italic-text">Alamat : Jl. Sentani - Depapre, Gunung Merah Sentani Tlp/Fax. (0967) 594711</text></td>
				</tr>
			</table>
			<hr/>
			<br />
			<table width="100%">
				<tr>
					<td colspan='1' align='center'><strong> LEMBAR DISPOSISI </strong></td>
				</tr>
			</table>
			<br />
			<hr />
		</div>
		<div>
		<?php foreach($detail as $item){?>
			<table>
				<tr>
					<th width="20%">Nomor Agenda</th>
					<th>: </th>
					<th width="35%"><?php echo $item->no_agenda ?> </th>
					<th width="20%">Diterima Tanggal </th>
					<th>: </th>
					<th><?php echo $item->tgl_diterima ?></th>
				</tr>
			</table>
			<hr />
			<table width="100%">
				<tr>
					<td>Asal Surat</td>
					<td>:</td>
					<td>SETDA</td>
				</tr>
				<tr>
					<td>No Surat</td>
					<td>:</td>
					<td>12/SETDA/009</td>
				</tr>
				<tr>
					<td>Tanggal Surat</td>
					<td>:</td>
					<td><?php echo $item->tgl_surat ?></td>
				</tr>
				<tr>
					<td>Perihal</td>
					<td>:</td>
					<td><?php echo $item->perihal ?></td>
				</tr>
				<tr>
					<td>Sifat</td>
					<td>:</td>
					<td><?php echo $item->sifat ?></td>
				</tr>
				<tr>
					<td>Lampiran</td>
					<td>:</td>
					<td><?php echo $item->lampiran ?></td>
				</tr>
				<tr>
					<td>Diteruskan Kepada</td>
					<td>:</td>
					<td><?php echo $item->jabatan ?> / <?php echo $item->keterangan ?></td>
				</tr>
				
			</table>
			<br />
			<br />
			<hr />
			<br />
			<div>
				<table align="left" width="50%">
					<tr>
						<td><strong>Arahan Pimpinan</strong></td>
					</tr>
					<tr>
						<td><?php echo $item->arahan ?></td>
					</tr>
				</table>
				<table align="right" width=50%>
					<tr>
						<td><img src="<?php echo base_url()?>assets/img/logo/kotak.jpg" width="15px" /> Buat Tanggapan dan Saran</td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url()?>assets/img/logo/kotak.jpg" width="15px" /> Telaah dan Laporkan</td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url()?>assets/img/logo/kotak.jpg" width="15px" /> Mohon Koreksi, Paraf dan TTD</td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url()?>assets/img/logo/kotak.jpg" width="15px" /> Diproses Sesuai Ketentuan Perundang - undangan</td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url()?>assets/img/logo/kotak.jpg" width="15px" /> Teliti dan Cermati</td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url()?>assets/img/logo/kotak.jpg" width="15px" /> Ikuti Perkembangan</td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url()?>assets/img/logo/kotak.jpg" width="15px" /> Koordinasikan / Konfirmasikan</td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url()?>assets/img/logo/kotak.jpg" width="15px" /> Bicarakan dengan Saya</td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url()?>assets/img/logo/kotak.jpg" width="15px" /> Siapkan Bahan</td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url()?>assets/img/logo/kotak.jpg" width="15px" /> Wakili dan Laporkan</td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url()?>assets/img/logo/kotak.jpg" width="15px" /> ACC / Ingatkan</td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url()?>assets/img/logo/kotak.jpg" width="15px" /> Untuk Menjadi Perhatian</td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url()?>assets/img/logo/kotak.jpg" width="15px" /> File / Simpan</td>
					</tr>
				</table>
			</div>
			<br />
			<br />
			<br />
			<table width="100%">
				
			</table>
			<hr />
			<table width="100%">
				<tr>
					<th width="20%">Tanggal Diteruskan</th>
					<th width="10%">: </th>
					<th>1/28/2021 </th>
					<th>Penerima </th>
					<th width="10%">: </th>
					<th>Kabid ...</th>
				</tr>
			</table>

			<hr />
			<br />
			<br />
			<table align="left" width="40%">
				<tr>
					<td>Catatan : </td>
				</tr>
			</table>

			<table align="right" width="60%">
				<tr>
					<td align="center"><strong>Sentani, <?php echo date('Y-m-d') ?></strong></td>
				</tr>
				<tr>
					<td align="center"><strong>KEPALA,</strong></td>
				</tr>
				<tr height="70px"></tr>
				<tr>
					<td align="center"><strong>ALEX RUMBOBIAR, S.Sos., M.Si</strong></td>
				</tr>
				<tr>
					<td align="center">PEMBINA UTAMA MUDA</td>
				</tr>
				<tr>
					<td align="center">NIP.19660810 199610 1 001</td>
				</tr>
			</table>
		<?php } ?>
		</div>
	</div>
</div>
