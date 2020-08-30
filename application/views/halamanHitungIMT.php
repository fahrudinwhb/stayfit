<div class="container text-center">    
  <h3 style="margin-top:50px;">Hitung Indeks Masa Tubuh</h3><br>
 
  <br><br>
  
    
            <form class="form-horizontal" role="form" method="POST" action = '<?php echo base_url(); ?>index.php/c_hitung/hasilIMT'>
            
          <div class="container" style="margin-left:250px; " height="500px;">
          <center>
          <div class="form-group">
            <label class="control-label col-sm-2" for="tb">Tinggi Badan (cm):</label>
            <div class="col-sm-4"> 
              <input type="number" class="form-control" id="tb" name='tinggi'>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="tb">Berat Badan (kg):</label>
            <div class="col-sm-4"> 
              <input type="number" class="form-control" id="bb" name='berat'>
            </div>
          </div>
          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-4">
              <button type="submit" class="btn btn-default">Hitung</button>  
              </center>
        </div><br>
        </form>
 

</div>

