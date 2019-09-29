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
	<div class="title">
		<table width="100%">
      <tr>
        <td rowspan="4" align='center'>
          <img height="50px" width="35px" src="<?php echo base_url()?>assets/img/logo/KabJayapura.png" />
        </td>
      </tr>
			<tr><td align='center'><text class="lg-text">PEMERINTAH KABUPATEN JAYAPURA</text></td></tr>
      <tr><td align='center'><text class="lg-text">BADAN PERENCANAAN PEMBANGUNAN DAERAH</text></td></tr>
      <tr><td align='center'><text class="italic-text">Alamat : Jl. Sentani - Depapre, Gunung Merah Sentani Tlp/Fax. (0967) 594710</text></td></tr>
	  </table>
    <hr/>
    <table width="100%">
      <tr><td colspan='1' align='center'><strong> LEMBAR DISPOSISI </strong></td></tr>
    </table>

  </div>
  <?php foreach($detail as $item){?>
  <table width="100%" class="table" border="2px">
    <tr>
      <th>Index</th>
      <th>Kode</th>
      <th>No. Urut</th>
      <th>Tgl. Penyelesaian</th>
    </tr>
    <tr>
      <td>. . . . . . . . . . . . . . . .</td>
      <td><?php echo $item->kode ?></td>
      <td>. . . . . . . . . . . . . . . .</td>
      <td><?php echo $item->batas_waktu ?></td>
    </tr>
    <tr>
      <td colspan="4"> Perihal : <h3><?php echo $item->isi_disposisi ?></h3></td>
    </tr>
    <tr>
      <th>Asal Surat</th>
      <th>Tanggal</th>
      <th>No. Surat</th>
      <th>Lampiran</th>
    </tr>
    <tr>
      <td><?php echo $item->asal_surat ?></td>
      <td><?php echo $item->tgl_diterima ?></td>
      <td></td>
      <td>. . . . . . . . . . . . . . . .</td>
    </tr>
    <tr>
      <td><strong>Ditujukan/Diteruskan Kepada</strong></td>
      <td><strong>Tanggal</strong></td>
      <td><strong>Paraf</strong></td>
      <td><strong>Instruksi/Informasi</strong></td>
    </tr>
    <tr>
      <td height="50px"><?php echo $item->tujuan ?></td>
      <td height="50px"><?php echo date('Y-m-d') ?></td>
      <td height="50px"></td>
      <td height="50px"><?php echo $item->catatan ?></td>
    </tr>
  </table>
<?php } ?>
</div>
