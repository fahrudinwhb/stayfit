<div class="container">
		<div class="row">
			<div class="span12">
				<h1>Tambah Produk</h1><br />
				<div class="row">
				<!--sidebar menu -->

					<?php $this->load->view('template/admin/sidebar'); ?>
					<!--end sidebar menu -->	
					<!-- form, content, etc -->
					<div class="span9">
						<div class=""><!-- basic tabs menu -->
							<ul class="nav nav-tabs">
								<li ><a href="<?php echo base_url(); ?>index.php/kontrollerListTipsKesehatan/getListTipsKesehatan/">Daftar Tips Kesehatan</a></li>
								<li class="active"><a href="<?php echo base_url(); ?>index.php/kontrollerListTipsKesehatan/getDataTipsKesehatan/">Tambah Tips Kesehatan</a></li>
								
							</ul>
						</div><!-- basic tabs menu -->
						
						
						<div class="well"><!-- div well & form -->
							<form class="form-horizontal" action="<?php echo base_url(); ?>index.php/kontrollerListTipsKesehatan/submitDataTipsKesehatan" method="POST" enctype="multipart/form-data">
							<fieldset>
							
								<div class="control-group"><!-- default input text -->
								<label class="control-label" for="input01">Judul</label>
								<div class="controls">
								<input placeholder="Ketik judul tips.." name="judul" type="text" class="input" id="input01" value="<?php echo set_value('judul'); ?>">
								</div>
								</div><!-- default input text -->
							
								<div class="control-group"><!-- default input text -->
	
									<label class="control-label" for="input02">Isi</label>
									<div class="controls">
										<!-- start ini untuk wysi rich text editor -->
										<textarea placeholder="Masukan deskripsi produk.." name="isi" style="width: 440px; height:340px;  rows="50" id="some-textarea""><?php echo set_value('deskripsi'); ?></textarea>
										<!-- end ini untuk wysi rich text editor -->	
										
									</div>
								</div><!-- default input text -->
								<div class="control-group"><!-- select option -->
									
								</div><!-- select option -->
								<div class="control-group"><!-- default input text -->
									<label class="control-label" for="input01">Gambar Produk</label>
									<div class="controls">
									<div class="alert alert-info">  
										<a class="close" data-dismiss="alert">x</a>  
										<strong>Info! </strong><br/>
										Gambar optimal pada resolusi 800x400 px<br/>
										Ukuran Maksimum file 1 MB, (disarankan ukuran dibawah 100kb)<br/>
										File yang diizinkan untuk upload .jpg, .jpeg, .png, .gif
									</div>
										<input type="file" class="input" id="input01" name="gambar_tips">
										 <span class="help-inline"><?php echo $error; ?></span>
									</div>
								</div><!-- default input text -->
							</fieldset>
								<div class="form-actions"><!-- button action -->
									<button type="submit" class="btn btn-primary">Simpan</button>
									<button class="btn">Batal</button>
								</div>
							</form>
						</div><!-- div without well class & form -->
						
					</div>
					<!-- form, content, etc -->
				</div>
			</div>
		</div>