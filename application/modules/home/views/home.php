<title>BERANDA APPLIKASI</title>

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
                                <li><a>BERANDA APPLIKASI</a> <span class="bread-slash"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php foreach($row as $item){?>
<div class="project-details-area mg-b-40">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="project-details-wrap shadow-reset">
          <div align="center">
            <img src="<?php echo base_url()?>assets/img/logo/<?php echo $item->logo ?>" width="150" alt="">
            <br/>
            <h4 class="text-uppercase">PEMERINTAH KABUPATEN BIAK PROVINSI <?php echo $item->provinsi ?></h4>
            <h4><?php echo $item->nama_org ?></h4>
            <hr/>
            <h3>SISTEM INFORMASI MENAJEMEN POLIKLINIK</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php } ?>
<br/>
