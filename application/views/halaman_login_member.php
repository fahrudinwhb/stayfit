<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Administrator Login Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="a snippet of a bootstrap login form with fully responsive supported. Feel free to test and report a bugs to me :)">
		<meta name="author" content="arianraptor">

		<!-- Open Graph -->

		<meta property="og:title" content="Bootstrap Responsive Login Form" /> 
		<meta property="og:image" content="http://arianraptor.com/bootstrap-responsive-login-form/imgsrc.png" /> 
		<meta property="og:description" content="a snippet of a bootstrap login form with fully responsive supported. Feel free to test and report a bugs to me :)" /> 
		<meta property="og:url" content="http://arianraptor.com/bootstrap-responsive-login-form/">

		<!-- Styles -->
		<link href="<?php echo base_url(); ?>assets/admin/css/bootstrap-responsive.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/admin/css/bootstrap-custom.css" rel="stylesheet">


		<!-- HTML5 Shim, for IE6-IE8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
		<![endif]-->


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
       	<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-38395785-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>

	</head>
	<body>    

	<!-- Navbar
    ================================================== -->

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container"> 

				<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
				<a  class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<a class="brand " href="#">tes</a>
				<div class="nav-collapse collapse">
					<ul class="nav pull-right">
					</ul>

				</div>
			</div>
		</div>
	</div>

	<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
			<div class="span6" id="form-login">
				<form class="form-horizontal well" method="POST" action="<?php echo base_url(); ?>index.php/c_user/getDataLoginMember">
					<fieldset> 
						<center><legend>Login Form</legend></center>
						<?php if(form_error('login') == FALSE){ ?>
							<div class="control-group">
						<?php }else{ ?>
							<div class="control-group warning">
						<?php } ?>
							<div class="control-label">
								<label><?php echo 'Username' ?></label>
							</div>
							<div class="controls">
								<input type ='text' name='username'>
							
							<!-- Help-block example -->
							
							</div>
						</div>
						
						<?php if(form_error('password') == FALSE){ ?>
							<div class="control-group">
						<?php }else{ ?>
							<div class="control-group warning">
						<?php }?>
							<div class="control-label">
									<label><?php echo 'Password'?></label>
							</div>
							<div class="controls">
								
									<input type='password' name='password'>
								<!-- Help-block example -->
								
							</div>
							
						</div>
						<div class="control-group">
							<div class="controls">
								
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">

							<button type="submit" id="submit" class="btn btn-primary button" >Masuk</button>
							<a href="<?php echo base_url(); ?>auth/forgot_password">	
							<button href="#" type="button" class="btn btn-secondary button" >Lupa Password</button>
							</a>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	</div>

    <!-- Footer
    ================================================== -->
	<hr />
		<div class="span12">
			<footer>
			<p></p>
			</footer>
		</div>
		<script src="<?php echo base_url(); ?>assets/admin/js/jquery.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-transition.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-alert.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-modal.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-dropdown.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-scrollspy.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-tab.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-tooltip.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-popover.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-button.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-collapse.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-carousel.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-typeahead.js"></script>

	</body>
</html>