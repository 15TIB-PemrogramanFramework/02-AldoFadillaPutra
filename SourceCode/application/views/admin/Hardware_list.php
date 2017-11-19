<?php $this->load->view('templates/admin/header');?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<?=$this->session->flashdata('pesan')?>
				<div class="col-md-12 text-right">
					<a href="<?php echo site_url('hardware/tambah'); ?>" class="btn btn-primary" 
						style="margin-top:20px; margin-bottom:20px">
						<i class="fa fa-plus-circle"></i> Insert</a>
					</div>	
					<div class="card card-plain">
						<div class="card-header" data-background-color="purple">
							<h4 class="title">Data Hardware</h4>
						</div>
						<div class="card-content table-responsive">
							<table class="table table-hover">
								<thead class="text-primary">
									<th style="width: 10px">ID</th>
									<th>Nama</th>
									<th>Merk</th>
									<th>Tipe</th>
									<th>Jumlah</th>
									<th>Harga</th>
									<th>Deskripsi</th>
									<th style="width:200px">Gambar</th>
									<th style="width: 96px">Aksi</th>
								</thead>
								<tbody>
									<?php foreach ($hardware as $key => $value) { ?>
									<tr>
										<td><?php echo $value->id_hardware; ?></td>
										<td><?php echo $value->nama_hardware; ?></td>
										<td><?php echo $value->merk_hardware; ?></td>
										<td><?php echo $value->tipe_hardware; ?></td>
										<td><?php echo $value->jumlah_hardware; ?></td>
										<td><?php
												$harga = $value->harga_hardware;
												$tampil =  number_format($harga, 2, ',' ,'.');
												echo 'Rp '.$tampil; ?>
										</td>
										<td><?php echo nl2br($value->deskripsi_hardware);?></td>
										<td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url()?>assets/admin/uploads/<?php echo $value->gambar; ?>"></td>
										<td>
											<a href="<?php echo site_url('Hardware/delete/'.$value->id_hardware); ?>"
												class="btn btn-danger">
												<i class="material-icons">delete</i>
											</a>
											<a href="<?php echo site_url('Hardware/update/'.$value->id_hardware); ?>"
												class="btn btn-warning">
												<i class="material-icons">edit</i>
											</a>
										</td>	
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>



				<?php $this->load->view('templates/admin/footer'); ?>
