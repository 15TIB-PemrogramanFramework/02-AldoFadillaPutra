<?php 
/**
* 
*/
class Pesan_model extends CI_Model
{
	public $pesan			= 'pesan';
	public $id				= 'id_pesan';
	public $id_member		= 'id_member';
	public $order			= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->pesan,$data);
	}

	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->pesan);
	}

	function ambil_data()
	{
		$this->db->select('pesan.id_pesan,  member.nama_member, hardware.merk_hardware, hardware.tipe_hardware, pesan.status_pesan');
        $this->db->from('pesan');
        $this->db->join('member', 'pesan.id_member = member.id_member');
        $this->db->join('hardware', 'pesan.id_hardware = hardware.id_hardware');
		$query = $this->db->get();
		return $query->result();
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->pesan,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		$this->db->select('pesan.id_pesan, hardware.id_hardware, member.nama_member, hardware.merk_hardware, hardware.tipe_hardware, pesan.status_pesan, hardware.harga_hardware');
        $this->db->from('pesan');
        $this->db->join('member', 'pesan.id_member = member.id_member');
        $this->db->join('hardware', 'pesan.id_hardware = hardware.id_hardware');
		$query = $this->db->get();
		return $query->row();
	}

	function pesanan_member($id)
	{
		$this->db->where('member.id_member',$id);
		$this->db->select('member.id_member, pesan.id_pesan, hardware.merk_hardware, hardware.tipe_hardware, hardware.gambar, pesan.status_pesan, hardware.harga_hardware');
        $this->db->from('pesan');
        $this->db->join('member', 'pesan.id_member = member.id_member');
        $this->db->join('hardware', 'pesan.id_hardware = hardware.id_hardware');
		$query = $this->db->get();
		return $query->result();
	}
}
 ?>