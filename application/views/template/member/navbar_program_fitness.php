<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <!-- <a class="navbar-brand" href="#">
        <span class="glyphicon glyphicon-user"></span> HOME</a>
      </a> -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li ><a href="<?php echo base_url(); ?>index.php/kontrollerListTipsKesehatan/halamanMember">Home</a></li>
          <li ><a href="<?php echo base_url(); ?>index.php/kontrollerListTipsKesehatan/getListTipsKesehatan/">Tips Kesehatan</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/c_hitung/index/">Hitung IMT</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/c_hitung/lemak/">Hitung Presentase Lemak</a></li>
          <li class="active"><a href="<?php echo base_url(); ?>index.php/c_hitung/fitness/">Program Fitness</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/c_datamember/history">History Kesehatan</a></li>
        </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url(); ?>index.php/c_user/keluar/0"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>