<?php $this->load->view('templates/user/header'); ?>
<div class="typo codes">
	<div class="container">
		<div class="grid_3 grid_4"><?=$this->session->flashdata('pesan')?>
			<h3 class="w3ls-hdg">Ubah Password</h3>
			<div class="tab-content">
				<div class="tab-pane active" id="horizontal-form">
					<form class="form-horizontal" action="<?php echo $aksi?>" method="POST" enctype="multipart/form-data" >
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-8">
								<input type="text" name="nama" class="form-control1" id="focusedinput" value="<?php echo $nama_member ?>" required>
							</div>						
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
							<div class="col-sm-8">
								<input type="text" name="alamat" class="form-control1" id="focusedinput" value="<?php echo $alamat_member ?>" required>
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