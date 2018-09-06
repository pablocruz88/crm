<?php
/*
File Name    : Encrypt_model.php
Date Created : 2018-08-23
Author 		 : Julián Zepeda
Description  : This model contains the method to make the call to the database of the referenced without being repeated
*/
class Encrypt_model extends CI_Model{

function GetDistinct()
{
	$query = $this->db->query("SELECT DISTINCT reference FROM prospects;");		//This is the query that run
		
	return $query->result();
}
		

}


?>