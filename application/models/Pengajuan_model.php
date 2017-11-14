<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// nama file harus capital seperti nama kelas
class Pengajuan_model extends CI_Model {

	public function get_data($where="")
	{
		$data = $this->db->query('select * from pengajuan '.$where);
		return $data->result_array();
	}
	
	public function insert_data($data)
	{
		$res = $this->db->insert('pengajuan', $data);
		return $res;
	}

	public function delete_data($where)
	{
		$res = $this->db->delete('pengajuan', $where);
		return $res;
	}

	public function update_data($data, $where)
	{
		$res = $this->db->update('pengajuan', $data, $where);
		return $res;
	}
}