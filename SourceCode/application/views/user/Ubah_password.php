<?php $this->load->view('templates/user/header'); ?>
<div class="typo codes">
	<div class="container">
		<div class="grid_3 grid_4"><?=$this->session->flashdata('pesan')?>
			<h3 class="w3ls-hdg">Ganti Password</h3>
			<div class="tab-content">
				<div class="tab-pane active" id="horizontal-form">
					<form class="form-horizontal" action="<?php echo site_url('Member/ubah_password_aksi')?>" method="POST" enctype="multipart/form-data" >
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Password Baru</label>
							<div class="col-sm-8">
								<input type="password" name="password" class="form-control1" id="focusedinput" placeholder="Password Baru" required>
							</div>						
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Ulangi Password Baru</label>
							<div class="col-sm-8">
								<input type="password" name="cpassword" class="form-control1" id="focusedinput" placeholder="Ulangi Password Baru" required>
							</div>						
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label"></label>
							<div class="col-sm-8">
								<input type="hidden" name="id_hardware" value="">
								<button class="btn btn-primary" type="submit">Konfirmasi</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div> 
	</div>
</div>

<?php $this->load->view('templates/user/footer'); ?>