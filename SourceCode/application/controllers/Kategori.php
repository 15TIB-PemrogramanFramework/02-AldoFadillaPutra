<?php 
/**
* 
*/
class Kategori extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Member_model');
		$this->load->model('Hardware_model');
	}

	function index()
	{
		$data['hardware'] = $this->Hardware_model->ambil_data();
		$data['member'] = $this->Member_model->ambil_data();
	}

	function vga()
	{
		$data['nama'] = "VGA";
		$data['hardware'] = $this->Hardware_model->data_vga();
		$this->load->view('user/Kategori_list',$data);
	}

	function mobo()
	{	
		$data['nama'] = "Mother Board";
		$data['hardware'] = $this->Hardware_model->data_mobo();
		$this->load->view('user/Kategori_list',$data);
	}

	function ssd()
	{
		$data['nama'] = "SSD";
		$data['hardware'] = $this->Hardware_model->data_ssd();
		$this->load->view('user/Kategori_list',$data);
	}

	function ram()
	{
		$data['nama'] = "RAM";
		$data['hardware'] = $this->Hardware_model->data_ram();
		$this->load->view('user/Kategori_list',$data);
	}

	function monitor()
	{
		$data['nama'] = "Monitor";
		$data['hardware'] = $this->Hardware_model->data_monitor();
		$this->load->view('user/Kategori_list',$data);
	}

	function search()
	{
		$keyword = $this->input->post('keyword');
		$data['hardware'] = $this->Hardware_model->cari_data($keyword);
		$this->load->view('user/Search_list',$data);
	}
}

 ?>