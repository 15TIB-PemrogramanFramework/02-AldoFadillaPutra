<?php $this->load->view('templates/admin/header');?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<?=$this->session->flashdata('pesan')?>
				
					<div class="card card-plain">
						<div class="card-header" data-background-color="purple">
							<h4 class="title">Data Pesanan</h4>
						</div>
						<div class="card-content table-responsive">
							<table class="table table-hover">
								<thead class="text-primary">
				<tr>
					<th>ID Pesan</th>
					<th>Hardware</th>
					<th>Nama Pemesan</th>
					<th>Status</th>
					<th style="width: 96px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($pesan as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_pesan; ?></td>
					<td><?php echo $value->merk_hardware; ?> <?php echo $value->tipe_hardware; ?></td>
					<td><?php echo $value->nama_member; ?></td>
					<td><?php echo $value->status_pesan; ?></td>
					<td>
						<a href="<?php echo site_url('Pesan/delete/'.$value->id_pesan); ?>"
							class="btn btn-danger">
							<i class="material-icons">delete</i>
						</a>
						<a href="<?php echo site_url('Pesan/update/'.$value->id_pesan); ?>"
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
	