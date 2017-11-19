<?php 
/**
* 
*/
class Konfirmasi_model extends CI_Model
{
	public $konfirmasi		= 'konfirmasi';
	public $id				= 'id_konfirmasi';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('konfirmasi.id_konfirmasi, pesan.id_pesan, member.nama_member, konfirmasi.rek_nama, konfirmasi.met_transfer, konfirmasi.bukti_transfer');
        $this->db->from('konfirmasi');
        $this->db->join('pesan', 'konfirmasi.id_pesan = pesan.id_pesan');
        $this->db->join('member', 'pesan.id_member = member.id_member');
		$query = $this->db->get();
		return $query->result();
	}
	
	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->konfirmasi)->row();//1 data
	}

    function tambah_data($data)
    {
        return $this->db->insert($this->konfirmasi,$data);
    }

}

 ?>