<?php

class Pros_model extends CI_Model{// Prospects

	function GetAll($data)
	{
		$query = $this->db->get_where('prospects', $data);
		return $query->result();
	}

	function GetID($data)
	{
		$query = $this->db->get_where('prospects', $data);
		return $query->row();
	}

	function Insert($data)
	{
		$this->db->insert('prospects', $data);
		return $this->db->insert_id();
	}

	function Update($data, $where)
	{
		$this->db->update('prospects', $data, $where);
	}

	function Delete($data)
	{
		$this->db->delete('prospects', $data); 
	}

	function Like($data){
		$this->db->like($data, 'both');
		$query = $this->db->get('prospects');
		return $query->result();
	}
	
}

?>