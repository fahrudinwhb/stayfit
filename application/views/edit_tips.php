<?php 

 ?>

<?php $this->load->view('template/admin/sidebar'); ?>
<div class="container text-center " style="margin-left:70px;">
	<h1>Edit Tips Kesehatan</h1>
	<div style="margin-top:50px; margin-bottom:70px;">
		<form method="POST" action="<?php echo base_url(); ?>index.php/kontrollerListTipsKesehatan/editTipsKesehatan">
	<table>
			<input type="hidden" name="id" value="<?php echo $edit[0]['ID_TIPS'] ?>">
		<tr>
			<td>Judul</td>
			<td>:</td>
			<td><input type="text" name="judul" value="<?php echo $edit[0]['JUDUL'] ?>" required></td>
		</tr>
		<tr>
			<td>Isi</td>
			<td>:</td>
			<td><textarea name="isi"><?php echo $edit[0]['ISI']; ?></textarea></td>
		</tr>
		
		<tr>
			<td><input type="submit" value="submit"></td>
		</tr>
	</table>


</form>
	</div>
</div>
