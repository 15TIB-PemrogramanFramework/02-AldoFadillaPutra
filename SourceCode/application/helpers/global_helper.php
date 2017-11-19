<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return 
		'<li class="active">
			<a href="'.site_url('login').'"><i class="material-icons">dashboard</i><p>Dashboard</p></a>
		</li>
		<li>
			<a href="'.site_url('hardware').'"><i class="material-icons">content_paste</i><p>Hardware</p></a>
		</li>
		<li>
			<a href="'.site_url('member/data_member').'"><i class="material-icons">content_paste</i><p>Member</p></a>
		</li>
		<li>
			<a href="'.site_url('pesan').'"><i class="material-icons">content_paste</i><p>Pesan</p></a>
		</li>
		<li>
			<a href="'.site_url('konfirmasi').'"><i class="material-icons">content_paste</i><p>Konfirmasi</p></a>
		</li>';
	}

