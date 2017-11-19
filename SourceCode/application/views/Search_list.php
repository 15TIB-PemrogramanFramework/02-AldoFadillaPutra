<?php $this->load->view('templates/guest/header'); ?>
    <!-- banner -->
	<div class="banner">
		<div class="container">
			
		</div>
	</div>
	<!-- //banner -->	

	<div class="new-products">
		<div class="container">
			<h3>Hasil Pencarian</h3>
			<div class="agileinfo_new_products_grids">

				<?php foreach ($hardware as $key => $value) { ?>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="<?php echo site_url()?>assets/admin/uploads/<?php echo $value->gambar; ?>" alt=" " class="img-responsive" />
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								
							</div>
						</div>
						<h5><a href="<?php echo site_url('Guest/hardware_detail/'.$value->id_hardware)?>"><?php echo $value->merk_hardware; ?> <?php echo $value->tipe_hardware; ?></a></h5>
						<div class="simpleCart_shelfItem">
							<p><i class="item_price">
								<?php
								$harga = $value->harga_hardware;
								$tampil =  number_format($harga, 2, ',' ,'.');
								echo 'Rp '.$tampil; ?>
									
								</i></p>
							<form action="<?php echo site_url('Guest/hardware_detail/'.$value->id_hardware)?>" method="post">  
								<button type="submit" class="w3ls-cart">Detail</button>
							</form>
						</div>
					</div>
				</div>
				<?php } ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //new-products -->
    <?php $this->load->view('templates/guest/footer'); ?>