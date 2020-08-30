<div class="container text-center">
<br><br>    
  <h3>Program Fitness Harian</h3><br>

<div class="container">    
  <div class="row">

<form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>index.php/c_hitung/hitung_fitnes">
  <div class="form-group">
    <label class="control-label col-sm-4" for="bb">Berat(kg) yang ingin diturunkan:</label>
    <div class="col-sm-4"> 
      <input type="number" class="form-control" name="tujuan" required>
    </div>
  </div>

  <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Jogging</div>
        <div class="panel-body"><img src="/STAYFIT/images/jogging.jpg" class="img-responsive" style="width:100%" height="95" alt="Image"></div>
        <div class="panel-footer">Melakukan jogging selama 1jam/hari</div>
        <div class="panel-footer">
          <label class="checkbox-inline"><input type="checkbox" name="check1" value="1000" >Pilih</label></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">Skipping</div>
        <div class="panel-body"><img src="/STAYFIT/images/skipping.jpg" class="img-responsive" style="width:100%" height="95" alt="Image"></div>
        <div class="panel-footer">Melakukan jogging selama 1jam/hari</div>
        <div class="panel-footer">
          <label class="checkbox-inline"><input type="checkbox" name="check2" value="1000">Pilih</label></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">Cycling</div>
        <div class="panel-body"><img src="/STAYFIT/images/sepeda.jpg" class="img-responsive" style="width:100%" height="95" alt="Image"></div>
        <div class="panel-footer">Melakukan jogging selama 1jam/hari</div>
        <div class="panel-footer">
          <label class="checkbox-inline"><input type="checkbox" name="check3" value="1000">Pilih</label></div>
        </div>
    </div>
<br><br>

  <div class="form-group" > 
      
       <input type="submit" name="submit" value="submit" style="width:500px; height:50px;">
  </div><br>
<br><br>
</div><br>
</div>

 </form>
 <br><br>

    