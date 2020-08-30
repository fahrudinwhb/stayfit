<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registrasi</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/registrasi/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/registrasi/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/registrasi/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/registrasi/css/style.css">

    <body>

		<!-- Top menu -->

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    
                    <div class="row">
                    	<div class="col-sm-6 phone">
                    		</br><img src="<?php echo base_url(); ?>assets/registrasi/img/iphone.png" alt="" style="margin-top:50px;">
                    	</div>
                        <div class="col-sm-5 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Register to our App</h3>
                            		<p>Fill in the form below to get instant access:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <?php echo form_open_multipart('c_user/getDataRegistrasi'); 
			                    	 
			                    ?>
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-name">Nama</label>
			                        	<input type="text" name="form-name" placeholder="Nama Lengkap..." class="form-name form-control" id="form-name" required>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username" required>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password" required>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-email">Email</label>
			                        	<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email" required>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-jeniskelamin">Jenis Kelamin</label>
			                        	<input type="text" name="form-jeniskelamin" placeholder="Jenis kelamin..." class="form-jeniskelamin form-control" id="form-jeniskelamin" required>
			                        </div>
			                        <div class="control-group"><!-- default input text -->
										<label class="control-label" for="input01">Foto</label>
											<div class="controls">
												<div class="alert alert-info">  
													<a class="close" data-dismiss="alert">x</a>  
													<strong>Info! </strong><br/>
										Gambar optimal pada resolusi 800x400 px<br/>
										Ukuran Maksimum file 1 MB, (disarankan ukuran dibawah 100kb)<br/>
										File yang diizinkan untuk upload .jpg, .jpeg, .png, .gif
									</div>
									<input type="file" class="input" id="input01" name="foto">
										 <span class="help-inline"></span>
									</div>
								</div></br></br>
			                        <button type="submit" class="btn">Sign me up!</button>
			                        <button type="submit" class="btn" style="margin-left:200px;">Back</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <!-- Javascript -->
        <script src="<?php echo base_url(); ?>assets/registrasi/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/registrasi/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/registrasi/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/registrasi/js/retina-1.1.0.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/registrasi/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>