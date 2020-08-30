<?php 
	if ($tujuan == 0) {
		 redirect('c_hitung/fitness');
	}
	else{

	// // echo "data: ";print_r($data);echo "<br>";
	// print_r($tujuan);echo "<br>";
	// print_r($durasi);

	// $hasil = (($tujuan * 7000) - ($data[0]+$data[1]+$data[2])) / 1000;
	// echo "hasil : ".$hasil;
?>
	<div class="container" style="margin-top:70px; margin-bottom:70px; border:solid 1px;" >
 	<div class="container text-center">
 		<p>Untuk menurunkan berat badan sebesar <strong><?php print_r($tujuan)?> kg</strong></p>
 		<p>lakukan aktifitas tersebut 1 jam / hari selama</p>
 		

 		<?php 
 			$hasil = (($tujuan * 7000) - ($data[0]+$data[1]+$data[2])) / 1000;
			
 		 ?>

 		 <h1><?php echo $hasil ?> Hari</h1>


 	</div>
 	
 </div>
<?php 
}
 ?>

 