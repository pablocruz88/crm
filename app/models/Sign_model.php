<?php

class Sign_model extends CI_Model{

	function GetAll($data)
	{
		$query = $this->db->get_where('users', $data);
		return $query->result();
	}

	function GetID($data)
	{
		$query = $this->db->get_where('users', $data);
		return $query->row();
	}

	function Insert($data)
	{
		$this->db->insert('users', $data);
		return $this->db->insert_id();
	}

	function Update($data, $where)
	{
		$this->db->update('users', $data, $where);
	}

	function Delete($data)
	{
		$this->db->delete('users', $data); 
	}
	
}

?>