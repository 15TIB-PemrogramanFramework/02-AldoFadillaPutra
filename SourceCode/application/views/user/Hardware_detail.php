<?php $this->load->view('templates/user/header'); ?>
<!-- single -->
	<div class="single">
		<div class="container">
			<div class="col-md-4 single-left">
				<h3 class="w3ls-hdg">Detail Hardware</h3>
				<div class="flexslider">
					<ul class="slides">
							<div class="thumb-image"> <img src="<?php echo site_url()?>assets/admin/uploads/<?php echo $gambar; ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
					</ul>
				</div>
				<!-- flexslider -->
					<script defer src="<?php echo base_url() ?>/assets/user/js/jquery.flexslider.js"></script>
					<link rel="stylesheet" href="<?php echo base_url() ?>/assets/user/css/flexslider.css" type="text/css" media="screen" />
					<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
				<!-- flexslider -->
				<!-- zooming-effect -->
					<script src="<?php echo base_url() ?>/assets/user/js/imagezoom.js"></script>
				<!-- //zooming-effect -->
			</div>
			<div class="col-md-8 single-right"><br>
				<h3><?php echo $merk; ?> <?php echo $tipe; ?></h3>				
				<div class="description">
					<h5><i>Deskripsi Hardware</i></h5>
					<p><?php echo nl2br($deskripsi);?></p>
				</div>				
					<div class="clearfix"> </div>
				</div>				
				<div class="simpleCart_shelfItem">
					<p><i class="item_price">
						<?php
							$tampil =  number_format($harga, 2, ',' ,'.');
							echo 'Rp '.$tampil; ?>
							
						</i></p>
					<form action="<?php echo site_url('Pesan/tambah/'.$id_hardware)?>" method="post">
					<input type="hidden" name="id_member" value="<?php echo $this->session->userdata('username');?> ">
					<input type="hidden" name="id_hardware" value="<?php echo $id_hardware; ?>">
					<input type="hidden" name="status" value="Menunggu Proses Pembayaran">
						<p><button type="submit" class="w3ls-cart">Pesan</button></p>
					</form>
				</div> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

<?php $this->load->view('templates/user/footer'); ?>