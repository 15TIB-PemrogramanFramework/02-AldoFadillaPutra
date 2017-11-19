<?php 
/**
* 
*/
class Konfirmasi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();        
		$this->load->model('Konfirmasi_model');
        $this->load->model('Pesan_model');
        $this->load->model('Hardware_model');
	}

	function index()
	{
		$data['konfirmasi'] = $this->Konfirmasi_model->ambil_data();
		$this->load->view('admin/Konfirmasi_list',$data);
	}

	function download($id){
        if(!empty($id)){   
            
            $fileInfo = $this->Konfirmasi_model->ambil_data_id($id);            
            $bukti_transfer = $fileInfo->bukti_transfer;            
            $file = 'assets/admin/uploads/'.$bukti_transfer;
            force_download($file, NULL);
        }
    }

    function konfirmasi ($id){
        $pesan = $this->Pesan_model->ambil_data_id($id);
        $data = array(
            'aksi'          => site_url('Konfirmasi/tambah'),
            'id_pesan'      => set_value('id_pesan',$pesan->id_pesan),
            'id_hardware'   => set_value('id_hardware',$pesan->id_hardware)
            );
        $this->load->view('user/Konfirmasi_pembayaran',$data);
    }


    function tambah(){
    	
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
                'bukti_transfer' 		=>$gbr['file_name'],
                'id_pesan' 				=> $this->input->post('id_pesan'),
				'rek_nama' 				=> $this->input->post('rek_nama'),
				'met_transfer' 			=> $this->input->post('met_transfer'),                 
                );
                $data1 = array(
                'status_pesan'          => 'Sedang diproses'                 
                );
                $id_hardware = $this->input->post('id_hardware');
                $this->Konfirmasi_model->tambah_data($data);
                $id_pesan = $this->input->post('id_pesan');
                $this->Pesan_model->edit_data($id_pesan,$data1);
                $this->Hardware_model->update_jumlah($id_hardware);
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Konfirmasi Berhasil !!</div></div>");
                redirect('Pesan/daftar_pesan');
            }else{                
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect('Pesan/daftar_pesan');
            }
        }
    }

}

 ?>