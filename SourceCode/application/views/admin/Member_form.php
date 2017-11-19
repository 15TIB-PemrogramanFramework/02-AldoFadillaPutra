<?php $this->load->view('templates/admin/header'); ?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header" data-background-color="purple">
						<h4 class="title">Update Data Member</h4>
					</div>
					<div class="card-content">
						<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group label-floating">
										<label class="control-label">Email </label>
										<input type="email" name="email" class="form-control" required value="<?php echo $email; ?>" readonly >
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group label-floating">
										<label class="control-label">Password </label>
										<input type="password" name="password" class="form-control" required value="<?php echo $password; ?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group label-floating">
										<label class="control-label">Nama </label>
										<input type="text" name="nama" class="form-control" required value="<?php echo $nama; ?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group label-floating">
										<label class="control-label">Alamat </label>
										<input type="text" name="alamat" class="form-control" required value="<?php echo $alamat; ?>">
									</div>	
								</div>	
							</div>
							<input type="hidden" name="id_member" value="<?php echo $id_member; ?>">
							<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
							<a href="<?php echo site_url('Member/data_member')?>" class="btn btn-default">Cancel</a>
						</form>
					</div>
				</div>
			</div>
			<?php $this->load->view('templates/admin/footer'); ?>