<?php $this->load->view('templates/user/header'); ?>
<div class="typo codes">
<div class="container">
	<div class="grid_3 grid_4">
			<h3 class="w3ls-hdg">Transfer</h3>
			<div class="tab-content">
			Silahkan Transfer ke 1234 567 891 011 Atas Nama <b>PT Tunggal </b> Sejumlah <b>
				<?php					
					$tampil =  number_format($harga_hardware, 2, ',' ,'.');
					echo 'Rp '.$tampil; ?></b>
	</div>
	
</div><a href="<?php echo site_url('Pesan/daftar_pesan');?>" class="btn btn-default"><b>Kembali</b></a>
</div>
</div>
<?php $this->load->view('templates/user/footer'); ?>