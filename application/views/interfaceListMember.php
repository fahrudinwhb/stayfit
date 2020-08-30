<?php 
	if($this->session->userdata('id') == 1){
		?>
		<div class="container">
		<div class="row">
			<div class="span12">
				<h1>Daftar Member</h1><br />
				<div class="row">
					<!--sidebar menu -->
					<?php $this->load->view('template/admin/sidebar'); ?>
					<!--end sidebar menu -->
					<!-- table, content, etc -->
					<div class="span9">
						<div class=""><!-- basic tabs menu -->
						<?php if($this->session->flashdata('info')) { ?>
							<div class="alert alert-info">  
									<a class="close" data-dismiss="alert">x</a>  
									<strong>Info! </strong><?php echo $this->session->flashdata('info'); ?>  
							</div>
						<?php } ?>
							<ul class="nav nav-tabs">
								<li class="active"><a href="<?php echo base_url(); ?>administrator/contact_us/">Member</a></li>
							</ul>
						</div><!-- basic tabs menu -->
						<h5>Daftar Member, diurutkan berdasarkan data termutakhir.</h5><br />
					<h5>Semua Member berjumlah sebanyak: <?php echo $member['jumlah']; ?> record(s).</h5><br /> 

							 <!-- CSS and JS for table fixed header -->
							<table id="mytable" class="table table-striped table-bordered table-fixed-header"><!-- table default style -->
								<thead class="header">
									<th>No</th>
									<th>ID User</th>
									<th>Nama</th>
									<th>Username</th>
									<th>Email</th>
									<th>Jenis Kelamin</th>
									<th>Foto</th>
									<th>History IMT</th>
									<th>History Lemak</th>
									<th>Aksi</th>
								</thead>
								<tbody>
								<tr>
								<?php $no=1;
									// print_r($contact_us['allmember']->result());
									foreach ($member['allmember']->result() as $row){ 
								?>
									<td><?php echo $this->session->userdata('row')+$no; ?></td>
									<td><?php echo ucwords($row->ID_USER); ?></td>
									<td><?php echo $row->NAMA_LENGKAP; ?></td>
									<td><?php echo $row->USERNAME; ?></td>
									<td><?php echo $row->EMAIL; ?></td>
									<td><?php echo $row->JENIS_KELAMIN; ?></td>
									<td><?php echo $row->FOTO; ?></td>
									<td></td>
									<td></td>
									<td>
										<a href="#" onClick="<?php if(($this->session->userdata('id') == 1)){
																		?>if(confirm('Anda yakin HAPUS data ini? '))
																	{document.location='<?php echo base_url()?>index.php/c_datamember/getIdMember/<?php echo $row->ID_USER; ?>'}
											<?php					
																	}
																	else{redirect('kontrollerListTipsKesehatan');} 

											?>"
																	title="Hapus" >
											<i class="icon-trash"></i> Hapus
										</a> 
									</td>
								</tr>
								</tbody>
							<?php 
								$no++;
								} 
							?>
							</table><!-- table default style -->
								
							<div class="pagination">
								<ul>
									<?php echo $this->pagination->create_links(); ?>
								</ul>
							</div>
					</div>
					<!-- table, content, etc -->
				</div>
				
				<div class="row">
				
				</div>
				
			</div>
		</div>

		<?php
	}

	else{
		session_destroy();
		redirect('kontrollerListTipsKesehatan');
	}
 ?>

		