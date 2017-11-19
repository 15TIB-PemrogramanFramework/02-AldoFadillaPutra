<?php 
/**
* 
*/
class Member extends CI_Controller
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

	function daftarhalaman()
	{
		$this->load->view('user/Daftar');
	}

	function data_member()
	{
		
		$data['member'] = $this->Member_model->ambil_data();
		$this->load->view('admin/Member_list',$data);
	}

	
	function daftar_aksi()
	{
		$data = array(
			'email_member' 		=> $this->input->post('email'),
			'password'		 	=> md5($this->input->post('password')),
			'nama_member' 		=> $this->input->post('nama'),
			'alamat_member' 	=> $this->input->post('alamat')
			);

		$cek_email_member = $this->Member_model->cek_email($this->input->post('email'));

		if(empty($cek_email_member))
			{
				$this->form_validation->set_rules('email', 'Email', 'required|trim');
				$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]');
				$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');

				if ($this->form_validation->run() == FALSE)
				{			
					$this->session->set_flashdata("daftar", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Pendaftaran gagal !!<br>Password tidak sesuai</div></div>");
					redirect('Home');
				}
				else
				{
					$this->Member_model->tambah_data($data);
					$this->session->set_flashdata("daftar", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Pendaftaran berhasil !!</div></div>");
					redirect('Home');
				}
			}
		else 
			{
				$this->session->set_flashdata("daftar", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Email sudah terdaftar !!</div></div>");
				redirect('Home');
			}
	}

	function login()
	{
		$this->load->view('user/Login');
	}

	function delete($id)
	{
		$this->Member_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
		redirect(site_url('Member/data_member'));
	}

	function update($id)
	{
		$member = $this->Member_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('Member/update_aksi'),
			'email' 			=> set_value('email',$member->email_member),
			'password' 			=> set_value('password',$member->password),
			'nama'		 		=> set_value('nama',$member->nama_member),
			'alamat' 			=> set_value('alamat',$member->alamat_member),
			'id_member' 		=> set_value('id_member',$member->id_member),
			'button' 			=> 'Update'
			);
		$this->load->view('admin/Member_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'email_member' 		=> $this->input->post('email'),
			'password'		 	=> $this->input->post('password'),
			'nama_member' 		=> $this->input->post('nama'),
			'alamat_member' 	=> $this->input->post('alamat')
			);	
		$id_member = $this->input->post('id_member');
		$this->Member_model->edit_data($id_member,$data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('Member/data_member');
	}

	function ubah_password()
	{
		$this->load->view('user/Ubah_password');
	}

	function ubah_password_aksi()
	{
		$data = array(			
			'password'		 => md5($this->input->post('password'))
			);	
		$username = $this->session->userdata('username');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');

		if ($this->form_validation->run() == FALSE)
			{			
				$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Password tidak sesuai</div></div>");
				redirect('Member/ubah_password');
			}
		else
			{
				$this->Member_model->ubah_password($username,$data);
				$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Ganti password berhasil !!</div></div>");
				redirect('Member/ubah_password');
			}
	}

	function ubah_datadiri()
	{
		$id = $this->session->userdata('username');
		$member = $this->Member_model->ambil_data_id($id);
		$data = array(
			'aksi' 					=> site_url('Member/ubah_datadiri_aksi'),
			'nama_member'		 	=> set_value('nama_member',$member->nama_member),
			'alamat_member' 		=> set_value('alamat_member',$member->alamat_member),
			'button' 				=> 'Update'
			);		
		$this->load->view('user/Ubah_datadiri',$data);
	}

	function ubah_datadiri_aksi()
	{
		$data = array(
			'nama_member' 		=> $this->input->post('nama'),
			'alamat_member' 	=> $this->input->post('alamat')
			);	
		$id = $this->session->userdata('username');
		$this->Member_model->edit_data($id,$data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('Member/ubah_datadiri');
	}
}
 ?>