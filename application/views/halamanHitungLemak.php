<div class="container text-center">    
  <h3 style="margin-top:80px;">Hitung Presentase Lemak Tubuh</h3><br>
  
  <br><br>
<form class="form-horizontal" role="form" method='POST' action='<?php echo base_url(); ?>index.php/c_hitung/hitungLemak'>
  <div class="container" style="margin-left:180px;">
  <div class="form-group">
    <label class="control-label col-sm-2" for="tb">Berat Badan:</label>
    <div class="col-sm-4"> 
      <input type="text" class="form-control" id="tb" name='berat' required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="tb">Tinggi Badan:</label>
    <div class="col-sm-4"> 
      <input type="text" class="form-control" id="tb" name='tinggi' required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="tb">Umur:</label>
    <div class="col-sm-4"> 
      <input type="text" class="form-control" id="bb" name='umur'required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="tb">Jenis Kelamin:</label>
    <table style="text-align=left;" >
      <tr>
        <td><input type="radio" name="optradio" value="1"> Pria</td>
        <td style="text-indent:20px;"><input type="radio" name="optradio" value="0"> Wanita</td>
      </tr>
    </table>
       
        
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-4">
      <button type="submit" class="btn btn-default">Hitung</button>  
</div><br>
</form>
</div>
</div>
