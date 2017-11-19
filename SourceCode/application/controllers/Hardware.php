<?php 
/**
* 
*/
class Hardware extends CI_Controller
{
	var $limit=10;
	var $offset=10;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Hardware_model');
	}

	function index($page=NULL,$offset='',$key=NULL)
	{
		$data['hardware'] = $this->Hardware_model->ambil_data();
		$this->load->view('admin/Hardware_list',$data);
	}

	function tambah()
	{
		$data = array(
			'aksi' 				=> site_url('Hardware/tambah_aksi'),
			'nama' 				=> set_value('nama'),
			'merk' 				=> set_value('merk'),
			'tipe'		 		=> set_value('tipe'),
			'jumlah'	 		=> set_value('jumlah'),
			'harga' 			=> set_value('harga'),
			'deskripsi' 		=> set_value('deskripsi'),
			'id_hardware' 		=> set_value('id_hardware'),
			'button' 			=> 'Insert'
			);
		$this->load->view('admin/Hardware_form',$data);
	}

	function tambah_aksi()
	{

		
        $nmfile = "".time(); 
        $config['upload_path'] = './assets/admin/uploads/'; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['max_size'] = '3072';
        $config['max_width']  = '5000';
        $config['max_height']  = '5000';
        $config['file_name'] = $nmfile;

        $this->upload->initialize($config);
        
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data = array(
                'gambar' 				=>$gbr['file_name'],
                'nama_hardware' 		=> $this->input->post('nama'),
				'merk_hardware' 		=> $this->input->post('merk'),
				'tipe_hardware' 		=> $this->input->post('tipe'),
				'jumlah_hardware' 		=> $this->input->post('jumlah'),
				'harga_hardware' 		=> $this->input->post('harga'),
				'deskripsi_hardware' 	=> $this->input->post('deskripsi')                  
                );
                $this->Hardware_model->tambah_data($data);

                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
                redirect('Hardware'); 
            }else{
                
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect('Hardware');
            }
        }
	}

	function delete($id)
	{
		$this->Hardware_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
                redirect('Hardware');
	}

	function update($id)
	{
		$hardware = $this->Hardware_model->ambil_data_id($id);
		$data = array(
			'aksi' 					=> site_url('Hardware/update_aksi'),
			'nama' 					=> set_value('nama',$hardware->nama_hardware),
			'merk' 					=> set_value('merk',$hardware->merk_hardware),
			'tipe'		 			=> set_value('tipe',$hardware->tipe_hardware),
			'jumlah'	 			=> set_value('jumlah',$hardware->jumlah_hardware),
			'harga' 				=> set_value('harga',$hardware->harga_hardware),
			'deskripsi' 			=> set_value('deskripsi',$hardware->deskripsi_hardware),
			'id_hardware' 			=> set_value('id_hardware',$hardware->id_hardware),
			'button' 				=> 'Update'
			);
		$this->load->view('admin/Hardware_form',$data);		
	}

	function update_aksi()
	{
		
        $nmfile = "".time();
        $config['upload_path'] = './assets/admin/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['max_size'] = '3072';
        $config['max_width']  = '5000';
        $config['max_height']  = '5000';
        $config['file_name'] = $nmfile;
        $this->upload->initialize($config);
        
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data = array(
                'gambar' 				=> $gbr['file_name'],
                'nama_hardware' 		=> $this->input->post('nama'),
				'merk_hardware' 		=> $this->input->post('merk'),
				'tipe_hardware' 		=> $this->input->post('tipe'),
				'jumlah_hardware' 		=> $this->input->post('jumlah'),
				'harga_hardware' 		=> $this->input->post('harga'),
				'deskripsi_hardware' 	=> $this->input->post('deskripsi')                  
                );
                $id_hardware = $this->input->post('id_hardware');
				$this->Hardware_model->edit_data($id_hardware,$data);
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Update data berhasil !!</div></div>");
                redirect('Hardware'); 
            }else{
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Update data gagal !!</div></div>");
                redirect('Hardware');
            }
        }
        else
        {
        	$data = array(
                'nama_hardware' 		=> $this->input->post('nama'),
				'merk_hardware' 		=> $this->input->post('merk'),
				'tipe_hardware' 		=> $this->input->post('tipe'),
				'jumlah_hardware' 		=> $this->input->post('jumlah'),
				'harga_hardware' 		=> $this->input->post('harga'),
				'deskripsi_hardware' 	=> $this->input->post('deskripsi')                  
                );

        	$id_hardware = $this->input->post('id_hardware');
			$this->Hardware_model->edit_data($id_hardware,$data);

            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Update data berhasil !!</div></div>");
            redirect('Hardware');
        }
	}

	function detail($id)
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
		$this->load->view('user/Hardware_detail',$data);		
	}	
}

 ?>