<?php
/*
File Name    : Report.php
Date Created : 2018-08-27
Author 		 : Julián Zepeda
Description  : This is the controller to report the status from the refered people
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		date_default_timezone_set('America/Mexico_City');

		$this->load->model('Pros_model');
	}


	public function index()							
	{
		$ciphertext	= $this->input->get('d'); 								//Here catch the data sent by get method
		$name 		= base64_decode($ciphertext);							//Decode the info with base64 coder
		$name2		= array('reference'=>$name);		
		$data = $this->Pros_model->GetAll( $name2 );

		if (!empty($data))													//This is the validation that makes sure spam is not sent
		{
			$this->data['data'] = $data;
			$this->data['name'] = strip_tags($name2['reference']);
																			//Here load the respects views
			$this->load->view('dashboard/templates/header', $this->data); 
			$this->load->view('dashboard/report');
			$this->load->view('dashboard/templates/footer');

			
		}else{
			$this->output->set_status_header(404);							//If it was sent incorrect data show a 404 Error
		}
	}
		





}