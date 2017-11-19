<?php $this->load->view('templates/admin/header'); ?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header" data-background-color="purple">
						<h4 class="title">Insert Data Hardware</h4>
					</div>
					<div class="card-content">
						<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group label-floating">
										<label class="control-label">Nama Hardware </label>
										<input type="text" name="" class="form-control" required value="<?php echo $nama; ?>" readonly>
									</div>
									<div class="form-group label-floating">
										<select name="nama" value="">
											<option value="<?php echo $nama; ?>">---Pilih Hardware---</option>
											<option value="Monitor">Monitor</option>
											<option value="VGA">VGA</option>
											<option value="SSD">SSD</option>
											<option value="RAM">RAM</option>
											<option value="Mother Board">Mother Board</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group label-floating">
										<label class="control-label">Merk Hardware </label>
										<input type="text" name="merk" class="form-control" required value="<?php echo $merk; ?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group label-floating">
										<label class="control-label">Tipe Hardware </label>
										<input type="text" name="tipe" class="form-control" required value="<?php echo $tipe; ?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group label-floating">
										<label class="control-label">Jumlah Hardware </label>
										<input type="text" name="jumlah" class="form-control" required value="<?php echo $jumlah; ?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group label-floating">
										<label class="control-label">Harga Hardware </label>
										<input type="text" name="harga" class="form-control" required value="<?php echo $harga; ?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group label-floating">
										<label class="control-label">Deskripsi Hardware </label>
										<textarea class="form-control" name="deskripsi" rows="5"><?php echo $deskripsi; ?></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									
										<label>Gambar Hardware </label>
										<input type="file" name="filefoto" value="">
									
								</div>
							</div>
							<input type="hidden" name="id_hardware" value="<?php echo $id_hardware; ?>">
							<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
							<a href="<?php echo site_url('Hardware')?>" class="btn btn-default">Cancel</a>
						</form>
					</div>
				</div>
			</div>
			<?php $this->load->view('templates/admin/footer'); ?>