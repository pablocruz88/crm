<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		date_default_timezone_set('America/Mexico_City');

		$this->load->model('Pros_model');
	}

	public function index()
	{
		$this->load->view('survey/index');
	}

	public function save()
	{
		$this->data['name']             = $this->input->post('name');
		$this->data['email']            = $this->input->post('email');
		$this->data['phone']            = $this->input->post('phone');
		//$this->data['address']          = $this->input->post('address');
		$this->data['reference']        = $this->input->post('reference');
		$this->data['contact_method']   = $this->input->post('contact_method');
		$this->data['interest_level']   = $this->input->post('interest_level');
		$this->data['join_investment']  = $this->input->post('join_investment');
		$this->data['investment_level'] = $this->input->post('investment_level');
		$this->data['date']             = date('Y-m-d H:i:s');
		$this->data['status_']          = 1;

		/*if (!$this->input->is_ajax_request()) {
		   exit('No direct script access allowed');
		}*/

		if($this->data['name'] != '' && $this->data['email'] != '' && $this->data['phone'])
		{

			$this->db->trans_begin();

			$this->Pros_model->Insert($this->data);

			if ($this->db->trans_status() === FALSE)
			{
				$this->db->trans_rollback();
				$return_ = array('title' =>  'Error', 'text' => 'Ocurrio un error, favor de intentarlo nuevamente.', 'code' => 'error');
			}
			else
			{
			    $this->db->trans_commit();
			    $return_ = array('title' =>  'Gracias', 'text' => 'Agradecemos tu tiempo para poder ofrecer nuestro conocimiento en el mercado de cryptomonedas y nuestro proyecto.', 'code' => 'success');
			}

		}else{
			$return_ = array('title' =>  'Advertencia', 'text' => 'Los campos de Nombre, Email y Tel. Celular son obligatorios.', 'code' => 'error');
		}

		$this->load->library('email');

		$config['protocol']    = 'smtp';
		$config['smtp_host']   = 'smtp.gmail.com';
		$config['smtp_user']   = 'ideas.reward@gmail.com';
		$config['smtp_pass']   = 'SysPr0m2017_';
		$config['smtp_port']   = 465;
		$config['mailtype']    = 'html';
		$config['smtp_crypto'] = 'ssl';
		$config['newline']     = "\r\n";
		$config['crlf']        = "\r\n";

		$html = '<strong>Nombre:</strong> '.$this->data['name'].'<br>
				<strong>Email:</strong> '.$this->data['email'].'<br>
				<strong>Celular:</strong> '.$this->data['phone'].'<br>
				<strong>Referencia:</strong> '.$this->data['reference'].'<br>
				<strong>Método de contacto:</strong> '.$this->data['contact_method'].'<br>
				<strong>Nivel de interes:</strong> '.$this->data['interest_level'].'<br>
				<strong>¿Quieres invertir?:</strong> '.$this->data['join_investment'].'<br>
				<strong>Nivel de inversión:</strong> '.$this->data['investment_level'].'<br>
				<strong>Día:</strong> '.$this->data['date'];

		$cc_ = array('pedro@ideasreward.com', 'alejandro@ideasreward.com', 'jcruz@ideasreward.com');

		$this->email->initialize($config);
		$this->email->from('ideas.reward@gmail.com', 'Ideas Reward');
		$this->email->to('miguel@ideasreward.com');
		$this->email->cc($cc_);
		$this->email->subject('Nuevo prospecto');
		$this->email->message($html);
		$this->email->send();

		$this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($return_));
	}


}
