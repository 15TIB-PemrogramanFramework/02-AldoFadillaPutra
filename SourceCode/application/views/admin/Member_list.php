<?php $this->load->view('templates/admin/header');?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<?=$this->session->flashdata('pesan')?>
					
					<div class="card card-plain">
						<div class="card-header" data-background-color="purple">
							<h4 class="title">Data Member</h4>
						</div>
						<div class="card-content table-responsive">
							<table class="table table-hover">
								<thead class="text-primary">
									<th>ID Member</th>
									<th>E-mail</th>
									<th>Nama Member</th>
									<th>Password</th>
									<th>Alamat</th>
									<th style="width: 96px">Aksi</th>
									
								</thead>
								<tbody>
									<?php foreach ($member as $key => $value) { ?>
									<tr>
										<td><?php echo $value->id_member; ?></td>
										<td><?php echo $value->email_member; ?></td>
										<td><?php echo $value->nama_member; ?></td>
										<td><?php echo $value->password; ?></td>
										<td><?php echo $value->alamat_member; ?></td>
										<td>
											<a href="<?php echo site_url('Member/delete/'.$value->id_member); ?>"
												class="btn btn-danger">
												<i class="material-icons">delete</i>
											</a>
											<a href="<?php echo site_url('Member/update/'.$value->id_member); ?>"
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
				