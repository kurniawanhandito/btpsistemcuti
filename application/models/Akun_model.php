<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// nama file harus capital seperti nama kelas
class Akun_model extends CI_Model {

	public function get_data($where="")
	{
		$data = $this->db->query('select * from akun '.$where);
		return $data->result_array();
	}
	
	public function insert_data($data)
	{
		$res = $this->db->insert('akun', $data);
		return $res;
	}

	public function delete_data($where)
	{
		$res = $this->db->delete('akun', $where);
		return $res;
	}

	public function update_data($data, $where)
	{
		$res = $this->db->update('akun', $data, $where);
		return $res;
	}

	public function login($where)
	{
		$query = $this->db->get_where('akun', $where);
		return $query;
	}
}