<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="<?php echo base_url(); ?>index.php/c_hitung/hitung_fitnes">
		<table>
			<tr>
				<td>Tujuan Berat Badan</td>
				<td>:</td>
				<td><input type="number" name="tujuan"></td>
			</tr>
			<tr>
				<td>Aktifitas</td>
				<td>:</td>
				<td><input type="checkbox" name="check1" value="1000">joging<br></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="checkbox" name="check2" value="1000">skipping<br>
					<input type="checkbox" name="check3" value="1000">sepeda<br></td>
			</tr>
			<tr>

				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
		
	</form>
</body>
</html>