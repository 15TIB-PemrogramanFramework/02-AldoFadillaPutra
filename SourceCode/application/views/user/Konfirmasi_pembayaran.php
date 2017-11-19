<?php $this->load->view('templates/user/header'); ?>
<div class="typo codes">
	<div class="container">
		<div class="grid_3 grid_4">
			<h3 class="w3ls-hdg">Konfirmasi Pembayaran</h3>
			<div class="tab-content">
				<div class="tab-pane active" id="horizontal-form">
					<form class="form-horizontal" action="<?php echo $aksi?>" method="POST" enctype="multipart/form-data" >
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Id Pesan</label>
							<div class="col-sm-8">
								<input type="text" name="id_pesan" class="form-control1" id="focusedinput" placeholder="Id Pesan" value="<?php echo $id_pesan;?>" readonly>
							</div>						
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Rekening Atas Nama</label>
							<div class="col-sm-8">
								<input type="text" name="rek_nama" class="form-control1" id="focusedinput" placeholder="Rekening Atas Nama" required>
							</div>						
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Metode Transfer</label>
							<div class="col-sm-8">
								<select name="met_transfer" class="form-control1">
									  <option value="ATM">ATM</option>
									  <option value="E-Banking">E-Banking</option>
									  <option value="Setor Tunai">Setor Tunai</option>
									</select>
							</div>						
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Bukti Transfer</label>
							<div class="col-sm-8">
								<input type="file" name="filefoto" class="form-control1" id="focusedinput" required>
							</div>						
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label"></label>
							<div class="col-sm-8">
								<input type="hidden" name="id_hardware" value="<?php echo $id_hardware ?>">
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