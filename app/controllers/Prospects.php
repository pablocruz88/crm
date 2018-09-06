<?php
/*
File Name    : Prospects.php
Date Created : 
Author 		 : 
Description  :
Develop modification : Julián Zepeda
Description of modifications: The report method was added
Description of modifications: The validate_contract method was modified
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Prospects extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		date_default_timezone_set('America/Mexico_City');

		$this->load->model('Pros_model');

		$this->data['login_email']  = $this->session->email;
		$this->data['login_id']     = $this->session->id;
		$this->data['logged_in']    = $this->session->logged_in;
		$this->data['logged_name']    = $this->session->name;

		if($this->data['login_email'] == '' || $this->data['login_id'] == '' || $this->data['logged_in'] == '' || $this->data['logged_name'] == '')
		{
			redirect('Dashboard');
		}
	}

	public function index()
	{
		$this->data['data'] = $this->Pros_model->GetAll( array('status_'=>'1') );

		$this->load->view('dashboard/templates/header', $this->data);
		$this->load->view('dashboard/prospects');
		$this->load->view('dashboard/templates/footer');
	}

	public function report()							//This is the method added by Julián Zepeda
	{
		$ciphertext	= $this->input->get('d'); 			//Here catch the data sent by get method
		$name 		= base64_decode($ciphertext);		//Decode the info with base64 coder
		$name2		= array('reference'=>$name);		
		$data = $this->Pros_model->GetAll( $name2 );

		if (!empty($data))								//This is the validation that makes sure spam is not sent
		{
			$this->data['data'] = $data;
			$this->data['name'] = strip_tags($name2['reference']);
														//Here load the respects views
			$this->load->view('dashboard/templates/header', $this->data); 
			$this->load->view('dashboard/report');
			$this->load->view('dashboard/templates/footer');

			
		}else{
			$this->output->set_status_header(404);		//If it was sent incorrect data show a 404 Error
		}
		
	
	}	

	public function get_()
	{
		$this->data_w['id'] = $this->input->post('id');
		$this->data['p'] = $this->Pros_model->GetID($this->data_w);

		$this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($this->data['p']));
	}

	public function validate_contract()
	{
		$this->data_w['id']           = $this->input->post('prospect');
		
		$this->data['name']           = $this->input->post('name');
		$this->data['email']          = $this->input->post('email');
		$this->data['phone']          = $this->input->post('phone');
		$this->data['date']           = $this->input->post('date');
		$this->data['reference']      = $this->input->post('reference');
		
		
		$this->data['comitente']      = $this->input->post('comitente');
		$this->data['comisionista']   = $this->input->post('comisionista');
		$this->data['m_sociedad']     = $this->input->post('m_sociedad');
		$this->data['m_e_publica']    = $this->input->post('m_e_publica');
		$this->data['m_e_fecha']      = $this->input->post('m_e_fecha');
		$this->data['m_notario']      = $this->input->post('m_notario');
		$this->data['m_notaria']      = $this->input->post('m_notaria');
		$this->data['m_municipio']    = $this->input->post('m_municipio');
		$this->data['rfc_cliente']    = $this->input->post('rfc_cliente');
		$this->data['cuenta']         = $this->input->post('cuenta');
		$this->data['clabe']          = $this->input->post('clabe');
		$this->data['nombre_cuenta']  = $this->input->post('nombre_cuenta');
		$this->data['banco']          = $this->input->post('banco');
		$this->data['vigencia']       = $this->input->post('vigencia');
		$this->data['fecha_dia']      = $this->input->post('fecha_dia');
		$this->data['fecha_mes']      = $this->input->post('fecha_mes');
		$this->data['fecha_ano']      = $this->input->post('fecha_ano');
		$this->data['prospecto']      = $this->input->post('prospecto');
		$this->data['r_prospecto']    = $this->input->post('r_prospecto');
		$this->data['identificacion'] = $this->input->post('identificacion');
		$this->data['usd']            = $this->input->post('usd');
		//$this->data['usd_texto']      = $this->input->post('usd_texto');
		$this->data['tipo_cambio']    = $this->input->post('tipo_cambio');
		$this->data['idc']            = $this->input->post('idc');
		//$this->data['idc_texto']      = $this->input->post('idc_texto');
		$this->data['fecha_completa'] = $this->input->post('fecha_completa');
		$this->data['lugar']          = $this->input->post('lugar');
		$this->data['socio']          = $this->input->post('socio');
		$this->data['usd_texto_en']   = $this->input->post('usd_texto_en');
		$this->data['idc_texto_en']   = $this->input->post('idc_texto_en');
		$this->data['nda_pais']       = $this->input->post('nda_pais');
		$this->data['nda_direccion']  = $this->input->post('nda_direccion');
		$this->data['nda_email']      = $this->input->post('nda_email');
		$this->data['hash']           = $this->input->post('hash');

		$this->data_r['data'] = $this->Pros_model->Update( $this->data, $this->data_w );

		$this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($this->data_w));
	}

	function upload()
	{
		$this->load->model('Files_model');
		$this->load->library('upload');

		$this->data['type_c']      = $this->input->post('type_c');
		$this->data['id_prospect'] = $this->input->post('id_prospect');
		$this->data['status_']     = 1;
		$config['upload_path']     = './assets/uploads/';
		$config['allowed_types']   = 'doc|jpg|png|docx|jpeg|pdf';
		$config['encrypt_name']   = true;

        $this->upload->initialize($config);

        if(!$this->upload->do_upload('userfile'))
        {
                $this->data['error']    = $this->upload->display_errors();
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
                $this->data['file']    = $data['upload_data']['file_name'];
                $this->Files_model->insert($this->data);
        }

        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($this->data));

	}

	public function get_files()
	{
		$this->load->model('Files_model');

		$this->data['id_prospect'] = $this->input->post('id_prospect');
		
		$r = $this->Files_model->GetAll($this->data);

		$this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($r));
	}	



}

































