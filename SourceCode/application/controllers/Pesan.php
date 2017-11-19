<?php 
/**
* 
*/
class Pesan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();		
    	$this->load->model('Pesan_model');
		$this->load->model('Hardware_model');
	}

	function index()
	{
		$data['pesan'] = $this->Pesan_model->ambil_data();
		$this->load->view('admin/Pesan_list',$data);
	}

	function delete($id)
	{
		$this->Pesan_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
        redirect('Pesan');
	}

	function update($id)
	{
		$pesan = $this->Pesan_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('Pesan/update_aksi'),
			'status' 			=> set_value('status',$pesan->status_pesan),
			'nama' 				=> set_value('member.nama_member',$pesan->nama_member),
			'merk' 				=> set_value('hardware.merk_hardware',$pesan->merk_hardware),
			'tipe' 				=> set_value('hardware.tipe_hardware',$pesan->tipe_hardware),
			'id_hardware'		=> set_value('hardware.id_hardware',$pesan->id_hardware),
			'id_pesan' 			=> set_value('id_pesan',$pesan->id_pesan),
			'button' 			=> 'Update'
			);
		$this->load->view('admin/Pesan_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'status_pesan' 		=> $this->input->post('status')
			);	
		$id_pesan = $this->input->post('id_pesan');
		$id_hardware = $this->input->post('id_hardware');
		$this->Pesan_model->edit_data($id_pesan,$data);			

		if (in_array('Sedang dikirim', $data, true)) {
			$this->Hardware_model->update_jumlah($id_hardware);		
		}

		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Status pesanan berhasil diubah!!</div></div>");
        redirect('pesan');
	}

	function tambah($id)
	{
		$data = array(		
			'id_hardware' 		=> $this->input->post('id_hardware'),
			'id_member' 		=> $this->input->post('id_member'),
			'status_pesan'	 	=> $this->input->post('status')
			);
		$this->Pesan_model->tambah_data($data);
		redirect('Pesan/transfer',$data);
	}

	function daftar_pesan()
	{
		$id = $this->session->userdata('username');
		$data['pesan'] = $this->Pesan_model->pesanan_member($id);
		if(!empty($data)){
			$this->load->view('user/Daftar_pesanan',$data);
		}

		else{
			$data['nama'] = "VGA";
			$this->load->view('user/Daftar_pesanan',$data);
		}
		
	}

	function transfer()
	{
        $this->load->view('user/Transfer');
	}

	function informasi_transfer($id){
        $pesan = $this->Pesan_model->ambil_data_id($id);
        $data = array(
        	'harga_hardware'		=> $pesan->harga_hardware,
            'id_pesan'    	  		=> set_value('id_pesan',$pesan->id_pesan),
            );
        $this->load->view('user/Informasi_transfer',$data);
    }
}

 ?>