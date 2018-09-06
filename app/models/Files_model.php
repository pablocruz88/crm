<?php

class Files_model extends CI_Model{// Files

	function GetAll($data)
	{
		$query = $this->db->get_where('files', $data);
		return $query->result();
	}

	function GetID($data)
	{
		$query = $this->db->get_where('files', $data);
		return $query->row();
	}

	function Insert($data)
	{
		$this->db->insert('files', $data);
		return $this->db->insert_id();
	}

	function Update($data, $where)
	{
		$this->db->update('files', $data, $where);
	}

	function Delete($data)
	{
		$this->db->delete('files', $data); 
	}

	
	
}

?>