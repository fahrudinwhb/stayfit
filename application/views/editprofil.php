<?php 
 ?>
<!-- <form method="POST" action="<?php echo base_url(); ?>index.php/c_datamember/konfirmasiEditProfil">
	<table>
			<input type="hidden" name="id" value="<?php echo $edit[0]['ID_USER'] ?>">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" value ="<?php echo $edit[0]['NAMA_LENGKAP']; ?>" required></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="username" value ="<?php echo $edit[0]['USERNAME']; ?>"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="email" name="email" value ="<?php echo $edit[0]['EMAIL']; ?>"></td>
		</tr>
		<tr>
			<td><input type="submit" value="submit"></td>
		</tr>
	</table>


</form> -->
<div style="margin-top:50px; margin-bottom:70px;">
	<center><h1 style="margin-bottom:30px;">Edit Profil</h1><hr></center>
	<form class="form-horizontal" role="form" method="POST" action="<?php echo base_url(); ?>index.php/c_datamember/konfirmasiEditProfil">
          <input type="hidden" name="id" value="<?php echo $edit[0]['ID_USER'] ?>">
          <div class="container" style="margin-left:250px; " height="500px;">
          <center>
          <div class="form-group">
            <label class="control-label col-sm-2" for="tb">Nama:</label>
            <div class="col-sm-4"> 
              <input type="text" name="nama" value ="<?php echo $edit[0]['NAMA_LENGKAP']; ?>" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="tb">Username:</label>
            <div class="col-sm-4"> 
              <input type="text" name="username" value ="<?php echo $edit[0]['USERNAME']; ?>" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="tb">Email:</label>
            <div class="col-sm-4"> 
              <input type="email" name="email" value ="<?php echo $edit[0]['EMAIL']; ?>" required>
            </div>
          </div>
          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-4">
              <button type="submit" class="btn btn-default">Simpan</button>  
              </center>
        </div><br>
	</form>
</div>

