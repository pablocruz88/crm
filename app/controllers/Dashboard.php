<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		date_default_timezone_set('America/Mexico_City');

		$this->load->model('Sign_model');

		

	}

	public function index()
	{
		$this->load->view('dashboard/login');
	}

	public function sign()
	{
		$this->data['email']    = $this->input->post('email');
		$this->data['password'] = md5($this->input->post('password'));
		$this->data['status_']  = '1';

		$valid = $this->Sign_model->GetID($this->data);

		if(is_object($valid)){
			$newdata = array(
					'email'     => $this->data['email'],
					'id'        => $valid->id,
					'name'		=> $valid->name,
					'logged_in' => TRUE
			);
			$this->session->set_userdata($newdata);
			$return_ = array('title' => 'Bienvenido', 'text'=>'En un momento será redireccionado al panel.', 'code'=>'success');
		}else{
			$return_ = array('title' => 'Error', 'text'=>'Los datos ingresados son incorrectos.', 'code'=>'error');
		}

		$this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($return_));
	}
	
	public function logout(){
	   $this->session->sess_destroy();
	   redirect('Dashboard');
	}

	

}
