<!-- sidebar menu -->
					<div class="span2">
						<ul class="nav nav-list"><!-- menu with icon -->
							<li class="nav-header">
								Menu Admin
							</li>
							<?php if($this->uri->segment(2) == "contact_us") {?>
								<li class="active">
							<?php }else{ ?>
								<li >
							<?php } ?>
								<a href="<?php echo base_url(); ?>index.php/c_datamember/getDataMember">
									<i class="icon-comment"></i> Member
								</a>
							</li>
							<?php if($this->uri->segment(2) == "getListTipsKesehatan" || $this->uri->segment(2) == "getDataTipsKesehatan" || $this->uri->segment(2) == "submit_tambah_produk" || $this->uri->segment(2) == "edit_produk" || $this->uri->segment(2) == "kategori_produk" || $this->uri->segment(2) == "submit_edit_produk" || $this->uri->segment(2) == "edit_kategori_produk" || $this->uri->segment(2) == "submit_edit_kategori_produk" || $this->uri->segment(2) == "submit_tambah_kategori" ) { ?>
							<li class="active">
							<?php }else{ ?>
							<li >
							<?php } ?>
								<a href="<?php echo base_url(); ?>index.php/kontrollerListTipsKesehatan/getListTipsKesehatan">
									<i class="icon-list-alt"></i> Tips Kesehatan
								</a>
							</li>
							
							
						</ul><!-- end menu with icon -->
						<hr />
					</div>
					<!-- sidebar menu -->