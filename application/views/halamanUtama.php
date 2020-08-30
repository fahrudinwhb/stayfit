<div class="container text-center">    
  <h1 style="margin-top:80px;">Health Tips</h1><br>

<div class="container">    
  <div class="row">

<?php 
foreach ($tips_kes['alltips']->result() as $row) {
      
      ?>
      <div class="col-sm-4">
      <div class="panel panel-primary">

        <div class="panel-heading"><?php echo $row->JUDUL; ?></div>
        <div class="panel-body"><img src="<?php echo base_url(); ?>./uploads/<?php echo $row->GAMBAR_TIPS; ?>" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><?php echo substr(($row->ISI),0,50); ?>...
        <a href="<?php echo base_url(); ?>index.php/kontrollerListTipsKesehatan/detailTips/<?php echo $row->ID_TIPS; ?>">><br>See More</a></div>
      </div>
    </div>
      <?php

    
  # code...
    } 
      ?>
    
  
   
  </div>
</div><br>
</div>
