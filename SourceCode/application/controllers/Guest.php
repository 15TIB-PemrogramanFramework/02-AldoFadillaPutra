<?php
class Guest extends CI_Controller
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
		$this->load->view('Kategori_list',$data);
	}

	function mobo()
	{	
		$data['nama'] = "Mother Board";
		$data['hardware'] = $this->Hardware_model->data_mobo();
		$this->load->view('Kategori_list',$data);
	}

	function ssd()
	{
		$data['nama'] = "SSD";
		$data['hardware'] = $this->Hardware_model->data_ssd();
		$this->load->view('Kategori_list',$data);
	}

	function ram()
	{
		$data['nama'] = "RAM";
		$data['hardware'] = $this->Hardware_model->data_ram();
		$this->load->view('Kategori_list',$data);
	}

	function monitor()
	{
		$data['nama'] = "Monitor";
		$data['hardware'] = $this->Hardware_model->data_monitor();
		$this->load->view('Kategori_list',$data);
	}

	function search()
	{
		$keyword = $this->input->post('keyword');
		$data['hardware'] = $this->Hardware_model->cari_data($keyword);
		$this->load->view('Search_list',$data);
	}

	function hardware_detail($id)
	{
		$hardware = $this->Hardware_model->ambil_data_id($id);
		$data = array(
			'nama' 			=> set_value('nama',$hardware->nama_hardware),
			'merk' 			=> set_value('merk',$hardware->merk_hardware),
			'tipe'		 	=> set_value('tipe',$hardware->tipe_hardware),
			'jumlah'	 	=> set_value('jumlah',$hardware->jumlah_hardware),
			'harga' 		=> set_value('harga',$hardware->harga_hardware),
			'deskripsi' 	=> set_value('deskripsi',$hardware->deskripsi_hardware),
			'gambar' 		=> set_value('gambar',$hardware->gambar),
			'id_hardware' 	=> set_value('id_hardware',$hardware->id_hardware)
			);
		$this->load->view('Hardware_detail',$data);		
	}
}
?>