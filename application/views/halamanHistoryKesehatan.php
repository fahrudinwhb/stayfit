<div class="container">
<br><br>
  <div class="container text-center">    
  <h3>History Kesehatan</h3><br>
  
    <div class="container-fluid-gambarhistorykesehatan">
      <img src="<?php echo base_url(); ?>./uploads/<?php echo $profil[0]['FOTO']; ?>"class="img-rounded" width="170" height="170">
    </div>
    <br><br>
  </div>
  <table width="500px;" height="150px;" style="border-bottom: 3px solid ">
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><?php echo $profil[0]['NAMA_LENGKAP']; ?></td>
    </tr>
     <tr>
      <td>Username</td>
      <td>:</td>
      <td><?php echo $profil[0]['USERNAME']; ?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td>:</td>
      <td ><?php echo $profil[0]['EMAIL']; ?></td>
    </tr>
    <tr>
      <td><a href="<?php echo base_url(); ?>index.php/c_datamember/editProfilMember/<?php echo $profil[0]['ID_USER']; ?>"><button>edit profil</button></a></td>
    </tr>
  </table >

    


<br><br>

<div class="container">
<div class="container text-center"> 
  <h3 class="text-center">Tabel History IMT</h3>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th class="text-center">Tanggal</th>
        <th class="text-center">Indeks Masa Tubuh</th>
       <!--  <th class="text-center">Action</th> -->
      </tr>
    </thead>
    <tbody>
    <?php 
    foreach ($history['imt'] as $row) {
      ?>
      <tr>
        <td><?php echo $row['DATE']; ?></td>
        <td><?php echo $row['HISTORY_IMT']; ?></td>
        <!-- <td><a href="" ><span class="glyphicon glyphicon-trash"></span></a></td> -->
      </tr>
      <?php
      # code...
    }
     ?>
      
    </tbody>
  </table>
</div>
<br>
<div class="container">
<div class="container text-center"> 
  <h3 class="text-center">Tabel History Presentase Lemak</h3>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th class="text-center">Tanggal</th>
        <th class="text-center">Indeks Masa Tubuh</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    foreach ($history['lemak'] as $row) {
      ?>
      <tr>
        <td><?php echo $row['DATE']; ?></td>
        <td><?php echo $row['HISTORY_LEMAK']; ?></td>
      </tr>
      <?php
      # code...
    }
     ?>
      
    </tbody>
  </table>
  <a href="#" onClick="if(confirm('Anda yakin HAPUS semua data history ini? ')){document.location='<?php echo base_url()?>index.php/c_datamember/hapusHistory/<?php echo $profil[0]['ID_USER']; ?>'}"><span class="glyphicon glyphicon-trash"></span></a>
  </div>
  </div>
</div>