<?php $this->load->view('templates/admin/header'); ?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header" data-background-color="purple">
						<h4 class="title">Update Status Pesanan</h4>
					</div>
					<div class="card-content">
						<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group label-floating">
										<label class="control-label">Nama Pemesan: </label>
										<input type="text" name="nama" class="form-control" required value="<?php echo $nama; ?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group label-floating">
										<label class="control-label">Hardware</label>
										<input type="text" name="merk" class="form-control" required value="<?php echo $merk; ?> <?php echo $tipe; ?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group label-floating">
										<label class="control-label">Status Pesanan </label><br>
										<input type="text" name="" class="form-control" required value="<?php echo $status; ?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group label-floating">
										<input type="radio" name="status" value="Sedang dikirim"> Sedang dikirim &nbsp;
										<input type="radio" name="status" value="Dibatalkan"> Dibatalkan
									</div>
								</div>
							</div>			
							<input type="hidden" name="id_pesan" value="<?php echo $id_pesan; ?>">
							<input type="hidden" name="id_hardware" value="<?php echo $id_hardware ?>">
							<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
							<a href="<?php echo site_url('Pesan')?>" class="btn btn-default">Cancel</a>
						</form>
					</div>
				</div>
			</div>
			<?php $this->load->view('templates/admin/footer'); ?>