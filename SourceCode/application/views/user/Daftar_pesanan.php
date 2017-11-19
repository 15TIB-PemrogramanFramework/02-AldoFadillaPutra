<?php $this->load->view('templates/user/header'); ?>
<div class="typo codes">
<div class="container">
	<div class="grid_3 grid_4">
			<h3 class="w3ls-hdg">Daftar Pesanan</h3>
			<div class="tab-content">

<?=$this->session->flashdata('pesan')?>
<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Id Pesan</th>
					<th>Hardware</th>
					<th>Gambar</th>
					<th>Status</th>
					<th>Harga</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($pesan as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_pesan; ?></td>
					<td><?php echo $value->merk_hardware; ?> <?php echo $value->tipe_hardware; ?></td>
					<td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url()?>assets/admin/uploads/<?php echo $value->gambar; ?>"></td>
					<td><?php echo $value->status_pesan; ?></td>
					<td>
						<?php
								$harga = $value->harga_hardware;
								$tampil =  number_format($harga, 2, ',' ,'.');
								echo 'Rp '.$tampil; ?>	
					</td>
					<td><div class="icon-box col-md-12"><a href="<?php echo site_url('Konfirmasi/konfirmasi/'.$value->id_pesan); ?>" class="btn btn-default"><b>Konfirmasi Pembayaran</b></a></div>
						<div class="icon-box col-md-12"><a href="<?php echo site_url('Pesan/informasi_transfer/'.$value->id_pesan); ?>" class="btn btn-default"><b>Informasi Pembayaran</b></a></div>
						</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
</div>
</div>
<?php $this->load->view('templates/user/footer'); ?>