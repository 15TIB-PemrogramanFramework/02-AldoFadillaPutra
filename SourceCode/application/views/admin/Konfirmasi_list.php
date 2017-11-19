<?php $this->load->view('templates/admin/header');?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-12 text-right">					
				</div>	
				<div class="card card-plain">
					<div class="card-header" data-background-color="purple">
						<h4 class="title">Data Konfirmasi</h4>
					</div>
					<div class="card-content table-responsive">
						<table class="table table-hover">
							<thead class="text-primary">
								<tr>
									<th>ID Konfirmasi</th>
									<th>ID Pesan</th>
									<th>Nama Pemesan</th>
									<th>Transfer Atas Nama</th>
									<th>Metode Transfer</th>
									<th>Bukti Transfer</th>
									<th style="width: 96px">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($konfirmasi as $key => $value) { ?>
								<tr>
									<td><?php echo $value->id_konfirmasi; ?></td>
									<td><a href="<?php echo site_url('Pesan/update/'.$value->id_pesan); ?>"><?php echo $value->id_pesan ?></a></td>
									<td><?php echo $value->nama_member; ?></td>
									<td><?php echo $value->rek_nama; ?></td>
									<td><?php echo $value->met_transfer; ?></td>
									<td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url()?>assets/admin/uploads/<?php echo $value->bukti_transfer; ?>"></td>
									<td>
										<a href="<?php echo site_url('Konfirmasi/download/'.$value->id_konfirmasi); ?>" class="btn btn-info">
											<i class="material-icons">file_download</i>
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
			