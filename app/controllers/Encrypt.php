<?php
/*
File Name    : Encrypt.php
Date Created : 2018-08-23
Author 		 : Julián Zepeda
Description  : This is the controller that calls the model called "Encrypt_model" and encrypts the name of the person referenced to later see them

*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Encrypt extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		date_default_timezone_set('America/Mexico_City');

		$this->load->model('Encrypt_model');

		$this->data['logged_name']    = $this->session->name;
		$this->data['login_email']  = $this->session->email;
		$this->data['login_id']     = $this->session->id;
		$this->data['logged_in']    = $this->session->logged_in;
		if($this->data['login_email'] == '' || $this->data['login_id'] == '' || $this->data['logged_in'] == '' || $this->data['logged_name'] == '')
		{
			redirect('Dashboard');
		}
	}

	public function index(){			//This method returns all referenced unduplicated and with its respective hash code

		$this->data['a'] = $this->Encrypt_model->GetDistinct();
		$this->load->view('dashboard/templates/header', $this->data);
		$this->load->view('dashboard/links');
		$this->load->view('dashboard/templates/footer');

	}





}