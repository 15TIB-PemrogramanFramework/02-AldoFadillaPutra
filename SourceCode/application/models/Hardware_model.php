<?php 
/**
* 
*/
class Hardware_model extends CI_Model
{
	public $admin			= 'admin';
	public $hardware		= 'hardware';
	public $id				= 'id_hardware';
	public $harga			= 'harga_hardware';
	public $nama			= 'nama_hardware';
	public $order			= 'ASC';
	public $order1			= 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	function cek_login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->admin)->row();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->hardware)->result();//banyak data
	}

	function top_product()
	{
		$this->db->order_by($this->harga,$this->order1);
		return $this->db->get($this->hardware)->result();//banyak data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->hardware,$data);
	}


	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->hardware);
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->hardware,$data);
	}

	function update_jumlah($id)
	{
		$this->db->where($this->id,$id);
		$this->db->set('jumlah_hardware', '`jumlah_hardware`-1', FALSE);
		return $this->db->update($this->hardware);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->hardware)->row();
	}

	function data_vga()
	{
		$this->db->where($this->nama,'vga');
		return $this->db->get($this->hardware)->result();
	}

	function data_mobo()
	{
		$this->db->where($this->nama,'Mother Board');
		return $this->db->get($this->hardware)->result();
	}

	function data_ssd()
	{
		$this->db->where($this->nama,'SSD');
		return $this->db->get($this->hardware)->result();
	}

	function data_ram()
	{
		$this->db->where($this->nama,'RAM');
		return $this->db->get($this->hardware)->result();
	}

	function data_monitor()
	{
		$this->db->where($this->nama,'Monitor');
		return $this->db->get($this->hardware)->result();
	}

	function cari_data($keyword)
	{
		$this->db->like('nama_hardware', $keyword);
		$this->db->or_like('merk_hardware', $keyword);
		$this->db->or_like('tipe_hardware', $keyword);
		return $this->db->get($this->hardware)->result();
	}
}
 ?>