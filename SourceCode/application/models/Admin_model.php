<?php 
/**
* 
*/
class Admin_model extends CI_Model
{
	public $admin			= 'admin';
	public $id				= 'username';

	function __construct()
	{
		parent::__construct();
	}

	function cek_login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',md5($password));
		return $this->db->get($this->admin)->row();
	}
	
}
 ?>