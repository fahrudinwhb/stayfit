<div class="container text-center">    
  <h3  style="margin-top:50px;">Hitung Presentase Lemak Tubuh</h3><br>
</div>
  <br><br>
      
        <center>
          
          <div class="container"  >

            <div class="hasil" >
              

                <table  width="500px;" style="background-color:grey;" >
            
            <tr>
              <td width="100px;" style="text-indent:30px;">Hasil</td>
              <td width="10px;">:</td>
              <td><?php echo $hasil; ?></td>
            </tr>
            <tr>
              <td style="text-indent:30px;">Range</td>
               <td>:</td>
              <td><?php echo $range; ?></td>
            </tr>
            <tr>
              <td style="text-indent:30px;">Solusi</td>
               <td>:</td>
              <td><?php echo $solusi ?></td>
            </tr>
          </table>
          
            <a href="<?php echo base_url(); ?>index.php/c_hitung/simpanDataLemak/<?php echo $hasil ?>"><button type="submit" class="btn btn-default" style="margin-top:30px;">Simpan</button></a><br>
            </div>
          

        </div>
        </center>
         

      
          
         
      </form>
