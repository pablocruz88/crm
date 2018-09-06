<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contract extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		date_default_timezone_set('America/Mexico_City');

		$this->load->model('Pros_model');
    $this->load->helper('number_word');
    $this->load->helper('numero_palabra');
	}


	public function validate_contract($type, $id)
	{
		$this->data['id'] = $id;
		$this->data['p'] = $this->Pros_model->GetID($this->data);

		
  		header('Content-type: application/vnd.ms-word');
  		header('Content-Disposition: attachment;Filename='.mb_strtoupper($type.'-'.$this->data['p']->name).date('Y-m-d').'.doc');

  		switch($type){
  			case 'com_fisica': //COM Fisica
  				echo Contract::contract_1($this->data['p']);
  			break;

  			case 'com_moral': //COM Moral
  				echo Contract::contract_2($this->data['p']);
  			break;

  			case 'mou_moral': //MOU Moral
  				echo Contract::contract_3($this->data['p']);
  			break;

  			case 'mou_fisica': //MOU Fisica
  				echo Contract::contract_4($this->data['p']);
  			break;

  			case 'nda_moral': //NDA Moral
  				echo Contract::contract_5($this->data['p']);
  			break;

  			case 'nda_fisica': //NDA Fisica
  				echo Contract::contract_6($this->data['p']);
  			break;
  		}

		

	}

	private function contract_1($d) //Contrato comisión persona física
	{
		
  $return_ ='';
  $return_ .= '<html>';
  $return_ .= '<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">';
  $return_ .= '
	<style>
		body{
			position:absolute;
			width:100%;
			height:100%;
		}
	</style>';
  $return_ .= '<body>';
  $return_ .= '
  <table style="border-collapse: collapse; border: none;">
<tbody>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><span style="font-size: 11.0pt;">CONTRATO DE COMISI&Oacute;N MERCANTIL (EN LO SUCESIVO EL &ldquo;CONTRATO&rdquo;) QUE CELEBRAN POR UNA PARTE IDEASREWARD, S.A.P.I. DE C.V. REPRESENTADA EN ESTE ACTO POR EL SE&Ntilde;OR '.mb_strtoupper($d->socio).' (EN LO SUCESIVO &ldquo;EL COMITENTE&rdquo;), Y POR LA OTRA PARTE <span>'.mb_strtoupper($d->comitente).'</span>, (EN LO SUCESIVO &ldquo;EL COMISIONISTA&rdquo;), SUJETOS AL TENOR DE LAS SIGUIENTES DECLARACIONES Y CL&Aacute;USULAS, (EN LO SUCESIVO CONJUNTAMENTE DENOMINADAS COMO &ldquo;LAS PARTES&rdquo; E INDISTINTAMENTE COMO &ldquo;LA PARTE&rdquo;).</span></strong></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><span style="font-size: 11.0pt;">COMMERCIAL COMMISSION CONTRACT BETWEEN BY IDEASREWARD, S.A.P.I. DE C.V. REPRESENTED IN THIS ACT BY MR. '.mb_strtoupper($d->socio).' (HEREINAFTER "THE COMMITTEE"), AND BY THE OTHER PART <span>'.mb_strtoupper($d->comitente).'</span>, (HEREINAFTER "THE COMMISSIONER"), SUBJECT TO THE FOLLOWING DECLARATIONS AND CLAUSES, (HEREINAFTER REFERRED TO SUCH AS "THE PARTIES")</span></strong></p>
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: center;"><strong><span style="font-size: 11.0pt;">DECLARACIONES</span></strong></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: center;"><strong><span style="font-size: 11.0pt;">&nbsp;</span></strong></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: center;"><strong><span style="font-size: 11.0pt;">RECITALS</span></strong></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><strong><span style="font-size: 11.0pt;">I. DECLARA &ldquo;EL COMITENTE&rdquo;, QUE:</span></strong></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><strong><span style="font-size: 11.0pt;">I. DECLARES THE COMMITTEE THROUGH ITS LEGAL ATTORNEY:</span></strong></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">a.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Es una Sociedad An&oacute;nima Promotora de Inversi&oacute;n de Capital Variable, debidamente constituida y existente de acuerdo con las Leyes de la Rep&uacute;blica Mexicana, lo que acredita con la Escritura P&uacute;blica n&uacute;mero 69, 919 de fecha 06 de marzo de 2018, otorgada ante la fe P&uacute;blica del Lic. Roberto Armando Orozco Alonzo, titular de la Notaria P&uacute;blica n&uacute;mero 130 de adscripci&oacute;n al Municipio de Guadalajara, Jalisco, integrado a la Subregi&oacute;n Centro Conurbada.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="margin-left: 1.85pt; text-align: justify; text-indent: 0cm;"><span style="font-size: 11.0pt;">a.<span style="font: 7.0pt "Times New Roman";">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 11.0pt;">That is a Mexican Company established and existing in accordance with the Mexican Laws, as evidenced by Public Deed No. 69, 919 dated March 6, 2018, issued by Mr Roberto Armando Orozco Alonzo, holder of the Notary Public number 130 of Guadalajara, Jalisco.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><span style="font-size: 11.0pt;">&nbsp;</span></strong></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">b.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Su representante cuenta con las facultades necesarias para celebrar el Contrato y obligarse en los t&eacute;rminos del mismo, las cuales, a la fecha de este, no le han sido revocadas, limitadas o modificadas en forma alguna.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="margin-left: 1.85pt; text-align: justify; text-indent: 3.55pt;"><span style="font-size: 11.0pt;">b.<span style="font: 7.0pt "Times New Roman";">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 11.0pt;">That its legal attorney has the necessary power and faculties to celebrate the present agreement on behalf of the Company, power and faculties that on this date have not been revoked or modified in any way.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><span style="font-size: 11.0pt;">&nbsp;</span></strong></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">c.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Su representada se encuentra dada de alta ante la Secretar&iacute;a de Hacienda y Cr&eacute;dito P&uacute;blico, mediante la inscripci&oacute;n en el Registro Federal de Contribuyentes con el n&uacute;mero  IDE180309TY9 .</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="margin-left: 23.4pt; text-align: justify; text-indent: -18.0pt;"><span style="font-size: 11.0pt;">c.<span style="font: 7.0pt "Times New Roman";">&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 11.0pt;">Hat its Tax Pay Number is </span><span style="font-size: 11.0pt;">IDE180309TY9</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><strong><span style="font-size: 11.0pt;">&nbsp;</span></strong></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">d.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Es su voluntad celebrar el presente Contrato con la finalidad de encomendar a &ldquo;EL COMISIONISTA&rdquo;, la b&uacute;squeda y presentaci&oacute;n de nuevos inversionistas potenciales para &ldquo;EL COMITENTE&rdquo; conforme a lo establecido en el presente Contrato. Lo anterior, en t&eacute;rminos del art&iacute;culo 273 de C&oacute;digo de Comercio.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="margin-left: 1.85pt; text-align: justify; text-indent: 0cm;"><span style="font-size: 11.0pt;">d.<span style="font: 7.0pt "Times New Roman";">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 11.0pt;">That is its propose signed this Agreement with the object of entrusting to the COMMISSIONER, the search and presentation of new potential investors for the COMMITTEE in accordance with the provisions of this Agreement. The foregoing, in terms of article 273 of the Mexican Commercial Code.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><strong><span style="font-size: 11.0pt;">II. DECLARA &ldquo;EL COMISIONISTA&rdquo;, QUE:</span></strong></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><span style="font-size: 11.0pt;">II. DECLARES THE COMMISSIONER THROUGH ITS LEGAL ATTORNEY:</span></strong></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">a.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Es una persona f&iacute;sica con plena capacidad legal para cumplir con las obligaciones y derechos asumidos de conformidad con el presente Contrato. </span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="margin-left: 1.85pt; text-align: justify; text-indent: 0cm;"><span style="font-size: 11.0pt;">a.<span style="font: 7.0pt "Times New Roman";">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 11.0pt;">That has the full legal capacity to comply with the obligations and rights assumed in accordance with this Agreement.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">b.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Su Registro Federal de Contribuyentes es '.$d->rfc_cliente.'.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="margin-left: 23.4pt; text-align: justify; text-indent: -18.0pt;"><span style="font-size: 11.0pt;">b.<span style="font: 7.0pt "Times New Roman";">&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 11.0pt;">That its Tax Pay Number is <span>'.$d->rfc_cliente.'</span></span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify; tab-stops: 95.4pt;"><span style="font-size: 11.0pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><strong><span style="font-size: 11.0pt;">III. LAS PARTES DECLARAN: </span></strong></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify; tab-stops: 95.4pt;"><strong><span style="font-size: 11.0pt;">III. THE PARTIES DECLARES: </span></strong></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify; tab-stops: 95.4pt;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">a.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; El presente Contrato de Comisi&oacute;n Mercantil se rige por lo previsto en el Cap&iacute;tulo I, T&Iacute;itulo III, Libro Segundo del C&oacute;digo de Comercio, sin que por lo tanto le sea aplicable ninguna disposici&oacute;n legal diferente por las propias caracter&iacute;sticas del Contrato que se celebra.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="margin-left: 23.4pt; text-align: justify; text-indent: -14.2pt; tab-stops: 23.4pt;"><span style="font-size: 11.0pt;">a.<span style="font: 7.0pt "Times New Roman";">&nbsp;&nbsp; </span></span><span style="font-size: 11.0pt;">This Agreement is governed by Mexican Commercial Code, without therefore being applicable any different legal provision by the characteristics of the Agreement being celebrated.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="margin-left: 23.4pt; text-align: justify; text-indent: -14.2pt;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">b.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Las Partes declaran y reconocen que son actos de comercio los que se pactan en el presente, seg&uacute;n lo disponen las fracciones VIII, X, XII, XVII, XIX y XX, del art&iacute;culo 75 del C&oacute;digo de Comercio.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="margin-left: 23.4pt; text-align: justify; text-indent: -14.2pt;"><span style="font-size: 11.0pt;">b.<span style="font: 7.0pt "Times New Roman";">&nbsp; </span></span><span style="font-size: 11.0pt;">That the Parties has the infrastructure to carry out and comply, in an agile and secure manner, with the object of this Agreement.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="margin-left: 23.4pt; text-align: justify; text-indent: -14.2pt;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">c.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Las disposiciones contenidas en este Contrato no generan asociaciones, sociedades o entidades entre &ldquo;EL COMITENTE&rdquo; y &ldquo;EL COMISIONISTA&rdquo;, por lo que &ldquo;EL COMITENTE&rdquo; y &ldquo;EL COMISIONISTA&rdquo; permanecer&aacute;n en todo tiempo como entidades independientes sin ninguna relaci&oacute;n entre ellas, excepto por la establecida en este Contrato.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="margin-left: 23.4pt; text-align: justify; text-indent: -14.2pt;"><span style="font-size: 11.0pt;">c.<span style="font: 7.0pt "Times New Roman";">&nbsp;&nbsp; </span></span><span style="font-size: 11.0pt;">The provisions contained in this Agreement do not generate associations, companies or entities between the COMMITTEE and the COMMISSIONER, so the COMMITTEE and the COMMISSIONER will remain at all times as independent entities without any relationship between them, except by the one established in this Agreement.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: center;"><strong><span style="font-size: 11.0pt;">C L &Aacute; U S U L A S</span></strong></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: center;"><strong><span style="font-size: 11.0pt;">C L A U S E S</span></strong></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">PRIMERA. DEFINICIONES.</span></u></strong><span style="font-size: 11.0pt;"> Los t&eacute;rminos que se utilizan dentro de este Contrato con may&uacute;scula inicial tendr&aacute;n los significados que a continuaci&oacute;n se les asigna; en el entendido que dichos t&eacute;rminos ser&aacute;n igualmente aplicables en su forma singular o plural:</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">FIRST. DEFINITIONS</span></u></strong><span style="font-size: 11.0pt;">. The terms used within this Agreement with an initial capital letter are going to have the meaning that is assigned below; in the understanding that these terms are equally applicable in their singular or plural form:</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><span style="font-size: 11.0pt;">&ldquo;Comisi&oacute;n&rdquo;.</span></strong><span style="font-size: 11.0pt;"> Significa la contraprestaci&oacute;n que &ldquo;EL COMITENTE&rdquo; pagar&aacute; a &ldquo;EL COMISIONISTA&rdquo; conforme a lo establecido en el presente Contrato.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><span style="font-size: 11.0pt;">"Agreement".</span></strong><span style="font-size: 11.0pt;"> Means the present Commercial Commission Agreement between the COMMISSIONER and "THE COMMITTEE", including the modifications that may be made over time.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><span style="font-size: 11.0pt;">&ldquo;Contrato&rdquo;.</span></strong><span style="font-size: 11.0pt;"> Significa el presente Contrato de Comisi&oacute;n Mercantil celebrado entre &ldquo;EL COMISIONISTA&rdquo; y &ldquo;EL COMITENTE&rdquo;, , incluyendo las modificaciones que puedan realizarse con el tiempo.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><span style="font-size: 11.0pt;">&ldquo;Commission".</span></strong><span style="font-size: 11.0pt;"> Means the amount of money that the COMMITTEE will pay the COMMISSIONER.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><span style="font-size: 11.0pt;">&ldquo;Inversionistas&rdquo;.</span></strong><span style="font-size: 11.0pt;"> Persona f&iacute;sica o moral que cuenta con los fondos econ&oacute;micos y financieros suficientes para destinar recursos para promover el proyecto y/o negocio de &ldquo;EL COMITENTE&rdquo;, con el fin de obtener un ingreso regular o ganancia final seg&uacute;n corresponda.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><span style="font-size: 11.0pt;">&ldquo;Investors&rdquo;.</span></strong><span style="font-size: 11.0pt;"> <span style="color: black;">A<span style="background: white;"> person or organization that puts money </span>to promote the project and / or business of the COMMISSIONER, to obtain a regular income or final profit.</span></span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><span style="font-size: 11.0pt;">&ldquo;Servicios&rdquo;.</span></strong><span style="font-size: 11.0pt;"> Significa las actividades que &ldquo;EL COMISIONISTA&rdquo; proporcionar&aacute; a &ldquo;EL COMITENTE&rdquo; con la finalidad de concretar las actividades que se le encomiendan.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><span style="font-size: 11.0pt;">"Services".</span></strong><span style="font-size: 11.0pt;"> Means the activities that the COMMISSIONER will provide the COMMITTEE to comply with the activities entrusted in this Agreement. </span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">SEGUNDA. OBJETO</span></u></strong><span style="font-size: 11.0pt;">. En virtud del presente Contrato, &ldquo;EL COMITENTE&rdquo; encomienda a &ldquo;EL COMISIONISTA&rdquo; y este a su vez se obliga a realizar la b&uacute;squeda y presentaci&oacute;n de inversionistas potenciales para &ldquo;EL COMITENTE&rdquo;, a cambio de que &eacute;ste a su vez reciba una comisi&oacute;n o contraprestaci&oacute;n monetaria.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">SECOND. OBJECT OF THE AGREEMENT. </span></u></strong><span style="font-size: 11.0pt;">The COMMITTEE entrusts the COMMISSIONER and this, in turn, is obliged to perform the search and presentation of potential Investors for the COMMISSIONER, in exchange for the latter in turn receiving a Commission.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;"><span style="text-decoration: none;">&nbsp;</span></span></u></strong></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">TERCERA. OBLIGACIONES DE LAS PARTES</span></u></strong><strong><span style="font-size: 11.0pt;">.</span></strong><span style="font-size: 11.0pt;"> Son obligaciones de &ldquo;EL COMITENTE&rdquo; las siguientes:</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">THIRD. OBLIGATIONS OF THE PARTIES.</span></u></strong><span style="font-size: 11.0pt;"> In accordance with this Agreement the COMMISSIONER is obligated to the followings:</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;"><span style="text-decoration: none;">&nbsp;</span></span></u></strong></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pagar al &ldquo;EL COMISIONISTA&rdquo; la contraprestaci&oacute;n por concepto de Comisi&oacute;n de Venta en los t&eacute;rminos establecidos en el presente Contrato.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">1. Pay to the COMMISSIONER the Commission established in this Agreement.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Revisar los perfiles de los diversos inversionistas que le presente &ldquo;EL COMISIONISTA&rdquo;.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify; text-indent: 35.4pt;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">2. Review the profiles of the potential Investors presented by the COMMISSIONER.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cumplir con todas las dem&aacute;s obligaciones establecidas en el presente Contrato.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">3. Comply with all other obligations established in this Agreement.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">Son obligaciones de &ldquo;EL COMISIONISTA&rdquo;, de manera enunciativa, m&aacute;s no limitativa, las siguientes:</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">The COMMISSIONER obligations are: </span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Realizar la b&uacute;squeda de Inversionistas con fondos econ&oacute;micos y financieros l&iacute;citos y suficientes</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">1. Carry out the Investor search with legal and sufficient economic and financial funds.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Proporcionar a &ldquo;EL COMITENTE&rdquo; durante la vigencia del presente Contrato el avance, la informaci&oacute;n y documentaci&oacute;n de las personas f&iacute;sicas o morales que &ldquo;EL COMISIONISTA&rdquo; considere como inversionistas potenciales.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">2. To provide the COMMITTEE during the term of this Agreement the progress, information and documentation of the natural or legal persons that the COMMISSIONER considers as potential investors.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fungir como intermediario y/o enlace entre el o los potenciales inversionistas y &ldquo;EL COMITENTE&rdquo;, con la finalidad de concretar la inversi&oacute;n que corresponda.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">3. Act as an intermediary and/or liaison between the potential investor (s) and the COMMITTEE, to specify the corresponding investment.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cumplir con todas las dem&aacute;s obligaciones establecidas en el presente Contrato.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">4. Comply with all other obligations established in this Agreement.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">CUARTA. PAGO DE LA COMISI&Oacute;N POR VENTA</span></u></strong><span style="font-size: 11.0pt;">. &ldquo;EL COMISIONISTA&rdquo; se compromete a recibir el pago total por concepto de comisi&oacute;n conforme a lo siguiente:</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">FOURTH. COMMISSION PAYMENT. </span></u></strong><span style="font-size: 11.0pt;">The COMMISSIONER undertakes to receive the total payment for commission as follows:</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">Dicho pago deber&aacute; realizarse previo env&iacute;o a &ldquo;EL COMITENTE&rdquo; del CFDI (Certificado Fiscal Digital por Internet), emitido por &ldquo;EL COMISIONISTA&rdquo;, mediante dep&oacute;sito bancario a la cuenta '.$d->cuenta.', CLABE '.$d->clabe.', contratada a nombre del C.'.$d->nombre_cuenta.' del banco '.$d->banco.'.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="margin-right: 3.6pt; text-align: justify;"><span style="font-size: 11.0pt;">The COMMITTEE must send to the COMMISSIONER the CFDI (Digital Tax Certificate by Internet) by bank deposit to the account '.$d->cuenta.' CLABE '.$d->clabe.' agreement ed on behalf of C. '.$d->nombre_cuenta.' from the bank '.$d->banco.' </span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">EL COMITENTE&rdquo; podr&aacute; cambiar la cuenta bancaria para el pago de la Comisi&oacute;n correspondiente mediante escrito y aviso a &ldquo;EL COMISIONISTA&rdquo;, con 2 (dos) d&iacute;as h&aacute;biles de anticipaci&oacute;n a la fecha en que se realice el pago, debiendo ser una cuenta a nombre del mismo. </span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">The COMMITTEE may change the bank account for payment of the corresponding Commission giving written notice to the COMMISSIONER, with 2 (two) business days in advance of the date on which the payment is made and must be an account at the name of it.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">QUINTA. VIGENCIA.</span></u></strong><span style="font-size: 11.0pt;"> El presente Contrato tendr&aacute; una vigencia de <span style=""> '.$d->vigencia.' ,</span> contado a partir de la fecha de firma del contrato, plazo forzoso para &ldquo;EL COMISIONISTA&rdquo; y voluntario para &ldquo;EL COMITENTE&rdquo;, por lo que &eacute;ste &uacute;ltimo podr&aacute; darlo por terminado en cualquier momento mediante aviso por escrito con por lo menos 30 (treinta) d&iacute;as h&aacute;biles de anticipaci&oacute;n de la fecha en que pretenda que surta sus efectos la terminaci&oacute;n.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">FIFTH. TERM.</span></u></strong><span style="font-size: 11.0pt;"> The term of this Agreement is of <span style=""> '.$d->vigencia.' </span> counted from the date of signature of the agreement, forced a deadline for the COMMISSIONER and voluntary for the COMMITTEE, so that the latter may terminate it at any time by means of notice by written with at least 30 (thirty) business days in advance of the date on which the termination takes effect.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;"><span style="text-decoration: none;">&nbsp;</span></span></u></strong></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">SEXTA. CESI&Oacute;N DE DERECHOS Y TRANSMISI&Oacute;N</span></u></strong><span style="font-size: 11.0pt;">. &ldquo;LAS PARTES&rdquo; acuerdan que se podr&aacute;n ceder o por cualquier otro medio transmitir los derechos y obligaciones que se deriven del presente Contrato, previa notificaci&oacute;n a la otra parte.</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">SIXTH. ASSIGNMENT OF RIGHTS AND TRANSMISSION.</span></u></strong><span style="font-size: 11.0pt;"> The Parties agree that they may assign or by any other means transmit the rights and obligations arising from this Agreement, after notifying the other party.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;"><span style="text-decoration: none;">&nbsp;</span></span></u></strong></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">S&Eacute;PTIMA. CESI&Oacute;N DE DERECHOS Y TRANSMISI&Oacute;N.</span></u></strong><span style="font-size: 11.0pt;"> &ldquo;LAS PARTES&rdquo; acuerdan que se podr&aacute;n ceder o por cualquier otro medio transmitir los derechos y obligaciones que se deriven del presente Contrato, previa notificaci&oacute;n a la otra Parte.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">SEVENTH. ASSIGNMENT OF RIGHTS AND TRANSMISSION.</span></u></strong><span style="font-size: 11.0pt;"> THE PARTIES agree that they may assign or by any other means transmit the rights and obligations arising from this Agreement, after notifying the other Party.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;"><span style="text-decoration: none;">&nbsp;</span></span></u></strong></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">OCTAVA. CASOS DE FUERZA MAYOR.</span></u></strong><span style="font-size: 11.0pt;"> Ninguna de &ldquo;LAS PARTES&rdquo; ser&aacute; responsable de cualquier retraso o incumplimiento de sus obligaciones derivadas del presente contrato y no se aplicar&aacute; penalizaci&oacute;n alguna por estos retrasos, que resulten de causas de fuerza mayor o de caso fortuito probado, que de manera enunciativa y no limitativa se refieran a terremotos, incendios, inundaciones, huelgas, disturbios motines, guerra, terrorismos, actos gubernamentales. Sin embargo, &ldquo;LAS PARTES&rdquo; deber&aacute;n acordar una soluci&oacute;n alterna en caso de que el caso fortuito o fuerza mayor tenga una duraci&oacute;n de m&aacute;s de 24 horas, para poder continuar prestando el servicio objeto del presente contrato. </span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">EIGHTH. FORCE. MAJEURE</span></u></strong><span style="font-size: 11.0pt;"> None of "THE PARTIES" will be responsible for any delay or breach of its obligations arising from this Agreement and no penalty will be applied for these delays, resulting from force majeure or proven fortuitous events, which include but not limited to earthquakes, fires, floods, strikes, riot riots, war, terror, government acts. However, the Parties must agree on an alternative solution in case the fortuitous event or force majeure lasts more than 24 hours, to continue providing the service object of this Agreement.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;"><span style="text-decoration: none;">&nbsp;</span></span></u></strong></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">NOVENA. CONFIDENCIALIDAD</span></u></strong><span style="font-size: 11.0pt;">. Cada parte conviene en observar y mantener de manera Confidencial toda la informaci&oacute;n, obtenida por cualquier medio o fuente derivados del presente Contrato, y que estuviere relacionada con el objeto social y actividades de la otra parte, sus clientes, proveedores y cualquier otra entidad con la que la otra parte tuviere relaciones comerciales.</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">La parte receptora de dicha informaci&oacute;n Confidencial deber&aacute; darle el mismo tratamiento y nivel de confidencialidad con que maneja su propia informaci&oacute;n confidencial.</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">La parte receptora conviene en limitar el acceso a dicha Informaci&oacute;n Confidencial a sus empleados o representantes que en forma razonable le llegaren a solicitar acceso a la Informaci&oacute;n Confidencial, haci&eacute;ndolos part&iacute;cipes y obligados solidarios con aquella, respecto de sus obligaciones de Confidencialidad aqu&iacute; contra&iacute;das. Cualquier persona que tuviere acceso a dicha Informaci&oacute;n deber&aacute; ser advertida de lo convenido en este Contrato, comprometi&eacute;ndose la parte receptora a realizar esfuerzos razonables para que dichas personas observen y cumplan lo estipulado en este p&aacute;rrafo. Ninguna Informaci&oacute;n que fuere otorgada por escrito por una parte a la otra, podr&aacute; ser copiada o reproducida en forma alguna a no ser que existiera autorizaci&oacute;n previa y por escrito concedida por la parte otorgante, esto con excepci&oacute;n de aquellas copias que la parte receptora pudiere requerir para cumplir con sus obligaciones aqu&iacute; estipuladas.</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">Con independencia de lo anteriormente estipulado, la siguiente informaci&oacute;n no ser&aacute; considerada como sujeta a las obligaciones de confidencialidad:</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cualquier Informaci&oacute;n que hubiere sido leg&iacute;timamente conocida y obtenida por la parte receptora, as&iacute; como documentaci&oacute;n que de la misma manera formar&aacute; parte de sus archivos, con anterioridad a la liberaci&oacute;n de dicha Informaci&oacute;n derivada de la celebraci&oacute;n del presente contrato;</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cualquier Informaci&oacute;n que regularmente fuere del conocimiento p&uacute;blico;</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cualquier Informaci&oacute;n que eventualmente fuere del dominio p&uacute;blico, y que hubiere sido leg&iacute;timamente revelada, no derivado de alguna violaci&oacute;n o incumplimiento de la parte receptora respecto de sus obligaciones aqu&iacute; adquiridas.</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">Las obligaciones de Confidencialidad contenidas en la presente Cl&aacute;usula subsistir&aacute;n indefinidamente con toda fuerza y vigor a&uacute;n despu&eacute;s de terminado o vencido el plazo del presente Contrato.</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">En caso de violaci&oacute;n o incumplimiento a las obligaciones estipuladas en esta Cl&aacute;usula, ambas partes convienen que la parte que incumpla deber&aacute; pagar a la parte afectada, por concepto de Pena Convencional, la cantidad equivalente al monto total que directamente derive como consecuencia por los probables da&ntilde;os ocasionados por la parte que incumpla, sin necesidad de resoluci&oacute;n judicial previa, no constituyendo dicha Pena una renuncia a los posibles derechos de reclamaci&oacute;n por responsabilidades o cualquier otra sanci&oacute;n legal a que pudiere haber lugar.</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">NINTH. CONFIDENTIALITY. </span></u></strong><span style="font-size: 11.0pt;">Each party agrees to observe and maintain <span style="color: black;">confidentiality</span> all the information obtained by any means or source derived from this Agreement, and that is related to the corporate purpose and activities of the other party, its customers, suppliers and any other entity with the that the other party has commercial relations.</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">The receiving party of said Confidential information must give the same treatment and level of confidentiality with which it handles its own confidential information.</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">The receiving party agrees to limit access to said Confidential Information to its employees or representatives who will reasonably request access to the Confidential Information, making them participants and obliged in solidarity with the Confidentiality in relation to their Confidentiality obligations agreement ed herein. Any person who has access to such Information must be warned of the agreement in this Agreement, committing the receiving party to make reasonable efforts so that said persons observe and comply with the provisions of this paragraph. No Information that may be granted in writing by one party to the other may be copied or reproduced in any way unless there is prior written authorization granted by the granting party, except for those copies that the receiving party may require. to fulfil its obligations here stipulated.</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">Notwithstanding the foregoing, the following information will not be considered as subject to confidentiality obligations:</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">1. Any Information that has been legitimately known and obtained by the receiving party, as well as documentation that in the same way formed part of its files, prior to the release of such Information derived from the execution of this agreement;</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">2. Any Information that is regularly public knowledge;</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">3. Any Information that may be public domain, and that has been legitimately revealed, not derived from any violation or breach by the receiving party with respect to its obligations here acquired.</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">The obligations of Confidentiality contained in this Clause will subsist indefinitely with all force and term even after the term of this Agreement expires or expires.</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">In case of violation or breach of the obligations stipulated in this Clause, both parties agree that the breaching party must pay the affected party, as a penalty, the amount equivalent to the total amount that directly derives as a result of the probable damage caused by the breaching party, without the need for a prior judicial decision, not constituting a penalty for waiver of possible claims rights for liabilities or any other legal sanction that may have occurred.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;"><span style="text-decoration: none;">&nbsp;</span></span></u></strong></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;"><span style="text-decoration: none;">&nbsp;</span></span></u></strong></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify; line-height: 115%;"><strong><u><span style="font-size: 10.5pt; line-height: 115%;">D&Eacute;CIMA. PRIVACIDAD Y PROTECCI&Oacute;N DE DATOS PERSONALES</span></u></strong><strong><span style="font-size: 10.5pt; line-height: 115%;">. </span></strong><span style="font-size: 10.5pt; line-height: 115%;">El tratamiento y comunicaci&oacute;n de datos personales entre las Partes, ya sea como transmisi&oacute;n o remisi&oacute;n, deber&aacute; cumplir con lo dispuesto por la Ley Federal de Protecci&oacute;n de Datos Personales en Posesi&oacute;n de los Particulares, su Reglamento y dem&aacute;s normatividad aplicable (&ldquo;Ley de Datos&rdquo;). En este sentido, cada una de las Partes deber&aacute; guardar estricta confidencialidad de los datos personales que recabe de la otra Parte; protegerlos mediante adecuadas medidas de seguridad t&eacute;cnicas, f&iacute;sicas y administrativas; asegurarse que la transmisi&oacute;n o remisi&oacute;n de datos personales est&eacute; acorde al aviso de privacidad de la parte Divulgadora y se efect&uacute;e en apego a la Ley de Datos, habi&eacute;ndose previamente informado de la transferencia al titular y obtenido el consentimiento que en su caso requiera otorgar este &uacute;ltimo.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">THIRTY-ONE. PRIVACY AND DATA PROTECTION. </span></u></strong><span style="font-size: 11.0pt;">The processing and communication of personal information between the Parties, either as transfer or remission, shall comply with the provisions of the Federal Law on Protection of Personal Data Held by Private Parties, its regulations and other applicable regulations ("Data Law"). Therefore, (i) the Parties shall maintain strict confidentiality of the personal information that may be obtained from the other party; (ii) protect it through appropriate technical, physical and administrative measures; (iii) ensure that the transfer or remission of personal information is in accordance with the privacy notice of the other party that has been previously provided to the data Company and in compliance of the Data Law, and the latter has agreed on the transfer of the personal information. </span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;"><span style="text-decoration: none;">&nbsp;</span></span></u></strong></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;"><span style="text-decoration: none;">&nbsp;</span></span></u></strong></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">D&Eacute;CIMA PRIMERA. MODIFICACIONES Y NOTIFICACIONES</span></u></strong><span style="font-size: 11.0pt;">. &ldquo;LAS PARTES&rdquo; convienen que el presente Contrato es el &uacute;nico documento que regula la prestaci&oacute;n de servicios aqu&iacute; estipulada, en el entendido de que cualquier modificaci&oacute;n del mismo deber&aacute; constar mediante convenio escrito debidamente firmado por &ldquo;LAS PARTES&rdquo;. Cualquier notificaci&oacute;n y aviso en relaci&oacute;n con los derechos y obligaciones contenidos en el presente Contrato, deber&aacute; realizarse de la siguiente forma:</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">ELEVENTH. MODIFICATIONS TO THE AGREEMENTS AND NOTICES. </span></u></strong><span style="font-size: 11.0pt;">The Parties agrees that this Agreement is the only document that regulates the provision of its object, in the understanding that any modification thereof must be made by means of a written agreement duly signed by the Parties. Any notification and notice regarding the rights and obligations contained in this Agreement must be made as follows:</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;"><span style="text-decoration: none;">&nbsp;</span></span></u></strong></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">Para &ldquo;EL COMITENTE&rdquo;, &ldquo;EL COMISIONISTA&rdquo; realizar&aacute; las notificaciones por escrito con acuse de recibo en su domicilio o a trav&eacute;s de correo electr&oacute;nico, con atenci&oacute;n de la persona que para tal efecto establezcan las partes.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">For the COMMITTEE, the COMMISSIONER will give written notice with acknowledgment of receipt at his address or through email, with attention of the person established for that purpose by the parties.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;"><span style="text-decoration: none;">&nbsp;</span></span></u></strong></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">Mientras &ldquo;LAS PARTES&rdquo; no notifiquen por escrito a la otra el cambio de su respectivo domicilio, los emplazamientos y dem&aacute;s diligencias judiciales o extrajudiciales, as&iacute; como la correspondencia y dem&aacute;s comunicaciones se practicar&aacute;n en los domicilios se&ntilde;alados en la presente Cl&aacute;usula. En caso de que cualquiera de las partes cambie su domicilio notificar&aacute; a la otra parte en los t&eacute;rminos de la presente Cl&aacute;usula dicho cambio.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">While the PARTIES do not notify the other in writing of the change of their respective domicile, the judicial and extrajudicial placements and other proceedings, as well as the correspondence and other communications shall be carried out in the addresses indicated in this Clause. In the event that either party changes his address, he will notify the other party under the terms of this Clause of such change.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;"><span style="text-decoration: none;">&nbsp;</span></span></u></strong></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">D&Eacute;CIMA SEGUNDA. ACUERDO TOTAL.</span></u></strong><span style="font-size: 11.0pt;"> El presente Contrato constituye el acuerdo y entendimiento total entre &ldquo;LAS PARTES&rdquo; con respecto al objeto materia de este instrumento y deja sin efectos a todos los dem&aacute;s convenios y entendimientos entre las partes con respecto al presente asunto.</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">TWELFTH. TOTAL AGREEMENT.</span></u></strong><span style="font-size: 11.0pt;"> This Agreement established the agreement and understanding between the PARTIES and renders without effect all other agreements and understandings between the parties with respect to this matter.</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;">D&Eacute;CIMA TERCERA. LEY APLICABLE Y JURISPRUDENCIA.</span></u></strong><span style="font-size: 11.0pt;"> Para la interpretaci&oacute;n, cumplimiento y/o ejecuci&oacute;n del presente Contrato, &ldquo;LAS PARTES&rdquo; se someten al C&oacute;digo Civil de la Ciudad de M&eacute;xico, as&iacute; como a la jurisdicci&oacute;n de los tribunales competentes en la Ciudad de M&eacute;xico, por lo que renuncian a cualquier otra jurisdicci&oacute;n que pudiere corresponderles por raz&oacute;n de su domicilio presente o futuro o, por cualquier otra causa. </span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify; line-height: 115%;"><strong><u><span style="font-size: 11.0pt; line-height: 115%;">THIRTEENTH. APPLICABLE LAW AND JURISDICTION</span></u></strong><strong><span style="font-size: 11.0pt; line-height: 115%;">. </span></strong><span style="font-size: 11.0pt; line-height: 115%;">On everything related to the interpretation and compliance with this Contract, the parties shall abide by the provisions of the Civil Code for the State of <span style="letter-spacing: -.15pt;">Jalisco</span> and they expressly submit themselves to the jurisdiction of the Courts of Guadalajara, Jalisco thus waiving any other jurisdiction rights to which they might be entitled for reason of their present or future domiciles or any other cause.</span></p>
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;"><span style="text-decoration: none;">&nbsp;</span></span></u></strong></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify; line-height: 115%;"><strong><u><span style="font-size: 11.0pt; line-height: 115%;"><span style="text-decoration: none;">&nbsp;</span></span></u></strong></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify; line-height: 115%; tab-stops: 0cm 13.9pt 36.0pt;"><strong><u><span style="font-size: 10.5pt; line-height: 115%;">D&Eacute;CIMA CUARTA. EJEMPLARES Y LENGUAJE APLICABLE</span></u></strong><strong><span style="font-size: 10.5pt; line-height: 115%;">.</span></strong> <span style="font-size: 10.5pt; line-height: 115%;">El Contrato y sus Anexos podr&aacute;n ser firmados en cualquier n&uacute;mero de ejemplares. Cada ejemplar firmado se considerar&aacute; como original de la misma, pero todos en su conjunto constituir&aacute;n uno y el mismo instrumento. Este Contrato se firma en ingl&eacute;s y espa&ntilde;ol, en caso de cualquier controversia, el idioma espa&ntilde;ol prevalecer&aacute;</span></p>
<p style="text-align: justify; line-height: 115%; tab-stops: 0cm 13.9pt 36.0pt;"><span style="font-size: 10.5pt; line-height: 115%;">&nbsp;</span></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify; line-height: 115%;"><strong><u><span style="font-size: 11.0pt; line-height: 115%;">FOURTEENTH. COPIES AND LANGUAGE. </span></u></strong><span style="font-size: 11.0pt; line-height: 115%;">The Agreement and its Exhibits may be signed in any number of copies. Each signed copy shall be deemed to be an original thereof, but all the copies shall together constitute one and the same instrument. This Agreement is executed in English and Spanish, in case of any controversy the Spanish language shall prevail<strong><u>.</u></strong></span></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;"><span style="text-decoration: none;">&nbsp;</span></span></u></strong></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify; line-height: 115%;"><strong><u><span style="font-size: 11.0pt; line-height: 115%;"><span style="text-decoration: none;">&nbsp;</span></span></u></strong></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><u><span style="font-size: 11.0pt;"><span style="text-decoration: none;">&nbsp;</span></span></u></strong></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify; line-height: 115%;"><strong><u><span style="font-size: 11.0pt; line-height: 115%;"><span style="text-decoration: none;">&nbsp;</span></span></u></strong></p>
</td>
</tr>
<tr>
<td width="262" valign="top" style="width: 262.25pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><strong><span style="font-size: 10.5pt;">LE&Iacute;DO QUE FUE EL PRESENTE CONTRATO </span></strong><strong><span style="font-size: 10.5pt; letter-spacing: -.15pt;">CONSTRUCCI&Oacute;N A PRECIO ALZADO Y TIEMPO DETERMINADO</span></strong><strong><span style="font-size: 10.5pt;"> Y CON PLENO CONOCIMIENTO DEL CONTENIDO, VALOR Y ALCANCE JUR&Iacute;DICO DEL MISMO, LO FIRMAN LAS PARTES EL D&Iacute;A '.$d->fecha_dia.' DEL MES '.$d->fecha_mes.' DE '.$d->fecha_ano.'.</span></strong></p>
</td>
<td width="14" valign="top" style="width: 13.95pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify;"><span style="font-size: 11.0pt;">&nbsp;</span></p>
</td>
<td width="263" valign="top" style="width: 263.3pt; padding: 0cm 5.4pt 0cm 5.4pt;">
<p style="text-align: justify; line-height: 115%;"><strong><span style="font-size: 10.5pt; line-height: 115%;">READ AND AGREED ON THE CONTENT AND SCOPE OF THIS LUMP SUM AND TIME LIMIT AGREEMENT FOR THE PROVISION OF SERVICES, BOTH PARTIES EXECUTE THIS AGREEMENT ON '.$d->fecha_dia.', ON '.$d->fecha_mes.' OF '.$d->fecha_ano.' </span></strong><strong><span style="font-size: 10.5pt; line-height: 115%;">.</span></strong></p>
<p style="text-align: justify; line-height: 115%;"><strong><u><span style="font-size: 11.0pt; line-height: 115%;"><span style="text-decoration: none;">&nbsp;</span></span></u></strong></p>
</td>
</tr>
</tbody>
</table>';
  $return_ .= '</body>';
  $return_ .= '</html>';

  		return $return_;
	}

	private function contract_2($d) //Contrato comisión persona moral
	{
		
  $return_ ='';
  $return_ .= '<html>';
  $return_ .= '<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">';
  $return_ .= '
	<style>
		body{
			position:absolute;
			width:100%;
			height:100%;
		}
	</style>';
  $return_ .= '<body>';
  $return_ .= '
  <table border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong>
                        CONTRATO DE COMISIÓN MERCANTIL (EN LO SUCESIVO EL
                        “CONTRATO”) QUE CELEBRAN POR UNA PARTE IDEASREWARD,
                        S.A.P.I. DE C.V. REPRESENTADA EN ESTE ACTO POR EL SEÑOR
                        '.$d->socio.' (EN LO SUCESIVO “EL COMITENTE”), Y POR LA OTRA
                        PARTE '.$d->comitente.', (EN LO SUCESIVO “EL
                        COMISIONISTA”), SUJETOS AL TENOR DE LAS SIGUIENTES
                        DECLARACIONES Y CLÁUSULAS, (EN LO SUCESIVO
                        CONJUNTAMENTE DENOMINADAS COMO “LAS PARTES” E
                        INDISTINTAMENTE COMO “LA PARTE”).
                    </strong>
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong>
                        COMMERCIAL COMMISSION CONTRACT BETWEEN BY IDEASREWARD,
                        S.A.P.I. DE C.V. REPRESENTED IN THIS ACT BY MR. '.$d->socio.'
                        (HEREINAFTER "THE COMMITTEE"), AND BY THE OTHER
                        PART '.$d->comitente.', (HEREINAFTER "THE
                        COMMISSIONER"), SUBJECT TO THE FOLLOWING DECLARATIONS
                        AND CLAUSES, (HEREINAFTER REFERRED TO SUCH AS "THE
                        PARTIES")
                    </strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p align="center">
                    <strong>DECLARACIONES</strong>
                </p>
            </td>
            <td width="14" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="263" valign="top">
                <p align="center">
                    <strong>RECITALS</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong>I. DECLARA “EL COMITENTE”, QUE:</strong>
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong>
                        I. DECLARES THE COMMITTEE THROUGH ITS LEGAL ATTORNEY:
                    </strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    a. Es una Sociedad Anónima Promotora de Inversión de
                    Capital Variable, debidamente constituida y existente de
                    acuerdo con las Leyes de la República Mexicana, lo que
                    acredita con la Escritura Pública número 69, 919 de fecha
                    06 de marzo de 2018, otorgada ante la fe Pública del Lic.
                    Roberto Armando Orozco Alonzo, titular de la Notaria
                    Pública número 130 de adscripción al Municipio de
                    Guadalajara, Jalisco, integrado a la Subregión Centro
                    Conurbada.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    a. That is a Mexican Company established and existing in
                    accordance with the Mexican Laws, as evidenced by Public
                    Deed No. 69, 919 dated March 6, 2018, issued by Mr Roberto
                    Armando Orozco Alonzo, holder of the Notary Public number
                    130 of Guadalajara, Jalisco.
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    b. Su representante cuenta con las facultades necesarias
                    para celebrar el Contrato y obligarse en los términos del
                    mismo, las cuales, a la fecha de este, no le han sido
                    revocadas, limitadas o modificadas en forma alguna.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    b. That its legal attorney has the necessary power and
                    faculties to celebrate the present agreement on behalf of
                    the Company, power and faculties that on this date have not
                    been revoked or modified in any way.<strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    c. Su representada se encuentra dada de alta ante la
                    Secretaría de Hacienda y Crédito Público, mediante la
                    inscripción en el Registro Federal de Contribuyentes con el
                    número IDE180309TY9.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    c. Hat its Tax Pay Number is IDE180309TY9.<strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    d. Es su voluntad celebrar el presente Contrato con la
                    finalidad de encomendar a “EL COMISIONISTA”, la búsqueda y
                    presentación de nuevos inversionistas potenciales para “EL
                    COMITENTE” conforme a lo establecido en el presente
                    Contrato. Lo anterior, en términos del artículo 273 de
                    Código de Comercio.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    d. That is its propose signed this Agreement with the
                    object of entrusting to the COMMISSIONER, the search and
                    presentation of new potential investors for the COMMITTEE
                    in accordance with the provisions of this Agreement. The
                    foregoing, in terms of article 273 of the Mexican
                    Commercial Code.
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong>II. DECLARA “EL COMISIONISTA”, QUE:</strong>
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong>
                        II. DECLARES THE COMMISSIONER THROUGH ITS LEGAL
                        ATTORNEY:
                    </strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    a. Es una Sociedad '.$d->m_sociedad.', debidamente constituida y
                    existente de acuerdo con las Leyes de la República
                    Mexicana, lo que acredita con la Escritura Pública número
                    '.$d->m_e_publica.' de fecha '.$d->m_e_fecha.', otorgada ante la fe Pública del
                    '.$d->m_notario.', titular de la Notaria Pública número '.$d->m_notaria.' de
                    adscripción al Municipio de '.$d->m_municipio.'.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    a. That is a Mexican Company established and existing in
                    accordance with the Mexican Laws, as evidenced by Public
                    Deed No. '.$d->m_e_publica.' dated '.$d->m_e_fecha.', issued by '.$d->m_sociedad.', holder
                    of the Notary Public number '.$d->m_notaria.' of '.$d->m_municipio.'
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    b. Su Registro Federal de Contribuyentes es '.$d->rfc_cliente.'.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    b. That its Tax Pay Number is '.$d->rfc_cliente.'
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    c. Su representante cuenta con las facultades necesarias
                    para celebrar el Contrato y obligarse en los términos del
                    mismo, las cuales, a la fecha de este, no le han sido
                    revocadas, limitadas o modificadas en forma alguna.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    c. That its legal attorney has the necessary power and
                    faculties to celebrate the present agreement on behalf of
                    the Company, power and faculties that on this date have not
                    been revoked or modified in any way.
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong>III. LAS PARTES DECLARAN: </strong>
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong>III. THE PARTIES DECLARES: </strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    a. El presente Contrato de Comisión Mercantil se rige por
                    lo previsto en el Capítulo I, TÍitulo III, Libro Segundo
                    del Código de Comercio, sin que por lo tanto le sea
                    aplicable ninguna disposición legal diferente por las
                    propias características del Contrato que se celebra.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    a. This Agreement is governed by Mexican Commercial Code,
                    without therefore being applicable any different legal
                    provision by the characteristics of the Agreement being
                    celebrated.
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    b. Las Partes declaran y reconocen que son actos de
                    comercio los que se pactan en el presente, según lo
                    disponen las fracciones VIII, X, XII, XVII, XIX y XX, del
                    artículo 75 del Código de Comercio.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    b. That the Parties has the infrastructure to carry out and
                    comply, in an agile and secure manner, with the object of
                    this Agreement.
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    c. Las disposiciones contenidas en este Contrato no generan
                    asociaciones, sociedades o entidades entre “EL COMITENTE” y
                    “EL COMISIONISTA”, por lo que “EL COMITENTE” y “EL
                    COMISIONISTA” permanecerán en todo tiempo como entidades
                    independientes sin ninguna relación entre ellas, excepto
                    por la establecida en este Contrato.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    c. The provisions contained in this Agreement do not
                    generate associations, companies or entities between the
                    COMMITTEE and the COMMISSIONER, so the COMMITTEE and the
                    COMMISSIONER will remain at all times as independent
                    entities without any relationship between them, except by
                    the one established in this Agreement.
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p align="center">
                    <strong>C L Á U S U L A S</strong>
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p align="center">
                    <strong>C L A U S E S</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong><u>PRIMERA. DEFINICIONES.</u></strong>
                    Los términos que se utilizan dentro de este Contrato con
                    mayúscula inicial tendrán los significados que a
                    continuación se les asigna; en el entendido que dichos
                    términos serán igualmente aplicables en su forma singular o
                    plural:
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong><u>FIRST. DEFINITIONS</u></strong>
                    .
                    <a name="_Hlk520794470">
                        The terms used within this Agreement with an initial
                        capital letter are going to have the meaning that is
                        assigned below; in the understanding that these terms
                        are equally applicable in their singular or plural
                        form:
                    </a>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong>“Comisión”.</strong>
                    Significa la contraprestación que “EL COMITENTE” pagará a
                    “EL COMISIONISTA” conforme a lo establecido en el presente
                    Contrato.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong>"Agreement".</strong>
                    Means the present Commercial Commission Agreement between
                    the COMMISSIONER and "THE COMMITTEE", including the
                    modifications that may be made over time.
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong>“Contrato”.</strong>
                    Significa el presente Contrato de Comisión Mercantil
                    celebrado entre “EL COMISIONISTA” y “EL COMITENTE”, ,
                    incluyendo las modificaciones que puedan realizarse con el
                    tiempo.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong>“Commission".</strong>
                    Means the amount of money that the COMMITTEE will pay the
                    COMMISSIONER.
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong>“Inversionistas”.</strong>
                    Persona física o moral que cuenta con los fondos económicos
                    y financieros suficientes para destinar recursos para
                    promover el proyecto y/o negocio de “EL COMITENTE”, con el
                    fin de obtener un ingreso regular o ganancia final según
                    corresponda.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong>“Investors”.</strong>
                    A person or organization that puts money to promote the
                    project and / or business of the COMMISSIONER, to obtain a
                    regular income or final profit.
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong>“Servicios”.</strong>
                    Significa las actividades que “EL COMISIONISTA”
                    proporcionará a “EL COMITENTE” con la finalidad de
                    concretar las actividades que se le encomiendan.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong>"Services".</strong>
                    Means the activities that the COMMISSIONER will provide the
                    COMMITTEE to comply with the activities entrusted in this
                    Agreement.
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong><u>SEGUNDA. OBJETO</u></strong>
                    . En virtud del presente Contrato, “EL COMITENTE”
                    encomienda a “EL COMISIONISTA” y este a su vez se obliga a
                    realizar la búsqueda y presentación de inversionistas
                    potenciales para “EL COMITENTE”, a cambio de que éste a su
                    vez reciba una comisión o contraprestación monetaria.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong><u>SECOND. OBJECT OF THE AGREEMENT. </u></strong>
                    The COMMITTEE entrusts the COMMISSIONER and this, in turn,
                    is obliged to perform the search and presentation of
                    potential Investors for the COMMISSIONER, in exchange for
the latter in turn receiving a Commission.                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong><u>TERCERA. OBLIGACIONES DE LAS PARTES</u></strong>
                    <strong>.</strong>
                    Son obligaciones de “EL COMITENTE” las siguientes:
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong><u>THIRD. OBLIGATIONS OF THE PARTIES.</u></strong>
                    In accordance with this Agreement the COMMISSIONER is
                    obligated to the followings:<strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    1. Pagar al “EL COMISIONISTA” la contraprestación por
                    concepto de Comisión de Venta en los términos establecidos
                    en el presente Contrato.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    1. Pay to the COMMISSIONER the Commission established in
                    this Agreement.
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    2. Revisar los perfiles de los diversos inversionistas que
                    le presente “EL COMISIONISTA”.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    2. Review the profiles of the potential Investors presented
                    by the COMMISSIONER.
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    3. Cumplir con todas las demás obligaciones establecidas en
                    el presente Contrato.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    3. Comply with all other obligations established in this
                    Agreement.
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    Son obligaciones de “EL COMISIONISTA”, de manera
                    enunciativa, más no limitativa, las siguientes:
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    The COMMISSIONER obligations are:
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    1. Realizar la búsqueda de Inversionistas con fondos
                    económicos y financieros lícitos y suficientes
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    1. Carry out the Investor search with legal and sufficient
                    economic and financial funds.
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    2. Proporcionar a “EL COMITENTE” durante la vigencia del
                    presente Contrato el avance, la información y documentación
                    de las personas físicas o morales que “EL COMISIONISTA”
                    considere como inversionistas potenciales.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    2. To provide the COMMITTEE during the term of this
                    Agreement the progress, information and documentation of
                    the natural or legal persons that the COMMISSIONER
                    considers as potential investors.
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    3. Fungir como intermediario y/o enlace entre el o los
                    potenciales inversionistas y “EL COMITENTE”, con la
                    finalidad de concretar la inversión que corresponda.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    3. Act as an intermediary and/or liaison between the
                    potential investor (s) and the COMMITTEE, to specify the
                    corresponding investment.
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    4. Cumplir con todas las demás obligaciones establecidas en
                    el presente Contrato.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    4. Comply with all other obligations established in this
                    Agreement.
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong>
                        <u>CUARTA. PAGO DE LA COMISIÓN POR VENTA</u>
                    </strong>
                    . “EL COMISIONISTA” se compromete a recibir el pago total
                    por concepto de comisión conforme a lo siguiente:
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong><u>FOURTH. COMMISSION PAYMENT. </u></strong>
                    The COMMISSIONER undertakes to receive the total payment
                    for commission as follows:<strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    Dicho pago deberá realizarse previo envío a “EL COMITENTE”
                    del CFDI (Certificado Fiscal Digital por Internet), emitido
                    por “EL COMISIONISTA”, mediante depósito bancario a la
                    cuenta '.$d->cuenta.', CLABE '.$d->clabe.', contratada a nombre del
                    C. '.$d->nombre_cuenta.' del banco '.$d->banco.' .
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    The COMMITTEE must send to the COMMISSIONER the CFDI
                    (Digital Tax Certificate by Internet) by bank deposit to
                    the account '.$d->cuenta.' CLABE '.$d->clabe.' agreement ed on behalf
                    of C. '.$d->nombre_cuenta.' from the bank '.$d->banco.'
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    EL COMITENTE” podrá cambiar la cuenta bancaria para el pago
                    de la Comisión correspondiente mediante escrito y aviso a
                    “EL COMISIONISTA”, con 2 (dos) días hábiles de anticipación
                    a la fecha en que se realice el pago, debiendo ser una
                    cuenta a nombre del mismo.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    The COMMITTEE may change the bank account for payment of
                    the corresponding Commission giving written notice to the
                    COMMISSIONER, with 2 (two) business days in advance of the
                    date on which the payment is made and must be an account at
                    the name of it.
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong><u>QUINTA. VIGENCIA.</u></strong>
                    El presente Contrato tendrá una vigencia de '.$d->vigencia.', contado
                    a partir de la fecha de firma del contrato, plazo forzoso
                    para “EL COMISIONISTA” y voluntario para “EL COMITENTE”,
                    por lo que éste último podrá darlo por terminado en
                    cualquier momento mediante aviso por escrito con por lo
                    menos 30 (treinta) días hábiles de anticipación de la fecha
                    en que pretenda que surta sus efectos la terminación.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong><u>FIFTH. TERM.</u></strong>
                    The term of this Agreement is of '.$d->vigencia.' counted from the
                    date of signature of the agreement, forced a deadline for
                    the COMMISSIONER and voluntary for the COMMITTEE, so that
                    the latter may terminate it at any time by means of notice
                    by written with at least 30 (thirty) business days in
                    advance of the date on which the termination takes effect.
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong>
                        <u>SEXTA. CESIÓN DE DERECHOS Y TRANSMISIÓN</u>
                    </strong>
                    . “LAS PARTES” acuerdan que se podrán ceder o por cualquier
                    otro medio transmitir los derechos y obligaciones que se
                    deriven del presente Contrato, previa notificación a la
                    otra parte.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong>
                        <u>SIXTH. ASSIGNMENT OF RIGHTS AND TRANSMISSION.</u>
                    </strong>
                    The Parties agree that they may assign or by any other
                    means transmit the rights and obligations arising from this
Agreement, after notifying the other party.                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong>
                        <u>SÉPTIMA. CESIÓN DE DERECHOS Y TRANSMISIÓN.</u>
                    </strong>
                    “LAS PARTES” acuerdan que se podrán ceder o por cualquier
                    otro medio transmitir los derechos y obligaciones que se
                    deriven del presente Contrato, previa notificación a la
                    otra Parte.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong>
                        <u>SEVENTH. ASSIGNMENT OF RIGHTS AND TRANSMISSION.</u>
                    </strong>
                    THE PARTIES agree that they may assign or by any other
                    means transmit the rights and obligations arising from this
Agreement, after notifying the other Party.                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong><u>OCTAVA. CASOS DE FUERZA MAYOR.</u></strong>
                    Ninguna de “LAS PARTES” será responsable de cualquier
                    retraso o incumplimiento de sus obligaciones derivadas del
                    presente contrato y no se aplicará penalización alguna por
                    estos retrasos, que resulten de causas de fuerza mayor o de
                    caso fortuito probado, que de manera enunciativa y no
                    limitativa se refieran a terremotos, incendios,
                    inundaciones, huelgas, disturbios motines, guerra,
                    terrorismos, actos gubernamentales. Sin embargo, “LAS
                    PARTES” deberán acordar una solución alterna en caso de que
                    el caso fortuito o fuerza mayor tenga una duración de más
                    de 24 horas, para poder continuar prestando el servicio
                    objeto del presente contrato.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong><u>EIGHTH. FORCE. MAJEURE</u></strong>
                    None of "THE PARTIES" will be responsible for any delay or
                    breach of its obligations arising from this Agreement and
                    no penalty will be applied for these delays, resulting from
                    force majeure or proven fortuitous events, which include
                    but not limited to earthquakes, fires, floods, strikes,
                    riot riots, war, terror, government acts. However, the
                    Parties must agree on an alternative solution in case the
                    fortuitous event or force majeure lasts more than 24 hours,
to continue providing the service object of this Agreement.                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong><u>NOVENA. CONFIDENCIALIDAD</u></strong>
                    . Cada parte conviene en observar y mantener de manera
                    Confidencial toda la información, obtenida por cualquier
                    medio o fuente derivados del presente Contrato, y que
                    estuviere relacionada con el objeto social y actividades de
                    la otra parte, sus clientes, proveedores y cualquier otra
                    entidad con la que la otra parte tuviere relaciones
                    comerciales.
                </p>
                <p>
                    La parte receptora de dicha información Confidencial deberá
                    darle el mismo tratamiento y nivel de confidencialidad con
                    que maneja su propia información confidencial.
                </p>
                <p>
                    La parte receptora conviene en limitar el acceso a dicha
                    Información Confidencial a sus empleados o representantes
                    que en forma razonable le llegaren a solicitar acceso a la
                    Información Confidencial, haciéndolos partícipes y
                    obligados solidarios con aquella, respecto de sus
                    obligaciones de Confidencialidad aquí contraídas. Cualquier
                    persona que tuviere acceso a dicha Información deberá ser
                    advertida de lo convenido en este Contrato,
                    comprometiéndose la parte receptora a realizar esfuerzos
                    razonables para que dichas personas observen y cumplan lo
                    estipulado en este párrafo. Ninguna Información que fuere
                    otorgada por escrito por una parte a la otra, podrá ser
                    copiada o reproducida en forma alguna a no ser que
                    existiera autorización previa y por escrito concedida por
                    la parte otorgante, esto con excepción de aquellas copias
                    que la parte receptora pudiere requerir para cumplir con
                    sus obligaciones aquí estipuladas.
                </p>
                <p>
                    Con independencia de lo anteriormente estipulado, la
                    siguiente información no será considerada como sujeta a las
                    obligaciones de confidencialidad:
                </p>
                <p>
                    1. Cualquier Información que hubiere sido legítimamente
                    conocida y obtenida por la parte receptora, así como
                    documentación que de la misma manera formará parte de sus
                    archivos, con anterioridad a la liberación de dicha
                    Información derivada de la celebración del presente
                    contrato;
                </p>
                <p>
                    2. Cualquier Información que regularmente fuere del
                    conocimiento público;
                </p>
                <p>
                    3. Cualquier Información que eventualmente fuere del
                    dominio público, y que hubiere sido legítimamente revelada,
                    no derivado de alguna violación o incumplimiento de la
                    parte receptora respecto de sus obligaciones aquí
                    adquiridas.
                </p>
                <p>
                    Las obligaciones de Confidencialidad contenidas en la
                    presente Cláusula subsistirán indefinidamente con toda
                    fuerza y vigor aún después de terminado o vencido el plazo
                    del presente Contrato.
                </p>
                <p>
                    En caso de violación o incumplimiento a las obligaciones
                    estipuladas en esta Cláusula, ambas partes convienen que la
                    parte que incumpla deberá pagar a la parte afectada, por
                    concepto de Pena Convencional, la cantidad equivalente al
                    monto total que directamente derive como consecuencia por
                    los probables daños ocasionados por la parte que incumpla,
                    sin necesidad de resolución judicial previa, no
                    constituyendo dicha Pena una renuncia a los posibles
                    derechos de reclamación por responsabilidades o cualquier
                    otra sanción legal a que pudiere haber lugar.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong><u>NINTH. CONFIDENTIALITY. </u></strong>
                    Each party agrees to observe and maintain confidentiality
                    all the information obtained by any means or source derived
                    from this Agreement, and that is related to the corporate
                    purpose and activities of the other party, its customers,
                    suppliers and any other entity with the that the other
                    party has commercial relations.
                </p>
                <p>
                    The receiving party of said Confidential information must
                    give the same treatment and level of confidentiality with
                    which it handles its own confidential information.
                </p>
                <p>
                    The receiving party agrees to limit access to said
                    Confidential Information to its employees or
                    representatives who will reasonably request access to the
                    Confidential Information, making them participants and
                    obliged in solidarity with the Confidentiality in relation
                    to their Confidentiality obligations agreement ed herein.
                    Any person who has access to such Information must be
                    warned of the agreement in this Agreement, committing the
                    receiving party to make reasonable efforts so that said
                    persons observe and comply with the provisions of this
                    paragraph. No Information that may be granted in writing by
                    one party to the other may be copied or reproduced in any
                    way unless there is prior written authorization granted by
                    the granting party, except for those copies that the
                    receiving party may require. to fulfil its obligations here
                    stipulated.
                </p>
                <p>
                    Notwithstanding the foregoing, the following information
                    will not be considered as subject to confidentiality
                    obligations:
                </p>
                <p>
                    1. Any Information that has been legitimately known and
                    obtained by the receiving party, as well as documentation
                    that in the same way formed part of its files, prior to the
                    release of such Information derived from the execution of
                    this agreement;
                </p>
                <p>
                    2. Any Information that is regularly public knowledge;
                </p>
                <p>
                    3. Any Information that may be public domain, and that has
                    been legitimately revealed, not derived from any violation
                    or breach by the receiving party with respect to its
                    obligations here acquired.
                </p>
                <p>
                    The obligations of Confidentiality contained in this Clause
                    will subsist indefinitely with all force and term even
                    after the term of this Agreement expires or expires.
                </p>
                <p>
                    In case of violation or breach of the obligations
                    stipulated in this Clause, both parties agree that the
                    breaching party must pay the affected party, as a penalty,
                    the amount equivalent to the total amount that directly
                    derives as a result of the probable damage caused by the
                    breaching party, without the need for a prior judicial
                    decision, not constituting a penalty for waiver of possible
                    claims rights for liabilities or any other legal sanction
                    that may have occurred.<strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong>
                        <u>
                            DÉCIMA. PRIVACIDAD Y PROTECCIÓN DE DATOS PERSONALES
                        </u>
                    </strong>
                    <strong>. </strong>
                    El tratamiento y comunicación de datos personales entre las
                    Partes, ya sea como transmisión o remisión, deberá cumplir
                    con lo dispuesto por la Ley Federal de Protección de Datos
                    Personales en Posesión de los Particulares, su Reglamento y
                    demás normatividad aplicable (“Ley de Datos”). En este
                    sentido, cada una de las Partes deberá guardar estricta
                    confidencialidad de los datos personales que recabe de la
                    otra Parte; protegerlos mediante adecuadas medidas de
                    seguridad técnicas, físicas y administrativas; asegurarse
                    que la transmisión o remisión de datos personales esté
                    acorde al aviso de privacidad de la parte Divulgadora y se
                    efectúe en apego a la Ley de Datos, habiéndose previamente
                    informado de la transferencia al titular y obtenido el
consentimiento que en su caso requiera otorgar este último.                    <strong></strong>
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong>
                        <u>THIRTY-ONE. PRIVACY AND DATA PROTECTION. </u>
                    </strong>
                    The processing and communication of personal information
                    between the Parties, either as transfer or remission, shall
                    comply with the provisions of the Federal Law on Protection
                    of Personal Data Held by Private Parties, its regulations
                    and other applicable regulations ("Data Law"). Therefore,
                    (i) the Parties shall maintain strict confidentiality of
                    the personal information that may be obtained from the
                    other party; (ii) protect it through appropriate technical,
                    physical and administrative measures; (iii) ensure that the
                    transfer or remission of personal information is in
                    accordance with the privacy notice of the other party that
                    has been previously provided to the data Company and in
                    compliance of the Data Law, and the latter has agreed on
the transfer of the personal information.                    <strong><u> </u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong>
                        <u>DÉCIMA PRIMERA. MODIFICACIONES Y NOTIFICACIONES</u>
                    </strong>
                    . “LAS PARTES” convienen que el presente Contrato es el
                    único documento que regula la prestación de servicios aquí
                    estipulada, en el entendido de que cualquier modificación
                    del mismo deberá constar mediante convenio escrito
                    debidamente firmado por “LAS PARTES”. Cualquier
                    notificación y aviso en relación con los derechos y
                    obligaciones contenidos en el presente Contrato, deberá
                    realizarse de la siguiente forma:
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong>
                        <u>
                            ELEVENTH. MODIFICATIONS TO THE AGREEMENTS AND
                            NOTICES.
                        </u>
                    </strong>
                    The Parties agrees that this Agreement is the only document
                    that regulates the provision of its object, in the
                    understanding that any modification thereof must be made by
                    means of a written agreement duly signed by the Parties.
                    Any notification and notice regarding the rights and
                    obligations contained in this Agreement must be made as
                    follows:<strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    Para “EL COMITENTE”, “EL COMISIONISTA” realizará las
                    notificaciones por escrito con acuse de recibo en su
                    domicilio o a través de correo electrónico, con atención de
                    la persona que para tal efecto establezcan las partes.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    For the COMMITTEE, the COMMISSIONER will give written
                    notice with acknowledgment of receipt at his address or
                    through email, with attention of the person established for
                    that purpose by the parties.
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    Mientras “LAS PARTES” no notifiquen por escrito a la otra
                    el cambio de su respectivo domicilio, los emplazamientos y
                    demás diligencias judiciales o extrajudiciales, así como la
                    correspondencia y demás comunicaciones se practicarán en
                    los domicilios señalados en la presente Cláusula. En caso
                    de que cualquiera de las partes cambie su domicilio
                    notificará a la otra parte en los términos de la presente
                    Cláusula dicho cambio.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    While the PARTIES do not notify the other in writing of the
                    change of their respective domicile, the judicial and
                    extrajudicial placements and other proceedings, as well as
                    the correspondence and other communications shall be
                    carried out in the addresses indicated in this Clause. In
                    the event that either party changes his address, he will
                    notify the other party under the terms of this Clause of
                    such change.
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong><u>DÉCIMA SEGUNDA. ACUERDO TOTAL.</u></strong>
                    El presente Contrato constituye el acuerdo y entendimiento
                    total entre “LAS PARTES” con respecto al objeto materia de
                    este instrumento y deja sin efectos a todos los demás
                    convenios y entendimientos entre las partes con respecto al
                    presente asunto.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong><u>TWELFTH. TOTAL AGREEMENT.</u></strong>
                    This Agreement established the agreement and understanding
                    between the PARTIES and renders without effect all other
                    agreements and understandings between the parties with
                    respect to this matter.
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong>
                        <u>DÉCIMA TERCERA. LEY APLICABLE Y JURISPRUDENCIA.</u>
                    </strong>
                    Para la interpretación, cumplimiento y/o ejecución del
                    presente Contrato, “LAS PARTES” se someten al Código Civil
                    de la Ciudad de México, así como a la jurisdicción de los
                    tribunales competentes en la Ciudad de México, por lo que
                    renuncian a cualquier otra jurisdicción que pudiere
                    corresponderles por razón de su domicilio presente o futuro
                    o, por cualquier otra causa.
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong>
                        <u>THIRTEENTH. APPLICABLE LAW AND JURISDICTION</u>
                    </strong>
                    <strong>. </strong>
                    On everything related to the interpretation and compliance
                    with this Contract, the parties shall abide by the
                    provisions of the Civil Code for the State of Jalisco and
                    they expressly submit themselves to the jurisdiction of the
                    Courts of Guadalajara, Jalisco thus waiving any other
                    jurisdiction rights to which they might be entitled for
                    reason of their present or future domiciles or any other
                    cause.<strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong>
                        <u>DÉCIMA CUARTA. EJEMPLARES Y LENGUAJE APLICABLE</u>
                    </strong>
                    <strong>.</strong>
                    El Contrato y sus Anexos podrán ser firmados en cualquier
                    número de ejemplares. Cada ejemplar firmado se considerará
                    como original de la misma, pero todos en su conjunto
                    constituirán uno y el mismo instrumento. Este Contrato se
                    firma en inglés y español, en caso de cualquier
                    controversia, el idioma español prevalecerá
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong><u>FOURTEENTH. COPIES AND LANGUAGE. </u></strong>
                    The Agreement and its Exhibits may be signed in any number
                    of copies. Each signed copy shall be deemed to be an
                    original thereof, but all the copies shall together
                    constitute one and the same instrument. This Agreement is
                    executed in English and Spanish, in case of any controversy
                    the Spanish language shall prevail<strong><u>.</u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p>
                    <strong>LEÍDO QUE FUE EL PRESENTE CONTRATO </strong>
                    <strong>
                        CONSTRUCCIÓN A PRECIO ALZADO Y TIEMPO DETERMINADO
                    </strong>
                    <strong>
                        Y CON PLENO CONOCIMIENTO DEL CONTENIDO, VALOR Y ALCANCE
                        JURÍDICO DEL MISMO, LO FIRMAN LAS PARTES EL DÍA '.$d->fecha_dia.'
                        DEL MES '.$d->fecha_mes.' DE '.$d->fecha_ano.'.<u></u>
                    </strong>
                </p>
            </td>
            <td width="14" valign="top">
            </td>
            <td width="263" valign="top">
                <p>
                    <strong>
                        READ AND AGREED ON THE CONTENT AND SCOPE OF THIS LUMP
                        SUM AND TIME LIMIT AGREEMENT FOR THE PROVISION OF
                        SERVICES, BOTH PARTIES EXECUTE THIS AGREEMENT ON
                        '.$d->fecha_dia.', ON '.$d->fecha_mes.' OF '.$d->fecha_ano.'.
                    </strong>
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="14" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="263" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262">
                <p align="center">
                    <strong>IDEASREWARD, S.A.P.I. DE C.V.</strong>
                </p>
                <p align="center">
                    Representada en este acto por el/herein represented by
                </p>
                <p align="center">
                    <strong>C. Miguel Angel Parada Montaño</strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="14">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="263">
                <p align="center">
                    Por Propio derecho/
                </p>
                <p align="center">
                    By its own right<strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="262" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="14" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="263" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
        </tr>
    </tbody>
</table>
  ';
  $return_ .= '</body>';
  $return_ .= '</html>';

  		return $return_;
	}

	private function contract_3($d) //Contrato MOU persona moral
	{
		$return_ ='';
  		$return_ .= '<html>';
  		$return_ .= '<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">';
 		$return_ .= '
	<style>
		body{
			position:absolute;
			width:100%;
			height:100%;
		}
	</style>';
  $return_ .= '<body>';
  $return_ .= '
		<table border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>
                        CARTA DE INTENCIÓN (EN LO SUCESIVO MOU), QUE CELEBRAN
                        POR UNA PARTE LA SOCIEDAD DENOMINADA IDEASREWARD,
                        S.A.P.I. DE C.V. (EN LO SUCESIVO “REWARD”) Y, POR LA
                        OTRA '.$d->m_sociedad.', DE CONFORMIDAD CON LOS TÉRMINOS Y
                        CONDICIONES SIGUIENTES:
                    </strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <strong>
                        MEMORANDUM OF UNDERSTANDING (HEREINAFTER "MOU"), HEREBY
                        ENTERED BETWEEN IDEASREWARD, S.A.P.I. DE C.V.
                        (HEREINAFTER "REWARD"), AND '.$d->m_sociedad.', IN ACCORDANCE WITH
                        THE TERMS AND CONDITIONS:
                    </strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p align="center">
                    <strong>TABLA DE CONTENIDOS </strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p align="center">
                    <strong>TABLE OF CONTENTS</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>I. </strong>
                    <strong>Descripción de la Operación</strong>
                </p>
                <p>
                    a. Operación
                </p>
                <p>
                    b. Inversiones
                </p>
                <p>
                    c. Intereses derivados de la Inversión
                </p>
                <p>
                    d. Contrato de Suscripción de Acciones
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <strong> I.</strong>
                    <strong>Operation Description</strong>
                </p>
                <p>
                    <a name="OLE_LINK2"></a>
                    <a name="OLE_LINK1"></a>
                    a. Operation
                </p>
                <p>
                    b. Investments
                </p>
                <p>
                    c. Interest derived from Investment
                </p>
                <p>
                    d. Share Subscription Agreement
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>II. </strong>
                    <strong>Condiciones Previas al Cierre</strong>
                </p>
                <p>
                    a. Condiciones de Cierre
                </p>
                <p>
                    b. Conducción del Negocio
                </p>
                <p>
                    c. Gobierno Corporativo y Empleados Clave
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <a name="OLE_LINK7">
                        <strong> II.</strong>
                        <strong>Pre-Closing Conditions</strong>
                    </a>
                    <strong></strong>
                </p>
                <p>
                    a. Closing conditions
                </p>
                <p>
                    b. Business Conduction
                </p>
                <p>
                    c. Corporate Governance and Key Employees
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>III. </strong>
                    <strong>Precio de la Operación y Mecánica de Pago</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <strong> III.</strong>
                    <strong>
                        Price of the Operation and Payment Mechanics
                    </strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>IV. </strong>
                    <strong>Misceláneos</strong>
                </p>
                <p>
                    a. Vigencia de la Oferta
                </p>
                <p>
                    b. Cesión de Derechos
                </p>
                <p>
                    c. No competencia
                </p>
                <p>
                    d. Confidencialidad
                </p>
                <p>
                    e. Ley y Jurisdicción
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <strong> IV.</strong>
                    <strong>Miscellaneous</strong>
                </p>
                <p>
                    a. Validity of the Offer
                </p>
                <p>
                    b. Cession of rights
                </p>
                <p>
                    c. No competition
                </p>
                <p>
                    d. Confidentiality
                </p>
                <p>
                    e. Law and Jurisdiction
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>I. Descripción de la Operación </strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <strong>I. Description of the Operation</strong>
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Nos complace presentar por medio de esta Carta de Intención
                    (“MOU” por sus siglas en inglés Memorandum of
                    Understanding) una propuesta para formalizar la intención
                    de '.$d->name.' (en lo sucesivo el “Inversionista”), debidamente
                    representada en este acto por '.$d->m_sociedad.', tal y como se
                    acredita con '.$d->identificacion.', para adquirir Acciones de Reward, y en
                    su caso, celebrar un contrato definitivo (el “Contrato de
                    Suscripción de Acciones”), conforme a los términos y
                    condiciones que a continuación se señalan (la “Operación”).
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
                <p>
                    We are pleased to present through this Memorandum of
                    Understanding ("MOU") to formalize the intention of '.$d->name.'
                    (hereinafter the "Investor"), herein duly represented by
                    '.$d->m_sociedad.' as established in '.$d->identificacion.', to acquire Reward Shares,
                    and in if applicable, enter into a definitive contract (the
                    " Share Subscription Agreement "), in accordance with the
                    terms and conditions set forth below (the " Operation ").
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    En lo sucesivo, Reward en conjunto con Inversionista se les
                    denominará las “Partes” e individualmente cada una de
                    ellas, una “Parte”.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
                <p>
                    In the following, Reward in conjunction with Investor will
                    be called the "Parties" and individually each of them, a "
                    Party "
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>a. Operación</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <strong>a. Operation</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>I. DESCRIPCIÓN DE LA OPERACIÓN</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <strong>I. DESCRIPTION OF THE OPERATION</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Nos complace presentar por medio de esta Carta de Intención
                    (“MOU” por sus siglas en inglés Memorandum of
                    Understanding) una propuesta para formalizar la intención
                    de '.$d->name.' (en lo sucesivo el “Inversionista”), debidamente
                    representada en este acto por '.$d->m_sociedad.', tal y como se
                    acredita con '.$d->identificacion.', para adquirir Acciones de Reward, y en
                    su caso, celebrar un contrato definitivo (el “Contrato de
                    Suscripción de Acciones”), conforme a los términos y
                    condiciones que a continuación se señalan (la “Operación”).
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
                <p>
                    The Parties agree to establish the terms and conditions
                    under which they will be carried out the acquisition by an
                    Investor of Reward shares, in order to contribute to the
                    stabilization and empowerment of the Tokens "IdealCoins" of
                    the Company, and establish potential and substantial
                    benefits, if the Investor in its discretion decide to
                    participate.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    En lo sucesivo, Reward en conjunto con Inversionista se les
                    denominará las “Partes” e individualmente cada una de
                    ellas, una “Parte”.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
                <p>
                    The Parties will work diligently to prepare the legal
                    documents for the implementation of the Operation (the
                    "Final Agreements").
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>b. Inversiones</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <strong>b. Investments</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Sujeto a la celebración de los Acuerdos Definitivos que
                    documenten la Operación, el Inversionista realizará un pago
                    total por la cantidad de $'.$d->usd.'.00 ('.convertir($d->usd).' dólares
                    00/100 USD) (en lo sucesivo la “Inversión”) a la firma del
                    presente MOU, o en su caso la cantidad en pesos equivalente
                    a dicho pago, y que para tales efectos se considerará la
                    cantidad de $'.$d->tipo_cambio.' como tipo de cambio.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
                <p>
                    Subject to the conclusion of the Final Agreements
                    documenting the Operation, the Investor will perform a
                    total payment in the amount of $ '.$d->usd.'.00 ( '.convert_number_to_words($d->usd).'
                    dollars 00/100 USD) (hereinafter the "Investment") upon the
                    signature of this MOU, or in its case the amount in pesos
                    equivalent to such payment, and which for such purposes
                    shall be considered the amount of $ '.$d->tipo_cambio.' as the
                    exchange rate.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Las Partes acuerdan que Reward entregará como garantía de
                    la Inversión a favor del Inversionista la cantidad total de
                    '.$d->idc.' ('.convertir($d->idc).') Tokens IdealCoins por concepto de
                    “Depósito en Garantía”.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
                <p>
                    The Parties agree that Reward will provide as a Guarantee
                    of the Investment to the Investor the amount of '.$d->idc.' (
                    '.convert_number_to_words($d->idc).' ) Tokens IdealCoins.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>c. Intereses derivados de la Inversión.</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <strong>c. Interest derived from Investment.</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Las Partes acuerdan que, de acuerdo a la Operación, por la
                    Inversión realizada, el Inversionista tendrá derecho a
                    recibir un 1% (uno por ciento) de rendimiento anual,
                    contado a partir de la fecha de firma del Contrato de
                    Suscripción de Acciones.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
                <p>
                    The Parties agree that according to the Transaction, for
                    the Investment made, the Investor will be entitled to
                    receive 1 % (one per cent) of annual return, counted as of
                    the date of signature of the Share Subscription Agreement.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>d. Contrato de suscripción de acciones.</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <strong>d. Subscription of shares Agreement.</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    A partir de la firma de este MOU y durante 180 (ciento
                    ochenta) días calendario posteriores a la fecha de firma
                    del presente, los Representantes de Reward y el
                    Inversionista de manera diligente y de buena fe negociarán
                    y prepararán el Contrato de Suscripción de Acciones y los
                    Acuerdos Definitivos, los cuales contendrán términos y
                    condiciones normalmente incluidas en operaciones de este
                    tipo, incluyendo: (i) las condiciones de cierre a las
                    cuales estaría sujeto el Contrato de Suscripción de
                    Acciones en relación con los Acuerdos Definitivos y su
                    mecánica (la “Fecha de Cierre”); (ii) declaraciones y
                    garantías de los Representantes Reward, la propiedad de las
                    Acciones y otras ordinariamente incluidas en esta clase de
                    operaciones, las cuales deberán ser correctas y vigentes a
                    la Fecha de Cierre del Contrato de Suscripción de Acciones;
                    (iii) cláusulas de conversión, término de la Inversión,
                    indemnización, cláusulas de no competencia, entre otras.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
                <p>
                    From the signing of this MOU and during 180 (one hundred
                    eighty) calendar days after the date of signature of this
                    agreement, Reward Representatives and the Investor
                    diligently and in good faith negotiate and prepare the
                    Subscription Shares the Final Agreement, which will contain
                    terms and conditions normally included in operations of
                    this type, including: (i) the closing conditions to which
                    the Share Subscription Agreement would be subject in
                    relation to the Definitive Agreements and their mechanics
                    (the "Closing Date"); (ii) representations and warranties
                    of the Reward Representatives, ownership of the Shares and
                    others ordinarily included in this class of transactions,
                    which must be correct and in force on the Closing Date of
                    the Share Subscription Agreement; (iii) conversion clauses,
                    term of investment, compensation clauses, non-compete
                    clauses, among others.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>II. CONDICIONES PREVIAS AL CIERRE.</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <strong>II. PRE-CLOSING CONDITIONS.</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>a. Condiciones de cierre</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <strong>a. Closing conditions.</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Entre otras condiciones, la celebración del Contrato de
                    Suscripción de Acciones estará sujeta al cumplimiento de
                    las siguientes condiciones:
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
                <p>
                    Among other conditions, the execution of the Share
                    Subscription Agreement must comply with the following
                    conditions:
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    I. La obtención, si aplicare, de todas las autorizaciones y
                    consentimientos societarios y/o gubernamentales requeridos;
                </p>
                <p>
                    II. La ausencia de cualquier cambio material adverso en la
                    situación financiera, legal, fiscal, operativa o de las
                    proyecciones de Reward.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
                <p>
                    I. The obtaining, if applicable, of all the required
                    governmental and societary/or governmental authorizations
                    and /or consents;
                </p>
                <p>
                    II. The absence of any adverse material change in the
                    financial, legal, tax, operational or of the Reward\'s
                    projections.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>b. Conducción del Negocio</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <strong>b. Business Management</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Durante el período que corra entre la firma de esta carta
                    de intención y la firma del Contrato de Suscripción de
                    Acciones, Reward: (i) sólo podrá operar en el curso
                    ordinario de negocios de forma consistente con las
                    prácticas de los últimos meses de operación; y (ii) deberá
                    realizar sus mejores esfuerzos para mantener el negocio y
                    mantener las relaciones existentes con clientes,
                    proveedores y entidades gubernamentales, según sea
                    aplicable.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
                <p>
                    During the period between the signing of this letter of
                    intent and the signing of the Subscription Shares
                    Agreement, Reward: (i) may only operate in the ordinary
                    course of business consistent with the practices of the
                    past months operation; and (ii) must make its best efforts
                    to maintain the business and maintain existing
                    relationships with customers, suppliers and government
                    entities, as applicable.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>III. PRECIO DE LA OPERACIÓN.</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <strong>III. PRICE OF THE OPERATION</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    La Operación se realizará de acuerdo a lo establecido en el
                    numeral I romano del presente MOU, y consecuentemente el
                    Inversionista realizará un pago de $'.$d->usd.'.00
                    ('.convertir($d->usd).'dólares 00/100 USD) en una sola exhibición a la
                    firma del presente
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
                <p>
                    The operation will be carried out according to the
                    provisions of the Roman number I of this MOU, and
                    consequently, the investor will pay $ '.$d->usd.'. 00 ('.convert_number_to_words($d->usd).'
                    dollars 00/100 USD) in a single exhibition at the signature
                    of the present.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Se precisa que previo a la adquisición de las Acciones de
                    Reward, los Representantes Reward deberán haber finalizado
                    las operaciones corporativas necesarias para llevar a cabo
                    la Operación.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
                <p>
                    It is specified that prior to the acquisition of the Reward
                    Shares, the Reward Representatives must have completed the
                    corporate operations necessary to carry out the
                    Transaction.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>IV. MISCELÁNEOS</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <strong>IV. MISCELLANEOUS</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>a. Vigencia de la Carta de Intensión</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <strong>a. The validity of the Letter of Intent</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    El presente MOU tendrá una vigencia de 180 (ciento ochenta)
                    días naturales, o de lo contrario quedará automáticamente
                    terminada y dejará de surtir sus efectos sin necesidad de
                    acto posterior alguno.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
                <p>
                    This MOU will have a validity of 180 (one hundred and
                    eighty) calendar days, or else it will be automatically
                    terminated and will cease to have its effects without the
                    need for any subsequent act.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>b. Cesión de derechos. </strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <strong>b. Assignment of rights</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Ninguna de las Partes podrá ceder total o parcialmente
                    ninguno de los derechos u obligaciones contenidas en el
                    presente, sin el consentimiento previo y por escrito de la
                    otra Parte
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
                <p>
                    None of the Parties may assign totally or partially none of
                    the rights or obligations contained herein, without the
                    prior written consent of the other Part.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>c. No competencia.</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <strong>c. No-Compete</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Los Acuerdos Definitivos deberán incluir provisiones
                    explícitas para evitar que las Partes se establezcan por sí
                    o a través de cualquier asociación, sociedad, acuerdo, etc.
                    como competidor de Reward y las entidades filiales o
                    subsidiarias, este acuerdo deberá incluir a consejeros,
                    funcionarios y/o ejecutivos clave de las Partes y entrará
                    en vigor una vez cerrada la Operación y al menos tres años
                    después del Pago Definitivo.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
                <p>
                    The final agreements should include explicit provisions to
                    prevent appointments the Parties as established by itself
                    or through any association, partnership, agreement, etc. as
                    a competitor of Reward and its subsidiaries or
                    subsidiaries, and agreement shall include directors,
                    officers and/or executives as key Parties and shall enter
                    into force once the operation is closed and at least three
                    years after the final payment.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>d. Confidencialidad</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <strong>d. Confidentiality</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Ni el Inversionista, ni los Representante Reward, ni sus
                    respectivas afiliadas o sus respectivos consejeros,
                    funcionarios, ejecutivos, empleados, agentes o consultores
                    podrán divulgar la existencia de esta Oferta, su contenido,
                    la identidad de las Partes, la participación de las Partes
                    en este proceso y la situación del mismo ni el hecho de que
                    se haya presentado o no esta oferta, salvo que se requiera
                    por ley o por resolución definitiva y bajo cosa juzgada de
                    un tribunal competente.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
                <p>
                    Neither the Investor, nor Reward Representative, or their
                    respective affiliates or their respective directors,
                    officers, executives, employees, agents or consultants may
                    disclose the existence of this Offer, its content, the
                    identity of Parties, the participation of the Parties. This
                    process and the situation of the same or the fact that this
                    offer has been presented or not unless required by law or
                    by the final decision and res judicata of a competent
                    court.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>e. Acuerdos</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <strong>e. Agreements</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Salvo que expresamente se establezcan en este MOU
                    obligaciones específicas a cargo de las Partes, ni las
                    negociaciones, ni los actos u omisiones de las Partes en
                    relación con el presente podrán establecer obligaciones o
                    responsabilidades a cargo de Inversionista y/o de sus
                    afiliadas, subsidiarias, o de sus respectivos accionistas,
                    funcionarios, representantes, y/o afiliadas. Únicamente
                    después de que las Partes hayan negociado y celebrado entre
                    ellas los contratos definitivos en términos aceptables para
                    éstas, las mismas estarán obligadas a llevar a cabo la
                    transacción propuesta.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
                <p>
                    Unless expressmen established in this MOU specific
                    obligations of the parties, neither the negotiations nor
                    the acts or omissions of the Parties related to this MOU
                    may establish obligations or responsibilities in charge of
                    the Investor and/or its affiliates, subsidiaries, or their
                    respective shareholders, officers, representatives, and/or
                    affiliates. Only after the Parties have negotiated and
                    concluded the definitive agreements among themselves on
                    terms acceptable to them, will they be obliged to carry out
                    the proposed transaction.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>f. Ley y Jurisdicción</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <strong>f. Governing Law and Jurisdiction.</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Para la interpretación y cumplimiento del presente, las
                    partes se someten expresamente a la legislación de los
                    Estados Unidos Mexicanos, así como a la jurisdicción de los
                    tribunales federales competentes de la Ciudad de México,
                    renunciando desde ahora a cualquier otro fuero que pudiera
                    corresponderles por razón de sus domicilios presentes o
                    futuros.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
                <p>
                    For the interpretation and fulfilment of the present, the
                    parties expressly submit themselves to the legislation of
                    Mexico, as well as to the jurisdiction of the competent
                    federal courts of Mexico City, renouncing from now on any
                    other jurisdiction that may correspond to them by reason of
                    your present or future addresses.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Este Convenio es redactado en idiomas español e inglés, en
                    el entendido que en caso de alguna inconsistencia o
                    controversia entre las disposiciones establecidas en idioma
                    español y las establecidas en idioma inglés, regirá y
                    prevalecerá lo establecido en idioma español.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
                <p>
                    This Agreement is written in Spanish and English, provided
                    that in case of any inconsistency or controversy between
                    the provisions established in English and those established
                    in English language, it will be governed by and will
                    prevail the Spanish language.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>V. ACEPTACIÒN</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p>
                    <strong>V. ACCEPTANCE</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Leído que fue, por las Partes, debidamente enteradas del
                    contenido y alcance legal de todas y cada una de las
                    cláusulas del presente Convenio, lo ratifican y suscriben
                    de conformidad, a '.$d->fecha_completa.', en '.$d->lugar.' en dos
                    (2) tantos originales, quedando un ejemplar en cada una de
                    las Partes.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
                <p>
                    Having read this document, the parties expressly ratify and
                    sign it as evidence of its knowledge and legal full force
                    according to '.$d->fecha_completa.' the '.$d->lugar.', executed in 2
                    exhibits, one for each of the Parties.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p align="center">
                    <strong>"REWARD”</strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p align="center">
                    <strong>“INVESTOR”</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p align="center">
                    <strong>IDEASREWARD, S.A.P.I. DE C.V.</strong>
                </p>
                <p align="center">
                    Representada en este acto por el/here in represented by
                </p>
                <p align="center">
                    <strong>(*****)</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p align="center">
                    <strong>'.$d->m_sociedad.'</strong>
                </p>
                <p align="center">
                    Representada en este acto por el/Here in represented by
                </p>
                <p align="center">
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="331" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p align="center">
                    TESTIGO/WITNESS
                </p>
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
                <p align="center">
                    TESTIGO/WITNESS
                </p>
                <p align="center">
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="331" valign="top">
            </td>
        </tr>
    </tbody>
</table>	
';
  $return_ .= '</body>';
  $return_ .= '</html>';

  		return $return_;


	}
	private function contract_4($d) //Contrato MOU persona fisica
	{
		$return_ ='';
  		$return_ .= '<html>';
  		$return_ .= '<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">';
 		$return_ .= '
	<style>
		body{
			position:absolute;
			width:100%;
			height:100%;
		}
	</style>';
  $return_ .= '<body>';
  $return_ .= '
  <table border="0" cellspacing="0" cellpadding="0" width="728">
    <tbody>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>
                        CARTA DE INTENCIÓN (EN LO SUCESIVO MOU), QUE CELEBRAN
                        POR UNA PARTE LA SOCIEDAD DENOMINADA IDEASREWARD,
                        S.A.P.I. DE C.V. (EN LO SUCESIVO “REWARD”) Y, POR LA
                        OTRA '.$d->m_sociedad.', DE CONFORMIDAD CON LOS TÉRMINOS Y
                        CONDICIONES SIGUIENTES:
                    </strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <strong>
                        MEMORANDUM OF UNDERSTANDING (HEREINAFTER "MOU"), HEREBY
                        ENTERED BETWEEN IDEASREWARD, S.A.P.I. DE C.V.
                        (HEREINAFTER "REWARD"), AND '.$d->m_sociedad.', IN ACCORDANCE WITH
                        THE TERMS AND CONDITIONS:
                    </strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p align="center">
                    <strong>TABLA DE CONTENIDOS </strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p align="center">
                    <strong>TABLE OF CONTENTS</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>I. </strong>
                    <strong>Descripción de la Operación</strong>
                </p>
                <p>
                    a. Operación
                </p>
                <p>
                    b. Inversiones
                </p>
                <p>
                    c. Intereses derivados de la Inversión
                </p>
                <p>
                    d. Contrato de Suscripción de Acciones
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <strong> I.</strong>
                    <strong>Operation Description</strong>
                </p>
                <p>
                    <a name="OLE_LINK2"></a>
                    <a name="OLE_LINK1"></a>
                    a. Operation
                </p>
                <p>
                    b. Investments
                </p>
                <p>
                    c. Interest derived from Investment
                </p>
                <p>
                    d. Share Subscription Agreement
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>II. </strong>
                    <strong>Condiciones Previas al Cierre</strong>
                </p>
                <p>
                    a. Condiciones de Cierre
                </p>
                <p>
                    b. Conducción del Negocio
                </p>
                <p>
                    c. Gobierno Corporativo y Empleados Clave
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <a name="OLE_LINK7">
                        <strong> II.</strong>
                        <strong>Pre-Closing Conditions</strong>
                    </a>
                    <strong></strong>
                </p>
                <p>
                    a. Closing conditions
                </p>
                <p>
                    b. Business Conduction
                </p>
                <p>
                    c. Corporate Governance and Key Employees
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>III. </strong>
                    <strong>Precio de la Operación y Mecánica de Pago</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <strong> III.</strong>
                    <strong>
                        Price of the Operation and Payment Mechanics
                    </strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>IV. </strong>
                    <strong>Misceláneos</strong>
                </p>
                <p>
                    a. Vigencia de la Oferta
                </p>
                <p>
                    b. Cesión de Derechos
                </p>
                <p>
                    c. No competencia
                </p>
                <p>
                    d. Confidencialidad
                </p>
                <p>
                    e. Ley y Jurisdicción
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <strong> IV.</strong>
                    <strong>Miscellaneous</strong>
                </p>
                <p>
                    a. Validity of the Offer
                </p>
                <p>
                    b. Cession of rights
                </p>
                <p>
                    c. No competition
                </p>
                <p>
                    d. Confidentiality
                </p>
                <p>
                    e. Law and Jurisdiction
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>I. Descripción de la Operación </strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <strong>I. Description of the Operation</strong>
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Intención (“MOU” por sus siglas en inglés Memorandum of
                    Understanding) una propuesta para formalizar la intención
                    de [*****] (en lo sucesivo el “Inversionista”), por su
                    propio derecho para adquirir Acciones de Reward, y en su
                    caso, celebrar un contrato definitivo (el “Contrato de
                    Suscripción de Acciones”), conforme a los términos y
                    condiciones que a continuación se señalan (la “Operación”).
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
                <p>
                    We are pleased to present through this Letter of Intent
                    ("MOU" for its acronym in English Memorandum of
                    Understanding) a proposal to formalize the intention of
                    [*****] (hereinafter the "Investor"), by its own right, to
                    acquire Reward Shares, and in if applicable, enter into a
                    definitive contract (the " Share Subscription Agreement "),
                    in accordance with the terms and conditions set forth below
                    (the " Operation ").
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    En lo sucesivo, Reward en conjunto con Inversionista se les
                    denominará las “Partes” e individualmente cada una de
                    ellas, una “Parte”.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
                <p>
                    In the following, Reward in conjunction with Investor will
                    be called the "Parties" and individually each of them, a "
                    Party "
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>a. Operación</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <strong>a. Operation</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>I. DESCRIPCIÓN DE LA OPERACIÓN</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <strong>I. DESCRIPTION OF THE OPERATION</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Nos complace presentar por medio de esta Carta de Intención
                    (“MOU” por sus siglas en inglés Memorandum of
                    Understanding) una propuesta para formalizar la intención
                    de '.$d->name.' (en lo sucesivo el “Inversionista”), debidamente
                    representada en este acto por '.$d->m_sociedad.', tal y como se
                    acredita con '.$d->identificacion.', para adquirir Acciones de Reward, y en
                    su caso, celebrar un contrato definitivo (el “Contrato de
                    Suscripción de Acciones”), conforme a los términos y
                    condiciones que a continuación se señalan (la “Operación”).
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
                <p>
                    The Parties agree to establish the terms and conditions
                    under which they will be carried out the acquisition by an
                    Investor of Reward shares, in order to contribute to the
                    stabilization and empowerment of the Tokens "IdealCoins" of
                    the Company, and establish potential and substantial
                    benefits, if the Investor in its discretion decide to
                    participate.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    En lo sucesivo, Reward en conjunto con Inversionista se les
                    denominará las “Partes” e individualmente cada una de
                    ellas, una “Parte”.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
                <p>
                    The Parties will work diligently to prepare the legal
                    documents for the implementation of the Operation (the
                    "Final Agreements").
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>b. Inversiones</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <strong>b. Investments</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Sujeto a la celebración de los Acuerdos Definitivos que
                    documenten la Operación, el Inversionista realizará un pago
                    total por la cantidad de $'.$d->usd.'.00 ('.convertir($d->usd).' dólares
                    00/100 USD) (en lo sucesivo la “Inversión”) a la firma del
                    presente MOU, o en su caso la cantidad en pesos equivalente
                    a dicho pago, y que para tales efectos se considerará la
                    cantidad de $'.$d->tipo_cambio.' como tipo de cambio.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
                <p>
                    Subject to the conclusion of the Final Agreements
                    documenting the Operation, the Investor will perform a
                    total payment in the amount of $ '.$d->usd.'.00 ( '.convert_number_to_words($d->usd).'
                    dollars 00/100 USD) (hereinafter the "Investment") upon the
                    signature of this MOU, or in its case the amount in pesos
                    equivalent to such payment, and which for such purposes
                    shall be considered the amount of $ '.$d->tipo_cambio.' as the
                    exchange rate.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Las Partes acuerdan que Reward entregará como garantía de
                    la Inversión a favor del Inversionista la cantidad total de
                    '.$d->idc.' ('.convertir($d->idc).') Tokens IdealCoin por concepto de
                    “Depósito en Garantía”.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
                <p>
                    The Parties agree that Reward will provide as a Guarantee
                    of the Investment to the Investor the amount of '.$d->idc.' (
                    '.convert_number_to_words($d->idc).' ) Tokens IdealCoin.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>c. Intereses derivados de la Inversión</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <strong>c. Interest derived from Investment</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Las Partes acuerdan que, de acuerdo a la Operación, por la
                    Inversión realizada, el Inversionista tendrá derecho a
                    recibir un 1% (uno por ciento) de rendimiento anual,
                    contado a partir de la fecha de firma del Contrato de
                    Suscripción de Acciones.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
                <p>
                    The Parties agree that according to the Transaction, for
                    the Investment made, the Investor will be entitled to
                    receive 1 % (one per cent) of annual return, counted as of
                    the date of signature of the Share Subscription Agreement.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>d. Contrato de suscripción de acciones</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <strong>d. Subscription of shares Agreement</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    A partir de la firma de este MOU y durante 180 (ciento
                    ochenta) días calendario posteriores a la fecha de firma
                    del presente, los Representantes de Reward y el
                    Inversionista de manera diligente y de buena fe negociarán
                    y prepararán el Contrato de Suscripción de Acciones y los
                    Acuerdos Definitivos, los cuales contendrán términos y
                    condiciones normalmente incluidas en operaciones de este
                    tipo, incluyendo: (i) las condiciones de cierre a las
                    cuales estaría sujeto el Contrato de Suscripción de
                    Acciones en relación con los Acuerdos Definitivos y su
                    mecánica (la “Fecha de Cierre”); (ii) declaraciones y
                    garantías de los Representantes Reward, la propiedad de las
                    Acciones y otras ordinariamente incluidas en esta clase de
                    operaciones, las cuales deberán ser correctas y vigentes a
                    la Fecha de Cierre del Contrato de Suscripción de Acciones;
                    (iii) cláusulas de conversión, término de la Inversión,
                    indemnización, cláusulas de no competencia, entre otras.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
                <p>
                    From the signing of this MOU and during 180 (one hundred
                    eighty) calendar days after the date of signature of this
                    agreement, Reward Representatives and the Investor
                    diligently and in good faith negotiate and prepare the
                    Subscription Shares the Final Agreement, which will contain
                    terms and conditions normally included in operations of
                    this type, including: (i) the closing conditions to which
                    the Share Subscription Agreement would be subject in
                    relation to the Definitive Agreements and their mechanics
                    (the "Closing Date"); (ii) representations and warranties
                    of the Reward Representatives, ownership of the Shares and
                    others ordinarily included in this class of transactions,
                    which must be correct and in force on the Closing Date of
                    the Share Subscription Agreement; (iii) conversion clauses,
                    term of investment, compensation clauses, non-compete
                    clauses, among others.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>II. CONDICIONES PREVIAS AL CIERRE.</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <strong>II. PRE-CLOSING CONDITIONS.</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>a. Condiciones de cierre</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <strong>a. Closing conditions</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Entre otras condiciones, la celebración del Contrato de
                    Suscripción de Acciones estará sujeta al cumplimiento de
                    las siguientes condiciones:
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
                <p>
                    Among other conditions, the execution of the Share
                    Subscription Agreement must comply with the following
                    conditions:
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    I. La obtención, si aplicare, de todas las autorizaciones y
                    consentimientos societarios y/o gubernamentales requeridos;
                </p>
                <p>
                    II. La ausencia de cualquier cambio material adverso en la
                    situación financiera, legal, fiscal, operativa o de las
                    proyecciones de Reward.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
                <p>
                    I. The obtaining, if applicable, of all the required
                    governmental and societary/or governmental authorizations
                    and /or consents;
                </p>
                <p>
                    II. The absence of any adverse material change in the
                    financial, legal, tax, operational or of the Reward\'s
                    projections.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>b. Conducción del Negocio</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <strong>b. Business Management</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Durante el período que corra entre la firma de esta carta
                    de intención y la firma del Contrato de Suscripción de
                    Acciones, Reward: (i) sólo podrá operar en el curso
                    ordinario de negocios de forma consistente con las
                    prácticas de los últimos meses de operación; y (ii) deberá
                    realizar sus mejores esfuerzos para mantener el negocio y
                    mantener las relaciones existentes con clientes,
                    proveedores y entidades gubernamentales, según sea
                    aplicable.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
                <p>
                    During the period between the signing of this letter of
                    intent and the signing of the Subscription Shares
                    Agreement, Reward: (i) may only operate in the ordinary
                    course of business consistent with the practices of the
                    past months operation; and (ii) must make its best efforts
                    to maintain the business and maintain existing
                    relationships with customers, suppliers and government
                    entities, as applicable.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>III. PRECIO DE LA OPERACIÓN</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <strong>III. PRICE OF THE OPERATION</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    La Operación se realizará de acuerdo a lo establecido en el
                    numeral I romano del presente MOU, y consecuentemente el
                    Inversionista realizará un pago de $'.$d->usd.'.00
                    ('.convertir($d->usd).'dólares 00/100 USD) en una sola exhibición a la
                    firma del presente
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
                <p>
                    The operation will be carried out according to the
                    provisions of the Roman number I of this MOU, and
                    consequently, the investor will pay $ '.$d->usd.'. 00 ('.convert_number_to_words($d->usd).'
                    dollars 00/100 USD) in a single exhibition at the signature
                    of the present.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Se precisa que previo a la adquisición de las Acciones de
                    Reward, los Representantes Reward deberán haber finalizado
                    las operaciones corporativas necesarias para llevar a cabo
                    la Operación.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
                <p>
                    It is specified that prior to the acquisition of the Reward
                    Shares, the Reward Representatives must have completed the
                    corporate operations necessary to carry out the
                    Transaction.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>IV. MISCELÁNEOS</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <strong>IV. MISCELLANEOUS</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>a. Vigencia de la Carta de Intensión</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <strong>a. The validity of the Letter of Intent</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    El presente MOU tendrá una vigencia de 180 (ciento ochenta)
                    días naturales, o de lo contrario quedará automáticamente
                    terminada y dejará de surtir sus efectos sin necesidad de
                    acto posterior alguno.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
                <p>
                    This MOU will have a validity of 180 (one hundred and
                    eighty) calendar days, or else it will be automatically
                    terminated and will cease to have its effects without the
                    need for any subsequent act.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>b. Cesión de derechos. </strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <strong>b. Assignment of rights</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Ninguna de las Partes podrá ceder total o parcialmente
                    ninguno de los derechos u obligaciones contenidas en el
                    presente, sin el consentimiento previo y por escrito de la
                    otra Parte
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
                <p>
                    None of the Parties may assign totally or partially none of
                    the rights or obligations contained herein, without the
                    prior written consent of the other Part.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>c. No competencia</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <strong>c. No-Compete</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Los Acuerdos Definitivos deberán incluir provisiones
                    explícitas para evitar que las Partes se establezcan por sí
                    o a través de cualquier asociación, sociedad, acuerdo, etc.
                    como competidor de Reward y las entidades filiales o
                    subsidiarias, este acuerdo deberá incluir a consejeros,
                    funcionarios y/o ejecutivos clave de las Partes y entrará
                    en vigor una vez cerrada la Operación y al menos tres años
                    después del Pago Definitivo.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
                <p>
                    The final agreements should include explicit provisions to
                    prevent appointments the Parties as established by itself
                    or through any association, partnership, agreement, etc. as
                    a competitor of Reward and its subsidiaries or
                    subsidiaries, and agreement shall include directors,
                    officers and/or executives as key Parties and shall enter
                    into force once the operation is closed and at least three
                    years after the final payment.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>d. Confidencialidad</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <strong>d. Confidentiality</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Ni el Inversionista, ni los Representante Reward, ni sus
                    respectivas afiliadas o sus respectivos consejeros,
                    funcionarios, ejecutivos, empleados, agentes o consultores
                    podrán divulgar la existencia de esta Oferta, su contenido,
                    la identidad de las Partes, la participación de las Partes
                    en este proceso y la situación del mismo ni el hecho de que
                    se haya presentado o no esta oferta, salvo que se requiera
                    por ley o por resolución definitiva y bajo cosa juzgada de
                    un tribunal competente.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
                <p>
                    Neither the Investor, nor Reward Representative, or their
                    respective affiliates or their respective directors,
                    officers, executives, employees, agents or consultants may
                    disclose the existence of this Offer, its content, the
                    identity of Parties, the participation of the Parties. This
                    process and the situation of the same or the fact that this
                    offer has been presented or not unless required by law or
                    by the final decision and res judicata of a competent
                    court.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>e. Acuerdos</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <strong>e. Agreements</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Salvo que expresamente se establezcan en este MOU
                    obligaciones específicas a cargo de las Partes, ni las
                    negociaciones, ni los actos u omisiones de las Partes en
                    relación con el presente podrán establecer obligaciones o
                    responsabilidades a cargo de Inversionista y/o de sus
                    afiliadas, subsidiarias, o de sus respectivos accionistas,
                    funcionarios, representantes, y/o afiliadas. Únicamente
                    después de que las Partes hayan negociado y celebrado entre
                    ellas los contratos definitivos en términos aceptables para
                    éstas, las mismas estarán obligadas a llevar a cabo la
                    transacción propuesta.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
                <p>
                    Unless expressmen established in this MOU specific
                    obligations of the parties, neither the negotiations nor
                    the acts or omissions of the Parties related to this MOU
                    may establish obligations or responsibilities in charge of
                    the Investor and/or its affiliates, subsidiaries, or their
                    respective shareholders, officers, representatives, and/or
                    affiliates. Only after the Parties have negotiated and
                    concluded the definitive agreements among themselves on
                    terms acceptable to them, will they be obliged to carry out
                    the proposed transaction.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>f. Ley y Jurisdicción</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <strong>f. Governing Law and Jurisdiction</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Para la interpretación y cumplimiento del presente, las
                    partes se someten expresamente a la legislación de los
                    Estados Unidos Mexicanos, así como a la jurisdicción de los
                    tribunales federales competentes de la Ciudad de México,
                    renunciando desde ahora a cualquier otro fuero que pudiera
                    corresponderles por razón de sus domicilios presentes o
                    futuros.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
                <p>
                    For the interpretation and fulfilment of the present, the
                    parties expressly submit themselves to the legislation of
                    Mexico, as well as to the jurisdiction of the competent
                    federal courts of Mexico City, renouncing from now on any
                    other jurisdiction that may correspond to them by reason of
                    your present or future addresses.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Este Convenio es redactado en idiomas español e inglés, en
                    el entendido que en caso de alguna inconsistencia o
                    controversia entre las disposiciones establecidas en idioma
                    español y las establecidas en idioma inglés, regirá y
                    prevalecerá lo establecido en idioma español.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
                <p>
                    This Agreement is written in Spanish and English, provided
                    that in case of any inconsistency or controversy between
                    the provisions established in English and those established
                    in English language, it will be governed by and will
                    prevail the Spanish language.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    <strong>V. ACEPTACIÒN</strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p>
                    <strong>V. ACCEPTANCE</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p>
                    Leído que fue, por las Partes, debidamente enteradas del
                    contenido y alcance legal de todas y cada una de las
                    cláusulas del presente Convenio, lo ratifican y suscriben
                    de conformidad, a '.$d->m_e_fecha.', en '.$d->lugar.' en dos
                    (2) tantos originales, quedando un ejemplar en cada una de
                    las Partes.
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
                <p>
                    Having read this document, the parties expressly ratify and
                    sign it as evidence of its knowledge and legal full force
                    according to '.$d->m_e_fecha.' the '.$d->lugar.', executed in 2
                    exhibits, one for each of the Parties.
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p align="center">
                    <strong>Reward</strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p align="center">
                    <strong>Investor</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p align="center">
                    <strong>IDEASREWARD, S.A.P.I. DE C.V.</strong>
                </p>
                <p align="center">
                    Representada en este acto por el/here in represented by
                </p>
                <p align="center">
                    <strong>(******)</strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p align="center">
                    <strong>'.$d->m_sociedad.'</strong>
                </p>
                <p align="center">
                    Por Propio derecho/
                </p>
                <p align="center">
                    By its own right<strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="28" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="350" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
                <p align="center">
                    TESTIGO/WITNESS
                </p>
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
                <p align="center">
                    TESTIGO/WITNESS
                </p>
                <p align="center">
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="350" valign="top">
            </td>
            <td width="28" valign="top">
            </td>
            <td width="350" valign="top">
            </td>
        </tr>
    </tbody>
</table>
';
  $return_ .= '</body>';
  $return_ .= '</html>';

  		return $return_;
  	}
  	private function contract_5($d) //Contrato NDA persona moral
	{
		$return_ ='';
  		$return_ .= '<html>';
  		$return_ .= '<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">';
 		$return_ .= '
	<style>
		body{
			position:absolute;
			width:100%;
			height:100%;
		}
	</style>';
  $return_ .= '<body>';
  $return_ .= '
	<table border="0" cellspacing="0" cellpadding="0" width="705">
    <tbody>
        <tr>
            <td width="346" valign="top">
                <p align="center">
                    <strong>
                        CONVENIO DE CONFIDENCIALIDAD Y NO DIVULGACIÓN
                    </strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p align="center">
                    <strong>MUTUAL NON-DISCLOSURE AGREEMENT</strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    Convenio de Confidencialidad y no Divulgación ( en adelante
                    el “Convenio”) que celebran por una parte IDEASREWARD,
                    S.A.P.I. DE C.V., a la que en lo sucesivo se le denominará
                    “IDEASREWARD” representada en este acto por Miguel Angel
                    Parada Montaño en su carácter de apoderado legal y por la
                    otra parte '.$d->m_sociedad.', a la que en lo sucesivo se le denominará
                    como “Inversionista”, representada en este acto por '.$d->name.' en
                    su carácter de representante legal, en lo sucesivo “las
                    Partes”, al tenor de las siguientes declaraciones y
                    clausulas:<strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    Non-Disclosure Agreement (hereafter named as “NDA”) hereby
                    entered by and between IDEASREWARD, S.A.P.I. DE C.V.
                    (hereafter named as “IDEASREWARD”) legally represented by
                    Miguel Angel Parada Montaño and '.$d->m_sociedad.', (hereafter named
                    as “investor”) legally represented by '.$d->name.', in the following
                    both referred to as “the parties” according to the
                    following statements and clauses:
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong></strong>
                </p>
                <p>
                    <strong>I.- DECLARAN LAS PARTES QUE:</strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p>
                    <strong></strong>
                </p>
                <p>
                    <strong>I.- THE PARTIES STATE THAT:</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong>a) </strong>
                    IDEASREWARD es una sociedad legalmente constituida de
                    conformidad con las Leyes de los Estados Unidos Mexicanos,
                    según lo acreditan en términos de los documentos que se
                    agregan como <strong>Anexo “1”;</strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong>a) </strong>
                    IDEASREWARD is a company organized under Mexican Regulation
                    as shown by the documents with the Laws of the United
                    Mexican States, as accredited in terms of the documents
attached to the NDA as <strong>Exhibits</strong>                    <strong>“1”.</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong>b) </strong>
                    '.$d->m_sociedad.' es una empresa debidamente constituida de conformidad
                    con la legislación vigente de '.$d->nda_pais.', acreditada
en términos de los documentos que se agregan como                    <strong>Anexo "2"</strong>;
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong>b) </strong>
                    '.$d->m_sociedad.' is a company duly incorporated pursuant the current
                    legislation of '.$d->nda_pais.', as accredited in terms
of the documents attached to the NDA as                    <strong>Exhibit"2"</strong>.
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong>c) </strong>
                    Sus representantes y/o apoderados legales tienen poderes y
                    facultades suficientes para obligar a su representada en
                    términos del presente Convenio, de conformidad con los
documentos que se agregan como<strong><em>Anexos “3” </em></strong>                    <em>y<strong> “4</strong></em>” respectivamente por cada
                    una de las partes.
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong>c) </strong>
                    The Parties state that their legal representatives have the
                    sufficient power to bind the company they represent in
                    accordance to this NDA as prove with the documents attached
as <strong>Exhibits</strong> <strong>“3” </strong>and                    <strong> Exhibit “4”.</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong>d) </strong>
                    Dentro de su objeto social se encuentra permitida la
                    celebración de este tipo de convenios, por lo que su
                    celebración y ejecución no contraviene a sus estatutos
                    sociales, ni disposición legal alguna que le aplique.
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong>d) </strong>
                    The social purpose of the Parties let them conclude the
                    NDA, so its conclusion and execution does not contravene
                    its articles of association, or any legal clause that
                    applies.
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong>e) </strong>
Reconocen que cada una de ellas podrá obtener (                    <strong>“Parte Receptora” y/o “Receptor”</strong>) cierta
información confidencial de la otra parte (                    <strong>“Parte Reveladora” y/o “Divulgante”</strong>), en
                    virtud de que se encuentran en un proceso de pláticas a fin
                    de iniciar un periodo de comunicaciones y/o reuniones con
                    la intensión de inversión en (<strong>“Proyecto”</strong> ,
                    por lo que es su deseo asegurar la confidencialidad de la
                    información que cada una podrá poner a disposición de la
                    otra..
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong>e) </strong>
Each Party recognized that each of them may obtain                    <strong>("Receiving Party" and/or "Receiver")</strong>
                    certain confidential information from the other party
                    <strong>
                        ("Disclosing Party" and / or "Disclosing Party"),
                    </strong>
                    because they are in a process of talks in order to initiate
                    a period of communications and / or meetings with the
                    intention of investing on <strong>"Project")</strong>, so
                    it is their desire to ensure the confidentiality of the
                    information that each may make available to the other.
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong>f) </strong>
                    Visto lo antes manifestado, estando de acuerdo con su
                    alcance y contenido, las partes se reconocen la
                    personalidad que ostentan en este acto jurídico, por lo que
                    no existiendo, dolo, error o mala fé en su voluntad,
                    convienen sujetar el presente Convenio al tenor de las
                    siguientes:
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong>f) </strong>
                    The Parties hereby acknowledge the character which they
                    hold in this act, therefore, if there is no fraud, error or
                    bad faith in their will, they agree to subject the present
                    NDA to the following:
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong>C L Á U S U L A S</strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong>C L A U S E S</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong><u>PRIMERA. INFORMACIÓN CONFIDENCIAL. </u></strong>
                    Se entiende por “Información Confidencial” cualquier
                    información que la Parte Divulgante, sus empresas
                    tenedoras, afiliadas, filiales, subsidiarias y/o empresas
                    relacionadas con la misma, revelen, transmitan, y/o
                    entreguen a la Parte Receptora por virtud del Proyecto a;
                    i) cualquier secreto, técnico o no; ii) información que le
                    signifique obtener o mantener una ventaja competitiva o
                    económica frente a terceros en la realización de
                    actividades de su negocio y económicas, que de una manera
                    enunciativa más no limitativa comprende: diseños, precios,
                    costos, dibujos, software, datos, prototipos, información
                    técnica, legal, financiera, comercial, nombres de clientes
                    o socios potenciales, proveedores, propuestas de negocios,
                    estrategias de negocios, estructura organizacional,
                    composición de la sociedad y de la corporación, reportes,
                    planes, proyecciones de mercado, datos y cualquier otra
                    información industrial, junto con fórmulas, mecanismos,
                    patrones, métodos, técnicas, procesos de análisis, marcas
                    registradas o no registradas, nombres comerciales,
                    patentes, documentos de trabajo, compilaciones,
                    comparaciones, contratos, convenios, estudios de
                    investigación, y/o información de terceros a la cual la
                    Parte Divulgante está obligada a mantener como
                    confidencial. El contenido y celebración de este convenio,
también es considerado como Información Confidencial.                    <strong><u></u></strong>
                </p>
                <p>
                    La Información Confidencial podrá contenerse de forma
                    tangible o intangible, ya sea en forma escrita, gráfica u
                    oral, en medios electrónicos o electromagnéticos, discos
                    ópticos, medios de almacenamiento electrónico, cintas, y/o
                    grabaciones. La Parte Divulgante marcará toda la
                    Información Confidencial con la leyenda “confidencial y/o
                    de su propiedad y/o con palabras similares” lo cual la
                    identificará como tal al momento de su divulgación,
                    cualquiera que sea su medio de transmisión y/o recepción.
                </p>
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u>FIRST. CONFIDENTIAL INFORMATION. </u></strong>
                    “Confidential Information” means any information disclosed,
                    transmitted and/or delivered by the Disclosing Party itself
                    and/or its affiliates, subsidiaries and/or any company
                    related with it to the Receiving Party regarding the
                    Project and related to: i) any and all technical and
                    non-technical secrets; ii)<strong> </strong>information
                    that implicates any competitive and economic advantage
                    against any third party, including designs, cost and
                    pricing data, drawings, software, prototypes, legal,
                    financial and commercial information, customers and/or
                    potential shareholders, suppliers, products, marketing,
                    sales business development plans and strategies;
                    competitive analyses; financial analyses and forecasts;
                    organizational structure, corporate structure, reports, and
                    any other industrial information and its formulas,
                    mechanisms, methods, techniques, processes of analysis,
                    trademarks, patents, registrations, working sheets,
                    compilations, comparisons, agreements, investigations
                    researches, and/or third party information that the
                    Disclosing Party is obligated to maintain confidence. The
                    relationship between the parties and the fact and substance
of this NDA shall also be Confidential Information.                    <strong><u></u></strong>
                </p>
                <p>
                    Confidential Information may be contained in tangible or
                    intangible form, by witting, graphics or orally,
                    electronics and electromagnetic resources, optical discs,
                    storage devices, recordings and/or tapes. The Disclosing
                    Party will mark all Confidential Information in tangible
                    form “confidential” or “proprietary” or with words of
                    similar import and will identify as confidential at the
                    time of disclosure. Any information that the Receiving
                    Party knew or should have known was considered confidential
                    or proprietary by the Disclosing Party, will be considered
                    Confidential Information of the Disclosing Party.
                </p>
                <p>
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong><u>SEGUNDA. OBJETO. </u></strong>
                    El presente Convenio tiene por objeto proteger la
                    Información Confidencial, por lo que en este acto
                    expresamente el Receptor, sus empleados que directa o
                    indirectamente tengan acceso a la Información Confidencial,
                    sus empresas tenedoras, afiliadas, filiales, subsidiarias o
                    empresas relacionadas, no podrán divulgar o revelar a
                    tercero alguno, ni hacer uso inapropiado, de ninguna manera
                    y por ningún medio, en parte o en su totalidad la
                    Información Confidencial, sin el consentimiento previo y
                    por escrito de la parte Divulgante.<u></u>
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u>SECOND. SUBJECT </u></strong>
                    The subject of this NDA is to protect the Confidential
                    Information. The Receiving Party, its employees,
                    affiliates, subsidiaries or related companies shall not be
                    entitled to disclose in whole or in part any Confidential
                    Information received directly or indirectly to any other
                    person, any third party, neither to use it in otherwise
                    than agreed and without the prior written consent of the
                    Disclosing Party.<strong><u></u></strong>
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong><u>TERCERA.</u></strong>
                    <u> <strong>PROPIEDAD DE LA INFORMACIÓN.</strong> </u>
                    El Receptor reconoce que la Información Confidencial es de
                    la exclusiva propiedad de la parte Divulgante, salvo que
                    acuerden lo contrario por escrito.<u></u>
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p>
                    <strong>
                        <u>
                            THIRD. PROPRIETARY OF THE CONFIDENTIAL INFORMATION.
                        </u>
                    </strong>
                    The Receiving Party hereby acknowledges that the
                    Confidential Information shall remain the exclusive
                    property of the Disclosing Party unless otherwise agreed in
                    writing by the Parties.<strong><u></u></strong>
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong><u>CUARTA.</u></strong>
                    <u>
                        <strong>
                            EXTENSIÓN DE LA INFORMACIÓN CONFIDENCIAL.
                        </strong>
                    </u>
                    El Receptor sólo podrá revelar la Información Confidencial
                    a sus propios empleados, y/o empleados de su tenedora,
                    subsidiaria, filial, partes relacionadas, agentes,
                    asesores, o cualquier persona que la requiera y que estén
                    directamente involucrados con el Proyecto, con quienes se
                    obliga a celebrar convenios de confidencialidad en los
mismos términos que el presente instrumento.                    <strong><u></u></strong>
                </p>
                <p>
                    A petición expresa del Divulgante, el Receptor se obliga a
                    devolver el original y todas las copias de la Información
                    Confidencial o a destruirla y certificar ante fedatario
                    público, la destrucción de la misma, asumiendo este último
                    los costos que en su caso se generasen.
                </p>
                <p>
                    El Receptor no tendrá obligación de mantener como
                    confidencial la información que:
                </p>
                <p>
                    a) Previamente a su divulgación fuese conocida, libre de
                    cualquier obligación de confidencialidad;
                </p>
                <p>
                    b) Sea desarrollada o elaborada de manera independiente por
                    o por encargo del Receptor;
                </p>
                <p>
                    c) Sea o llegue a ser del dominio público;
                </p>
                <p>
                    d) Se reciba de un tercero sin que esa divulgación
                    quebrante o viole una obligación de confidencialidad; y,
                </p>
                <p>
                    e) Las partes manifiesten expresamente por escrito que se
                    encuentran fuera de las restricciones del presente
                    convenio.
                </p>
                <p>
                    En el supuesto que alguna autoridad o tercero solicite al
                    Receptor cualquier Información Confidencial, éste deberá
                    dar aviso por escrito inmediatamente a la parte Divulgante,
                    para que tome las medidas que considere pertinentes. El
                    Receptor se obliga a coadyuvar con el Divulgante a tomar
                    las medidas necesarias para proteger dicha información, y a
                    proporcionar únicamente la Información Confidencial que le
                    haya sido requerida, haciendo su mejor esfuerzo para que,
                    en caso de que la autoridad no haya delimitado la
                    información solicitada, busque que se delimite, en el
                    entendió de afectar lo menos posible lo relativo a la
                    Información Confidencial y obtener el tratamiento de
                    Información Confidencial sobre la información
                    proporcionada.<strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p>
                    <strong>
                        <u>
                            FOURTH. DISCLOSE OF THE CONFIDENTIAL INFORMATION
                        </u>
                    </strong>
                    The Receiving Party shall disclose the Confidential
                    Information only to its own employees, holding,
                    subsidiaries, affiliates, related companies, employees,
                    agents, potential financing sources, consultants directly
                    involved with the Project that have received the
                    Confidential Information and who have a need to know,
                    however the Receiving Party agrees to bind such persons or
                    entities to terms at least as restrictive as those stated
                    herein, and advise them of their obligations. The Receiving
                    Party shall use the Confidential Information only in regard
                    to the Project, with whom it requires concluding
                    confidentiality agreements in the same terms as the present
                    NDA.<strong><u></u></strong>
                </p>
                <p>
                    Upon a Disclosing Party’s written request, the Receiving
                    Party shall return or destroy (the choice of which shall be
                    made at the sole discretion of the Receiving Party) all the
                    Confidential Information of the Disclosing Party even if it
                    is shall be obligated to the destruction of it and to
                    certify it before Public Notary of such requirements,
                    assuming the Receiving Party bears all costs related.
                </p>
                <p>
                    The Receiving Party shall be free of any obligation to keep
                    as confidential the Confidential Information that:
                </p>
                <p>
                    a) Was known prior at the time of disclosure and free of
                    any obligation of confidence;
                </p>
                <p>
                    b) Was independently developed by or for the receiving
                    party without reference in any manner to the Information,
                    or was received without restrictions;
                </p>
                <p>
                    c) Has become generally available and/or belongs to the
                    public;
                </p>
                <p>
                    d) Is rightfully furnished to the Receiving Party by a
                    third party free of any obligation of confidence; and
                </p>
                <p>
                    e) The Parties expressly state that they are not in the
                    case of any restriction provided in this NDA.
                </p>
                <p>
                    In the event of any disclosure demand from the authority
                    and/or from a third party, the Receiving Party shall
                    immediately notify in written to the Disclosing Party to
                    exercise any necessary action in its case. The Receiving
                    Party shall cooperate in full for the attainment to protect
                    the information and shall furnish only the Confidential
                    Information required by such authority or third party, also
                    the Receiving Party shall exercise its best efforts to
                    attain an appropriate protective order under the
                    information to be delivered.
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong>
                        <u>QUINTA. TERMINACIÓN. DAÑOS Y PERJUICIOS.</u>
                    </strong>
                    En caso de incumplimiento parcial o total respecto de las
                    obligaciones establecidas en este convenio, dará el derecho
                    a la parte afectada para declarar la terminación inmediata
                    del mismo o para exigir su cumplimiento forzoso, sin
                    necesidad de declaración judicial o resolución de
                    cualquiera otra autoridad competente. En ambos casos la
                    parte infractora estará obligada a pagar a favor de la
                    parte afectada los daños y perjuicios que tal
                    incumplimiento ocasionare, sin perjuicio de las demás
                    acciones legales que procedan, inclusive las de carácter
                    penal.<strong><u></u></strong>
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p>
                    <strong>
                        <u>FIFTH. TERMINATION AND LIQUIDATED DAMAGES. </u>
                    </strong>
                    In case of partial or total default with the obligations
                    established in this NDA, it will give the affected Party
                    the right to declare the immediate termination thereof or
                    to demand its forced fulfillment, without the need of a
                    judicial declaration or resolution of any other competent
                    authority. In both cases the infringing party will be
                    obliged to pay in favor of the affected party the
                    liquidated damages that such breach may cause, without
                    prejudice to the other legal actions that may proceed,
including those of a criminal nature.                    <strong><u></u></strong>
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong><u>SEXTA. CESIÓN DE DERECHOS.</u></strong>
                    Los derechos para transmitir la Información Confidencial y
                    obligaciones a que se refiere este Convenio no podrán ser
                    cedidos por el Receptor, parcial o totalmente sin el previo
                    consentimiento por escrito de la parte Divulgante, salvo
                    cuando se trate de sus empresas tenedoras, afiliadas,
filiales, subsidiarias o empresas relacionadas.                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u>SIXTH. ASSIGNMENT OF RIGHTS </u></strong>
                    Neither party may assign, transfer or otherwise dispose of
                    this NDA or the benefit or exercise of any of its rights or
                    performance of its obligations hereunder without the prior
                    written consent of the other party except the parties may
                    transfer this NDA or all or part of its rights and
                    obligations under this NDA to its subsidiaries, holding,
affiliates companies and/or related Parts.                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
                <p>
                    <strong><u>SÉPTIMA. NO CONTRATACIÓN.</u></strong>
                    Las Partes acuerdan que durante la vigencia del presente
                    Contrato y hasta por un periodo de 5 (cinco) años
posteriores a la conclusión del mismo, el Receptor                    <strong> </strong>no podrá emplear y/o contratar a personal
                    y/o empleados de la Parte Divulgante que hubieran estado
                    directa o indirectamente relacionado con la prestación de
                    los servicios. <strong><u></u></strong>
                </p>
                <p>
                    En caso de incumplimiento a la presente Cláusula, el
                    Receptor<strong> </strong>será acreedor a una pena
                    convencional consistente en el pago de una cantidad
                    equivalente a 12 (doce) meses del último salario bruto
                    percibido por la persona que hubiere empleado y/o
                    contratado.
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
                <p>
                    <strong><u>SEVENTH. NO RECRUITMENT.</u></strong>
                    The Parties agree that during the term of this NDA and for
                    a period up to 5 (five) years after the conclusion of the
                    same, the Receiving Party may not employ and/or hire staff
                    and/or employees of Disclosing Party who have been directly
                    or indirectly involved or related with the clause of the
                    services.
                </p>
                <p>
                    In case of breach of this Section, the Recipient shall be
                    entitled to a contractual penalty which will consist in the
                    payment of an amount equivalent to twelve (12) months of
                    the last gross salary received by the person (s) who has
                    (have) been hired and/or employed.<strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong><u>OCTAVA. VIGENCIA. </u></strong>
                    El presente Convenio tendrá una vigencia de 12 meses
                    contados a partir de su fecha de firma, en el entendido de
                    que todas las obligaciones de protección de la Información
                    Confidencial contenidas en el presente Convenio continuarán
                    vigentes por un periodo adicional de 5 (cinco) años
                    posteriores a la fecha de terminación del mismo, y/o aún
                    después de terminada la relación de negocios.
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u>EIGHT. TERM </u></strong>
                    This NDA will have a term of 12 months counted from its
                    date of signature, in the understanding that all the
                    obligations of protection of the Confidential Information
                    contained in the NDA will continue in force for an
                    additional period of 2 (two) years later at the date of
                    termination thereof, and/or even after the business
                    relationship is terminated<strong><u></u></strong>
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong>
                        <u>NOVENA. NOTIFICACIONES Y DOMICILIOS </u>
                    </strong>
                    Para todo lo relativo a la celebración, interpretación y
                    ejecución del presente convenio, y para cualquier aviso o
                    requerimiento bajo el mismo, deberá ser enviado por escrito
                    y entregado en mano, enviado por correo aéreo con acuse de
                    recibo, por telegrama, confirmados, o mediante servicio de
                    mensajería certificada. Para estos efectos las Partes
señalan como sus domicilios los siguientes:                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u>NINTH. NOTICES AND ADDRESS </u></strong>
                    For everything related to the conclusion, interpretation
                    and execution of this agreement, and for any notice or
                    requirement under it, must be sent over email or in writing
                    and delivered by hand, sent by airmail with acknowledgment
                    of receipt, by telegram or by service certified messaging
                    for these purposes, the Parties indicate the following as
                    their address:<strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="705" colspan="3" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
                <table border="1" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td width="311" valign="top">
                                <p align="center">
                                    IDEASREWARD<strong></strong>
                                </p>
                            </td>
                            <td width="359" valign="top">
                                <p align="center">
                                    <strong>'.$d->m_sociedad.'</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="311" valign="top">
                                <p>
                                    AV HIDALGO 2433 - 8K, COL. VALLARTA NORTE,
                                    GUADALAJARA, JALISCO, MEXICO, CP. 44690
                                </p>
                                <p>
                                    contacto@ideasreward.com
                                </p>
                            </td>
                            <td width="359" valign="top">
                                <p>
                                    '.$d->nda_direccion.'
                                </p>
                                <p>
                                    '.$d->nda_email.'
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p>
                    <strong><u></u></strong>
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    En caso de que cualquiera de las Partes cambie de domicilio
                    se obliga a dar aviso por escrito a la otra parte con
                    quince (15) días naturales de anticipación a la fecha en
                    que dicho cambio se lleve a cabo.
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    Any changes to the addressees above mentioned, shall be
                    notified with 15 calendar days prior written notice to the
                    date in which such change occurs.
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong><u>DÉCIMA. </u></strong>
                    <strong><u>RESERVA DE DERECHOS</u></strong>
                    . Nada en el presente convenio, podrá interpretarse en el
                    sentido de otorgar ningún tipo de derechos sobre las
                    patentes o derechos de propiedad intelectual que
                    correspondan a cada una de las Partes.
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u>TENTH. RIGHTS RESERVE </u></strong>
                    Nothing herein shall be construed as any right granted, in
                    consequence does not grant any license, explicitly or
                    implicitly, under any trademark, patent, copyright, mask
                    work protection right, trade secret or any other
intellectual property right of each one of the Parties.                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    a. <strong><u>DÉCIMA PRIMERA. NO COMPETENCIA. </u></strong>
                    Durante la vigencia de este Convenio y por un período de
                    tres (3) años posteriores de la terminación de este
                    Convenio, '.$d->name.' acepta los siguientes términos de no
                    competencia: '.$d->name.' no participará en ningún empleo,
                    consultoría u otra actividad que compita con el negocio,
                    negocio propuesto o intereses comerciales de IDEASREWARD],
                    y '.$d->name.' no promoverá a ninguna otra persona o entidad en
                    hacerlo, sin el consentimiento previo por escrito de la
                    Compañía.
                </p>
                <p>
                    '.$d->name.' no solicitará a ninguno de los clientes o posibles
                    clientes de '.$d->m_sociedad.' que presten servicios a clientes o clientes
                    potenciales que participen con IDEASREWARD, y '.$d->name.' no
                    promoverá a ninguna otra persona o entidad a hacerlo, sin
                    el previo consentimiento de IDEASREWARD consentimiento por
                    escrito.
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u>ELEVENTH. NON-COMPETE. </u></strong>
                    During the term of this NDA and for a period of three years
                    (3) after the termination of this NDA, '.$d->name.' agrees to the
                    following non-compete terms: '.$d->name.' shall not engage in any
                    employment, consulting, or other activity that competes
                    with the business, proposed business or business interests
                    of IDEASREWARD, and '.$d->name.' will not assist any other person or
                    entity in doing so, without Company’s prior written
                    consent.
                </p>
                <p>
                    '.$d->name.' will not solicit any of '.$d->m_sociedad.' clients or prospective
                    clients to perform any services for such clients or
                    prospective clients involving<strong><u> </u></strong>with
                    IDEASREWARD, and '.$d->name.' shall not assist any other person or
                    entity in doing so, without IDEASREWARD prior written
                    consent.<strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong>
                        <u>DÉCIMA SEGUNDA. PROPIEDAD DE MATERIALES.</u>
                    </strong>
                    Cualquier protocolo, pautas, guías, manual, texto,
                    compendio, cuaderno, escritura, juego, folleto, software,
                    catálogo, folleto y activo intangible, documentos,
                    presentaciones ya sean físicas o electrónicas, grabaciones
                    y / o cualquier otro otros medios de suma y / o
                    documentación o cualquier otro elemento similar o análogo,
                    como cualquier otro programa, software, presentación,
                    documento, juego, intangible o similar que sea entregado
                    por la Parte Divulgante (denominados colectivamente como
                    "Derechos de autor") será propiedad exclusiva de la parte
                    Divulgante. Las Partes reconocen expresamente que cualquier
                    desarrollo, mejora, progreso, ventaja, perfección, avance,
                    modificación, adición, reforma, novedad, evolución,
                    variación, corrección, rectificación, o cualquier cosa
                    similar, de los Materiales, mejoras en plataformas,
                    productos, tecnología y los sistemas preconfigurados entre
                    otros, hechos a los Materiales ("Modificaciones"), son y
                    serán propiedad exclusiva del Parte Divulgante.
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
                <p>
                    A menos que el presente disponga lo contrario, el
                    Destinatario acuerda respetar la confidencialidad y no
                    revelar a terceros la Información Protegida por Derecho de
                    Autor de la Parte Informante que se le haya confiado al
                    Destinatario, independientemente de que tal información
                    haya sido suministrada directamente por la Parte Informante
                    o en su nombre y representación.
                </p>
                <p>
                    El Destinatario protegerá toda la Información Protegida por
                    Derecho de Autor que le sea suministrada, para lo que
                    tendrá el mismo cuidado que para garantizar la
                    confidencialidad de sus propios Secretos Comerciales e
                    Información Protegida por Derecho de Autor, pero en ningún
                    caso menos cuidado que el razonable.
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u>TWELFTH. OWNERSHIP OF MATERIALS.</u></strong>
                    Any protocol, guidelines, guides, manual, text, compendium,
                    notebook, writing, play, brochure, software, catalogue,
                    pamphlet, and Intangible Asset, documents, presentations,
                    whether physical or electronic, recordings and/or any other
                    means of summation and/or documentation or any other
                    similar item or analogue, such as any other program,
                    software, presentation, document, play, intangible or
                    similar that is delivered by the Disclosing Party
                    (collectively referred to as "Materials") shall be the
                    exclusive ownership of Receiving Party. The Parties
                    expressly recognize that any development, improvement,
                    progress, advantage, perfection, advance, modification,
                    addition, reform, novelty, evolution, variation,
                    correction, rectification, or anything similar, of the
                    Materials, improvements in platforms, products, technology
                    and pre-configured systems among others, made to the
                    Materials (" Modifications"), is and shall be the exclusive
                    property of Disclosing Party.
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
                <p>
                    Except as otherwise provided herein, the Recipient agrees
                    to treat confidentially and to not disclose to any third
                    party any Proprietary Information of the Disclosing Party
                    furnished to Recipient, whether such information is
                    disclosed directly by the Disclosing Party or on the
                    Disclosing Party’s behalf.
                </p>
                <p>
                    The Recipient shall safeguard all Proprietary Information
                    received by it using the same degree of care with which it
                    protects the confidentiality of its own Trade Secrets and
                    Proprietary Information, but in no event less than a
                    reasonable degree of care.<strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong><u>DÉCIMA TERCERA. MISCELÁNEA </u></strong>
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
                <p>
                    <strong>a) </strong>
                    <strong>Encabezados;</strong>
                    se establecen únicamente, para propósitos de referencia e
                    identificación, por tanto, en caso de existir un conflicto
                    relacionado con la interpretación de los mismos, se deberá
                    estar únicamente al texto de la cláusula de que se trate.
                </p>
                <p>
                    <strong>b) </strong>
                    <strong>Acuerdo único;</strong>
                    el presente convenio, sus anexos, así como cualquier
                    documento que deba ser otorgado o entregado de acuerdo con
                    lo que aquí se establece, contiene el acuerdo total entre
                    las partes con respecto a las materias aquí tratadas y
                    sobresee y cancela todos los acuerdos, negociaciones,
                    convenios o escritos anteriormente realizados entre las
                    partes en relación con la materia que en el mismo se
                    contiene.
                </p>
                <p>
                    <strong>c) </strong>
                    <strong>Elementos de existencia;</strong>
                    el presente es otorgado de común acuerdo, libre de vicios o
                    actos ilícitos y en su voluntad no existe dolo, error o
                    mala fe, reconociendo como suyas las firmas que lo calzan
                    por haber sido puestas de su puño y letra, y ser las que
                    utilizan en todos sus actos públicos y privados.
                </p>
                <p>
                    <strong>d) </strong>
                    <strong>Modificaciones;</strong>
                    cualquier modificación a este convenio, deberá ser
                    realizada en forma escrita y firmada por todas las partes
                    que intervienen en el mismo.
                </p>
                <p>
                    <strong>e) </strong>
                    <strong>No renuncia a derechos; </strong>
                    si en cualquier tiempo alguna de las partes elige no
                    ejercer alguno de los derechos que tiene al amparo de ese
                    convenio, dicha conducta no implicará la renuncia al mismo
                    y su terminación no afectará las reclamaciones que hayan
                    existido o deriven de actos u omisiones ocurridos durante
                    el tiempo de su vigencia, ni la aplicación de su clausulado
                    que por su naturaleza estén destinadas a seguir teniendo
                    efecto con posterioridad a la fecha de terminación del
                    mismo. <strong><u></u></strong>
                </p>
                <p>
                    <strong>f) </strong>
                    <strong>Nulidad parcial; </strong>
                    la validez o nulidad de una cláusula no afectará la validez
                    de las demás cláusulas de este convenio, por lo tanto, en
                    caso de que se determine la invalidez o nulidad de una de
                    éstas por la autoridad competente, las provisiones
                    estipuladas en el resto del Convenio continuarán en
                    completo vigor y efecto.
                </p>
                <p>
                    <strong>g) </strong>
                    <strong>Ejemplares</strong>
                    <strong>;</strong>
                    este Convenio podrá otorgarse en varios ejemplares, ya sea
                    por duplicado, triplicado, etc., en el entendido de que,
                    cada uno de ellos es y será considerado e interpretado como
                    un original, y como un único convenio.
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u>THIRTEENTH. MISCELLANEOUS</u></strong>
                </p>
                <p>
                    <strong></strong>
                </p>
                <p>
                    <strong>a) Headings; </strong>
                    are only established for reference purposes. In case of any
                    conflict related to the interpretation of such headings,
the text of the clause shall survive for such effect.                    <strong></strong>
                </p>
                <p>
                    <strong>b) </strong>
                    <strong>Entire Agreement;</strong>
                    this NDA and/ or its exhibits, and any other document to be
                    executed about it constitutes the complete agreement of the
                    parties with respect to the matter hereunder and supersedes
                    all prior oral and written agreements and discussions with
                    respect thereto.
                </p>
                <p>
                    <strong>c) </strong>
                    <strong>Validity;</strong>
                    this NDA is executed due to the concurrence of wills
                    without any defects, illicit acts whatsoever that may
                    affect its existence and validity. The parties recognized
                    that their signatures are from their own handwriting and
have been used in all their public and private acts.                    <strong></strong>
                </p>
                <p>
                    <strong>d) </strong>
                    <strong>Amendments;</strong>
                    any amendment to the NDA shall be done in writing and shall
be executed by their respective authorized representatives.                    <strong></strong>
                </p>
                <p>
                    <strong>e) </strong>
                    <strong>No Waiver; </strong>
                    if at any time either party\'s failure to enforce in whole
                    or in part any clause, right or remedy under the NDA, such
                    conduct shall not constitute a waiver of such clause, right
                    or remedy, neither its expiration shall affect any remedy
                    deriving from any act or omission occurred during the term
                    of this agreement, nor in any way affect the validity of
the clause that by its nature shall remain full in force.                    <strong></strong>
                </p>
                <p>
                    <strong>f) </strong>
                    <strong>Partial Nullity; </strong>
                    If any clause of this NDA shall be held by a court of
                    competent jurisdiction to be invalid, illegal or
                    unenforceable, the validity, legality and enforceability of
                    the remaining clause of this NDA shall not in any way be
                    affected or impaired thereby.<strong></strong>
                </p>
                <p>
                    <strong>g) </strong>
                    <strong>Copies;</strong>
                    This NDA may be executed in any number of identical copies,
                    each of which shall be deemed to be an original, but all of
                    which, taken together, shall constitute one and the same
                    agreement.
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong>
                        <u>DÉCIMA CUARTA. JURISDICCIÓN E INTERPRETACIÓN.</u>
                    </strong>
                    Para la interpretación y cumplimiento del presente Convenio
                    las Partes se someten expresamente a las leyes y los
                    tribunales competentes de la Ciudad de México, renunciando
                    a cualquier otro fuero que pudiere corresponderles por
                    razón de sus domicilios presentes o futuros o por cualquier
                    otra razón.
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u>FOURTEENTH. </u></strong>
                    <strong><u>GOVERNING LAW AND JURISDICTION</u></strong>
                    This NDA shall be governed by and will be interpreted in
                    accordance with the law and courts of the United Mexican
                    States. All disputes under the NDA shall be settled in by
                    the courts of Mexico City, and the parties expressly waive
                    any right they may have to territorial jurisdiction which
                    they may have by any reason whatsoever and excluding its
                    conflict of law.
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong>
                        Leído que fue por las Partes, debidamente enteradas del
                        contenido y alcance legal de todas y cada una de las
                        cláusulas del presente convenio, lo ratifican y
                        suscriben de conformidad, el día '.$d->m_e_fecha.' en la Ciudad de
                        México en dos (2) tantos originales, quedando un
                        ejemplar en cada una de las partes.
                    </strong>
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong>
                        Read that was by the Parties, duly aware of the content
                        and legal scope of each one of the clauses of this NDA,
                        ratify and subscribe in accordance, on '.$d->m_e_fecha.', in Mexico
                        City in two (2) so many originals, leaving one copy in
                        each of the parts.
                    </strong>
                </p>
                <p>
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p align="center">
                    <strong>IDEASREWARD, S.A.P.I. DE C.V.</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p align="center">
                    <strong>'.$d->m_sociedad.'</strong>
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p align="center">
                    <strong>Miguel Angel Parada Montaño</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p align="center">
                    <strong>'.$d->name.'</strong>
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p align="center">
                    <strong>Representante Legal</strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p align="center">
                    <strong>Representante Legal</strong>
                </p>
            </td>
        </tr>
    </tbody>
</table>
';
  $return_ .= '</body>';
  $return_ .= '</html>';

  		return $return_;
  	}

  	private function contract_6($d) //Contrato NDA persona fisica
	{
		$return_ ='';
  		$return_ .= '<html>';
  		$return_ .= '<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">';
 		$return_ .= '
	<style>
		body{
			position:absolute;
			width:100%;
			height:100%;
		}
	</style>';
  $return_ .= '<body>';
  $return_ .= '

	<table border="0" cellspacing="0" cellpadding="0" width="705">
    <tbody>
        <tr>
            <td width="346" valign="top">
                <p align="center">
                    <strong>
                        CONVENIO DE CONFIDENCIALIDAD Y NO DIVULGACIÓN
                    </strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p align="center">
                    <strong>MUTUAL NON-DISCLOSURE AGREEMENT</strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    Convenio de Confidencialidad y no Divulgación ( en adelante
                    el “Convenio”) que celebran por una parte IDEASREWARD,
                    S.A.P.I. DE C.V., a la que en lo sucesivo se le denominará
                    “IDEASREWARD” representada en este acto por '.$d->comitente.' en su
                    carácter de apoderado legal y por la otra parte '.$d->name.', a la
                    que en lo sucesivo se le denominará como “Inversionista”,
                    representada en este acto por '.$d->name.' en su carácter de
                    representante legal, en lo sucesivo “las Partes”, al tenor
de las siguientes declaraciones y clausulas:                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    Non-Disclosure Agreement (hereafter named as “NDA”) hereby
                    entered by and between IDEASREWARD, S.A.P.I. DE C.V.
                    (hereafter named as “IDEASREWARD”) legally represented by
                    '.$d->comitente.' and '.$d->name.' (hereinafter named as “investor”) legally
                    represented by '.$d->name.', in the following both referred to as
                    “the parties” according to the following statements and
                    clauses:<strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong></strong>
                </p>
                <p>
                    <strong>I.- DECLARAN LAS PARTES QUE:</strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p>
                    <strong></strong>
                </p>
                <p>
                    <strong>I.- THE PARTIES STATE THAT:</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong>a) </strong>
                    IDEASREWARD es una sociedad legalmente constituida de
                    conformidad con las Leyes de los Estados Unidos Mexicanos,
                    según lo acreditan en términos de los documentos que se
                    agregan como <strong>Anexo “1”;</strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong>a) </strong>
                    IDEASREWARD is a company organized under Mexican Regulation
                    as shown by the documents with the Laws of the United
                    Mexican States, as accredited in terms of the documents
attached to the NDA as <strong>Exhibits</strong>                    <strong>“1”.</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong>b) </strong>
                    '.$d->m_sociedad.' es una empresa debidamente constituida de conformidad
                    con la legislación vigente de '.$d->nda_pais.', acreditada
en términos de los documentos que se agregan como                    <strong>Anexo "2"</strong>;
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong>b) </strong>
                    b) '.$d->m_sociedad.' is a private individual as accredited in terms of
the document attached to the NDA as                    <strong>Exhibit"2".</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong>c) </strong>
                    Sus representantes y/o apoderados legales tienen poderes y
                    facultades suficientes para obligar a su representada en
                    términos del presente Convenio, de conformidad con los
documentos que se agregan como<strong><em>Anexos “3” </em></strong>                    <em>y<strong> “4</strong></em>” respectivamente por cada
                    una de las partes.
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong>c) </strong>
                    The Parties state that their legal representatives have the
                    sufficient power to bind the company they represent in
                    accordance to this NDA as prove with the documents attached
as <strong>Exhibits</strong> <strong>“3” </strong>and                    <strong> Exhibit “4”.</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong>d) </strong>
                    Dentro de su objeto social se encuentra permitida la
                    celebración de este tipo de convenios, por lo que su
                    celebración y ejecución no contraviene a sus estatutos
                    sociales, ni disposición legal alguna que le aplique.
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong>d) </strong>
                    The social purpose of the Parties let them conclude the
                    NDA, so its conclusion and execution does not contravene
                    its articles of association, or any legal clause that
                    applies.
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong>e) </strong>
Reconocen que cada una de ellas podrá obtener (                    <strong>“Parte Receptora” y/o “Receptor”</strong>) cierta
información confidencial de la otra parte (                    <strong>“Parte Reveladora” y/o “Divulgante”</strong>), en
                    virtud de que se encuentran en un proceso de pláticas a fin
                    de iniciar un periodo de comunicaciones y/o reuniones con
                    la intensión de inversión en (<strong>“Proyecto”</strong> ,
                    por lo que es su deseo asegurar la confidencialidad de la
                    información que cada una podrá poner a disposición de la
                    otra..
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong>e) </strong>
Each Party recognized that each of them may obtain                    <strong>("Receiving Party" and/or "Receiver")</strong>
                    certain confidential information from the other party
                    <strong>
                        ("Disclosing Party" and / or "Disclosing Party"),
                    </strong>
                    because they are in a process of talks in order to initiate
                    a period of communications and / or meetings with the
                    intention of investing on <strong>"Project")</strong>, so
                    it is their desire to ensure the confidentiality of the
                    information that each may make available to the other.
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong>f) </strong>
                    Visto lo antes manifestado, estando de acuerdo con su
                    alcance y contenido, las partes se reconocen la
                    personalidad que ostentan en este acto jurídico, por lo que
                    no existiendo, dolo, error o mala fé en su voluntad,
                    convienen sujetar el presente Convenio al tenor de las
                    siguientes:
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong>f) </strong>
                    The Parties hereby acknowledge the character which they
                    hold in this act, therefore, if there is no fraud, error or
                    bad faith in their will, they agree to subject the present
                    NDA to the following:
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong>C L Á U S U L A S</strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong>C L A U S E S</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong><u>PRIMERA. INFORMACIÓN CONFIDENCIAL. </u></strong>
                    Se entiende por “Información Confidencial” cualquier
                    información que la Parte Divulgante, sus empresas
                    tenedoras, afiliadas, filiales, subsidiarias y/o empresas
                    relacionadas con la misma, revelen, transmitan, y/o
                    entreguen a la Parte Receptora por virtud del Proyecto a;
                    i) cualquier secreto, técnico o no; ii) información que le
                    signifique obtener o mantener una ventaja competitiva o
                    económica frente a terceros en la realización de
                    actividades de su negocio y económicas, que de una manera
                    enunciativa más no limitativa comprende: diseños, precios,
                    costos, dibujos, software, datos, prototipos, información
                    técnica, legal, financiera, comercial, nombres de clientes
                    o socios potenciales, proveedores, propuestas de negocios,
                    estrategias de negocios, estructura organizacional,
                    composición de la sociedad y de la corporación, reportes,
                    planes, proyecciones de mercado, datos y cualquier otra
                    información industrial, junto con fórmulas, mecanismos,
                    patrones, métodos, técnicas, procesos de análisis, marcas
                    registradas o no registradas, nombres comerciales,
                    patentes, documentos de trabajo, compilaciones,
                    comparaciones, contratos, convenios, estudios de
                    investigación, y/o información de terceros a la cual la
                    Parte Divulgante está obligada a mantener como
                    confidencial. El contenido y celebración de este convenio,
también es considerado como Información Confidencial.                    <strong><u></u></strong>
                </p>
                <p>
                    La Información Confidencial podrá contenerse de forma
                    tangible o intangible, ya sea en forma escrita, gráfica u
                    oral, en medios electrónicos o electromagnéticos, discos
                    ópticos, medios de almacenamiento electrónico, cintas, y/o
                    grabaciones. La Parte Divulgante marcará toda la
                    Información Confidencial con la leyenda “confidencial y/o
                    de su propiedad y/o con palabras similares” lo cual la
                    identificará como tal al momento de su divulgación,
                    cualquiera que sea su medio de transmisión y/o recepción.
                </p>
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u>FIRST. CONFIDENTIAL INFORMATION. </u></strong>
                    “Confidential Information” means any information disclosed,
                    transmitted and/or delivered by the Disclosing Party itself
                    and/or its affiliates, subsidiaries and/or any company
                    related with it to the Receiving Party regarding the
                    Project and related to: i) any and all technical and
                    non-technical secrets; ii)<strong> </strong>information
                    that implicates any competitive and economic advantage
                    against any third party, including designs, cost and
                    pricing data, drawings, software, prototypes, legal,
                    financial and commercial information, customers and/or
                    potential shareholders, suppliers, products, marketing,
                    sales business development plans and strategies;
                    competitive analyses; financial analyses and forecasts;
                    organizational structure, corporate structure, reports, and
                    any other industrial information and its formulas,
                    mechanisms, methods, techniques, processes of analysis,
                    trademarks, patents, registrations, working sheets,
                    compilations, comparisons, agreements, investigations
                    researches, and/or third party information that the
                    Disclosing Party is obligated to maintain confidence. The
                    relationship between the parties and the fact and substance
of this NDA shall also be Confidential Information.                    <strong><u></u></strong>
                </p>
                <p>
                    Confidential Information may be contained in tangible or
                    intangible form, by witting, graphics or orally,
                    electronics and electromagnetic resources, optical discs,
                    storage devices, recordings and/or tapes. The Disclosing
                    Party will mark all Confidential Information in tangible
                    form “confidential” or “proprietary” or with words of
                    similar import and will identify as confidential at the
                    time of disclosure. Any information that the Receiving
                    Party knew or should have known was considered confidential
                    or proprietary by the Disclosing Party, will be considered
                    Confidential Information of the Disclosing Party.
                </p>
                <p>
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong><u>SEGUNDA. OBJETO. </u></strong>
                    El presente Convenio tiene por objeto proteger la
                    Información Confidencial, por lo que en este acto
                    expresamente el Receptor, sus empleados que directa o
                    indirectamente tengan acceso a la Información Confidencial,
                    sus empresas tenedoras, afiliadas, filiales, subsidiarias o
                    empresas relacionadas, no podrán divulgar o revelar a
                    tercero alguno, ni hacer uso inapropiado, de ninguna manera
                    y por ningún medio, en parte o en su totalidad la
                    Información Confidencial, sin el consentimiento previo y
                    por escrito de la parte Divulgante.<u></u>
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u>SECOND. SUBJECT </u></strong>
                    The subject of this NDA is to protect the Confidential
                    Information. The Receiving Party, its employees,
                    affiliates, subsidiaries or related companies shall not be
                    entitled to disclose in whole or in part any Confidential
                    Information received directly or indirectly to any other
                    person, any third party, neither to use it in otherwise
                    than agreed and without the prior written consent of the
                    Disclosing Party.<strong><u></u></strong>
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong><u>TERCERA.</u></strong>
                    <u> <strong>PROPIEDAD DE LA INFORMACIÓN.</strong> </u>
                    El Receptor reconoce que la Información Confidencial es de
                    la exclusiva propiedad de la parte Divulgante, salvo que
                    acuerden lo contrario por escrito.<u></u>
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p>
                    <strong>
                        <u>
                            THIRD. PROPRIETARY OF THE CONFIDENTIAL INFORMATION.
                        </u>
                    </strong>
                    The Receiving Party hereby acknowledges that the
                    Confidential Information shall remain the exclusive
                    property of the Disclosing Party unless otherwise agreed in
                    writing by the Parties.<strong><u></u></strong>
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong><u>CUARTA.</u></strong>
                    <u>
                        <strong>
                            EXTENSIÓN DE LA INFORMACIÓN CONFIDENCIAL.
                        </strong>
                    </u>
                    El Receptor sólo podrá revelar la Información Confidencial
                    a sus propios empleados, y/o empleados de su tenedora,
                    subsidiaria, filial, partes relacionadas, agentes,
                    asesores, o cualquier persona que la requiera y que estén
                    directamente involucrados con el Proyecto, con quienes se
                    obliga a celebrar convenios de confidencialidad en los
mismos términos que el presente instrumento.                    <strong><u></u></strong>
                </p>
                <p>
                    A petición expresa del Divulgante, el Receptor se obliga a
                    devolver el original y todas las copias de la Información
                    Confidencial o a destruirla y certificar ante fedatario
                    público, la destrucción de la misma, asumiendo este último
                    los costos que en su caso se generasen.
                </p>
                <p>
                    El Receptor no tendrá obligación de mantener como
                    confidencial la información que:
                </p>
                <p>
                    a) Previamente a su divulgación fuese conocida, libre de
                    cualquier obligación de confidencialidad;
                </p>
                <p>
                    b) Sea desarrollada o elaborada de manera independiente por
                    o por encargo del Receptor;
                </p>
                <p>
                    c) Sea o llegue a ser del dominio público;
                </p>
                <p>
                    d) Se reciba de un tercero sin que esa divulgación
                    quebrante o viole una obligación de confidencialidad; y,
                </p>
                <p>
                    e) Las partes manifiesten expresamente por escrito que se
                    encuentran fuera de las restricciones del presente
                    convenio.
                </p>
                <p>
                    En el supuesto que alguna autoridad o tercero solicite al
                    Receptor cualquier Información Confidencial, éste deberá
                    dar aviso por escrito inmediatamente a la parte Divulgante,
                    para que tome las medidas que considere pertinentes. El
                    Receptor se obliga a coadyuvar con el Divulgante a tomar
                    las medidas necesarias para proteger dicha información, y a
                    proporcionar únicamente la Información Confidencial que le
                    haya sido requerida, haciendo su mejor esfuerzo para que,
                    en caso de que la autoridad no haya delimitado la
                    información solicitada, busque que se delimite, en el
                    entendió de afectar lo menos posible lo relativo a la
                    Información Confidencial y obtener el tratamiento de
                    Información Confidencial sobre la información
                    proporcionada.<strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p>
                    <strong>
                        <u>
                            FOURTH. DISCLOSE OF THE CONFIDENTIAL INFORMATION
                        </u>
                    </strong>
                    The Receiving Party shall disclose the Confidential
                    Information only to its own employees, holding,
                    subsidiaries, affiliates, related companies, employees,
                    agents, potential financing sources, consultants directly
                    involved with the Project that have received the
                    Confidential Information and who have a need to know,
                    however the Receiving Party agrees to bind such persons or
                    entities to terms at least as restrictive as those stated
                    herein, and advise them of their obligations. The Receiving
                    Party shall use the Confidential Information only in regard
                    to the Project, with whom it requires concluding
                    confidentiality agreements in the same terms as the present
                    NDA.<strong><u></u></strong>
                </p>
                <p>
                    Upon a Disclosing Party’s written request, the Receiving
                    Party shall return or destroy (the choice of which shall be
                    made at the sole discretion of the Receiving Party) all the
                    Confidential Information of the Disclosing Party even if it
                    is shall be obligated to the destruction of it and to
                    certify it before Public Notary of such requirements,
                    assuming the Receiving Party bears all costs related.
                </p>
                <p>
                    The Receiving Party shall be free of any obligation to keep
                    as confidential the Confidential Information that:
                </p>
                <p>
                    a) Was known prior at the time of disclosure and free of
                    any obligation of confidence;
                </p>
                <p>
                    b) Was independently developed by or for the receiving
                    party without reference in any manner to the Information,
                    or was received without restrictions;
                </p>
                <p>
                    c) Has become generally available and/or belongs to the
                    public;
                </p>
                <p>
                    d) Is rightfully furnished to the Receiving Party by a
                    third party free of any obligation of confidence; and
                </p>
                <p>
                    e) The Parties expressly state that they are not in the
                    case of any restriction provided in this NDA.
                </p>
                <p>
                    In the event of any disclosure demand from the authority
                    and/or from a third party, the Receiving Party shall
                    immediately notify in written to the Disclosing Party to
                    exercise any necessary action in its case. The Receiving
                    Party shall cooperate in full for the attainment to protect
                    the information and shall furnish only the Confidential
                    Information required by such authority or third party, also
                    the Receiving Party shall exercise its best efforts to
                    attain an appropriate protective order under the
                    information to be delivered.
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong>
                        <u>QUINTA. TERMINACIÓN. DAÑOS Y PERJUICIOS.</u>
                    </strong>
                    En caso de incumplimiento parcial o total respecto de las
                    obligaciones establecidas en este convenio, dará el derecho
                    a la parte afectada para declarar la terminación inmediata
                    del mismo o para exigir su cumplimiento forzoso, sin
                    necesidad de declaración judicial o resolución de
                    cualquiera otra autoridad competente. En ambos casos la
                    parte infractora estará obligada a pagar a favor de la
                    parte afectada los daños y perjuicios que tal
                    incumplimiento ocasionare, sin perjuicio de las demás
                    acciones legales que procedan, inclusive las de carácter
                    penal.<strong><u></u></strong>
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p>
                    <strong>
                        <u>FIFTH. TERMINATION AND LIQUIDATED DAMAGES. </u>
                    </strong>
                    In case of partial or total default with the obligations
                    established in this NDA, it will give the affected Party
                    the right to declare the immediate termination thereof or
                    to demand its forced fulfillment, without the need of a
                    judicial declaration or resolution of any other competent
                    authority. In both cases the infringing party will be
                    obliged to pay in favor of the affected party the
                    liquidated damages that such breach may cause, without
                    prejudice to the other legal actions that may proceed,
including those of a criminal nature.                    <strong><u></u></strong>
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong><u>SEXTA. CESIÓN DE DERECHOS.</u></strong>
                    Los derechos para transmitir la Información Confidencial y
                    obligaciones a que se refiere este Convenio no podrán ser
                    cedidos por el Receptor, parcial o totalmente sin el previo
                    consentimiento por escrito de la parte Divulgante, salvo
                    cuando se trate de sus empresas tenedoras, afiliadas,
filiales, subsidiarias o empresas relacionadas.                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u>SIXTH. ASSIGNMENT OF RIGHTS </u></strong>
                    Neither party may assign, transfer or otherwise dispose of
                    this NDA or the benefit or exercise of any of its rights or
                    performance of its obligations hereunder without the prior
                    written consent of the other party except the parties may
                    transfer this NDA or all or part of its rights and
                    obligations under this NDA to its subsidiaries, holding,
affiliates companies and/or related Parts.                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
                <p>
                    <strong><u>SÉPTIMA. NO CONTRATACIÓN.</u></strong>
                    Las Partes acuerdan que durante la vigencia del presente
                    Contrato y hasta por un periodo de 5 (cinco) años
posteriores a la conclusión del mismo, el Receptor                    <strong> </strong>no podrá emplear y/o contratar a personal
                    y/o empleados de la Parte Divulgante que hubieran estado
                    directa o indirectamente relacionado con la prestación de
                    los servicios. <strong><u></u></strong>
                </p>
                <p>
                    En caso de incumplimiento a la presente Cláusula, el
                    Receptor<strong> </strong>será acreedor a una pena
                    convencional consistente en el pago de una cantidad
                    equivalente a 12 (doce) meses del último salario bruto
                    percibido por la persona que hubiere empleado y/o
                    contratado.
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
                <p>
                    <strong><u>SEVENTH. NO RECRUITMENT.</u></strong>
                    The Parties agree that during the term of this NDA and for
                    a period up to 5 (five) years after the conclusion of the
                    same, the Receiving Party may not employ and/or hire staff
                    and/or employees of Disclosing Party who have been directly
                    or indirectly involved or related with the clause of the
                    services.
                </p>
                <p>
                    In case of breach of this Section, the Recipient shall be
                    entitled to a contractual penalty which will consist in the
                    payment of an amount equivalent to twelve (12) months of
                    the last gross salary received by the person (s) who has
                    (have) been hired and/or employed.<strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong><u>OCTAVA. VIGENCIA. </u></strong>
                    El presente Convenio tendrá una vigencia de 12 meses
                    contados a partir de su fecha de firma, en el entendido de
                    que todas las obligaciones de protección de la Información
                    Confidencial contenidas en el presente Convenio continuarán
                    vigentes por un periodo adicional de 5 (cinco) años
                    posteriores a la fecha de terminación del mismo, y/o aún
                    después de terminada la relación de negocios.
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u>EIGHT. TERM </u></strong>
                    This NDA will have a term of 12 months counted from its
                    date of signature, in the understanding that all the
                    obligations of protection of the Confidential Information
                    contained in the NDA will continue in force for an
                    additional period of 2 (two) years later at the date of
                    termination thereof, and/or even after the business
                    relationship is terminated<strong><u></u></strong>
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong>
                        <u>NOVENA. NOTIFICACIONES Y DOMICILIOS </u>
                    </strong>
                    Para todo lo relativo a la celebración, interpretación y
                    ejecución del presente convenio, y para cualquier aviso o
                    requerimiento bajo el mismo, deberá ser enviado por escrito
                    y entregado en mano, enviado por correo aéreo con acuse de
                    recibo, por telegrama, confirmados, o mediante servicio de
                    mensajería certificada. Para estos efectos las Partes
señalan como sus domicilios los siguientes:                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u>NINTH. NOTICES AND ADDRESS </u></strong>
                    For everything related to the conclusion, interpretation
                    and execution of this agreement, and for any notice or
                    requirement under it, must be sent over email or in writing
                    and delivered by hand, sent by airmail with acknowledgment
                    of receipt, by telegram or by service certified messaging
                    for these purposes, the Parties indicate the following as
                    their address:<strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="705" colspan="3" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
                <table border="1" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td width="311" valign="top">
                                <p align="center">
                                    IDEASREWARD<strong></strong>
                                </p>
                            </td>
                            <td width="359" valign="top">
                                <p align="center">
                                    <strong>'.$d->m_sociedad.'</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="311" valign="top">
                                <p>
                                    AV HIDALGO 2433 - 8K, COL. VALLARTA NORTE,
                                    GUADALAJARA, JALISCO, MEXICO, CP. 44690
                                </p>
                                <p>
                                    contacto@ideasreward.com
                                </p>
                            </td>
                            <td width="359" valign="top">
                                <p>
                                    '.$d->nda_direccion.'
                                </p>
                                <p>
                                    '.$d->nda_email.'
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p>
                    <strong><u></u></strong>
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    En caso de que cualquiera de las Partes cambie de domicilio
                    se obliga a dar aviso por escrito a la otra parte con
                    quince (15) días naturales de anticipación a la fecha en
                    que dicho cambio se lleve a cabo.
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    Any changes to the addressees above mentioned, shall be
                    notified with 15 calendar days prior written notice to the
                    date in which such change occurs.
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong><u>DÉCIMA. </u></strong>
                    <strong><u>RESERVA DE DERECHOS</u></strong>
                    . Nada en el presente convenio, podrá interpretarse en el
                    sentido de otorgar ningún tipo de derechos sobre las
                    patentes o derechos de propiedad intelectual que
                    correspondan a cada una de las Partes.
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u>TENTH. RIGHTS RESERVE </u></strong>
                    Nothing herein shall be construed as any right granted, in
                    consequence does not grant any license, explicitly or
                    implicitly, under any trademark, patent, copyright, mask
                    work protection right, trade secret or any other
intellectual property right of each one of the Parties.                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    a. <strong><u>DÉCIMA PRIMERA. NO COMPETENCIA. </u></strong>
                    Durante la vigencia de este Convenio y por un período de
                    tres (3) años posteriores de la terminación de este
                    Convenio, '.$d->name.' acepta los siguientes términos de no
                    competencia: '.$d->name.' no participará en ningún empleo,
                    consultoría u otra actividad que compita con el negocio,
                    negocio propuesto o intereses comerciales de IDEASREWARD],
                    y '.$d->name.' no promoverá a ninguna otra persona o entidad en
                    hacerlo, sin el consentimiento previo por escrito de la
                    Compañía.
                </p>
                <p>
                    '.$d->name.' no solicitará a ninguno de los clientes o posibles
                    clientes de '.$d->m_sociedad.' que presten servicios a clientes o clientes
                    potenciales que participen con IDEASREWARD, y '.$d->name.' no
                    promoverá a ninguna otra persona o entidad a hacerlo, sin
                    el previo consentimiento de IDEASREWARD consentimiento por
                    escrito.
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u>ELEVENTH. NON-COMPETE. </u></strong>
                    During the term of this NDA and for a period of three years
                    (3) after the termination of this NDA, '.$d->name.' agrees to the
                    following non-compete terms: '.$d->name.' shall not engage in any
                    employment, consulting, or other activity that competes
                    with the business, proposed business or business interests
                    of IDEASREWARD, and '.$d->name.' will not assist any other person or
                    entity in doing so, without Company’s prior written
                    consent.
                </p>
                <p>
                    '.$d->name.' will not solicit any of '.$d->m_sociedad.' clients or prospective
                    clients to perform any services for such clients or
                    prospective clients involving<strong><u> </u></strong>with
                    IDEASREWARD, and '.$d->name.' shall not assist any other person or
                    entity in doing so, without IDEASREWARD prior written
                    consent.<strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong>
                        <u>DÉCIMA SEGUNDA. PROPIEDAD DE MATERIALES.</u>
                    </strong>
                    Cualquier protocolo, pautas, guías, manual, texto,
                    compendio, cuaderno, escritura, juego, folleto, software,
                    catálogo, folleto y activo intangible, documentos,
                    presentaciones ya sean físicas o electrónicas, grabaciones
                    y / o cualquier otro otros medios de suma y / o
                    documentación o cualquier otro elemento similar o análogo,
                    como cualquier otro programa, software, presentación,
                    documento, juego, intangible o similar que sea entregado
                    por la Parte Divulgante (denominados colectivamente como
                    "Derechos de autor") será propiedad exclusiva de la parte
                    Divulgante. Las Partes reconocen expresamente que cualquier
                    desarrollo, mejora, progreso, ventaja, perfección, avance,
                    modificación, adición, reforma, novedad, evolución,
                    variación, corrección, rectificación, o cualquier cosa
                    similar, de los Materiales, mejoras en plataformas,
                    productos, tecnología y los sistemas preconfigurados entre
                    otros, hechos a los Materiales ("Modificaciones"), son y
                    serán propiedad exclusiva del Parte Divulgante.
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
                <p>
                    A menos que el presente disponga lo contrario, el
                    Destinatario acuerda respetar la confidencialidad y no
                    revelar a terceros la Información Protegida por Derecho de
                    Autor de la Parte Informante que se le haya confiado al
                    Destinatario, independientemente de que tal información
                    haya sido suministrada directamente por la Parte Informante
                    o en su nombre y representación.
                </p>
                <p>
                    El Destinatario protegerá toda la Información Protegida por
                    Derecho de Autor que le sea suministrada, para lo que
                    tendrá el mismo cuidado que para garantizar la
                    confidencialidad de sus propios Secretos Comerciales e
                    Información Protegida por Derecho de Autor, pero en ningún
                    caso menos cuidado que el razonable.
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u>TWELFTH. OWNERSHIP OF MATERIALS.</u></strong>
                    Any protocol, guidelines, guides, manual, text, compendium,
                    notebook, writing, play, brochure, software, catalogue,
                    pamphlet, and Intangible Asset, documents, presentations,
                    whether physical or electronic, recordings and/or any other
                    means of summation and/or documentation or any other
                    similar item or analogue, such as any other program,
                    software, presentation, document, play, intangible or
                    similar that is delivered by the Disclosing Party
                    (collectively referred to as "Materials") shall be the
                    exclusive ownership of Receiving Party. The Parties
                    expressly recognize that any development, improvement,
                    progress, advantage, perfection, advance, modification,
                    addition, reform, novelty, evolution, variation,
                    correction, rectification, or anything similar, of the
                    Materials, improvements in platforms, products, technology
                    and pre-configured systems among others, made to the
                    Materials (" Modifications"), is and shall be the exclusive
                    property of Disclosing Party.
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
                <p>
                    Except as otherwise provided herein, the Recipient agrees
                    to treat confidentially and to not disclose to any third
                    party any Proprietary Information of the Disclosing Party
                    furnished to Recipient, whether such information is
                    disclosed directly by the Disclosing Party or on the
                    Disclosing Party’s behalf.
                </p>
                <p>
                    The Recipient shall safeguard all Proprietary Information
                    received by it using the same degree of care with which it
                    protects the confidentiality of its own Trade Secrets and
                    Proprietary Information, but in no event less than a
                    reasonable degree of care.<strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong><u>DÉCIMA TERCERA. MISCELÁNEA </u></strong>
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
                <p>
                    <strong>a) </strong>
                    <strong>Encabezados;</strong>
                    se establecen únicamente, para propósitos de referencia e
                    identificación, por tanto, en caso de existir un conflicto
                    relacionado con la interpretación de los mismos, se deberá
                    estar únicamente al texto de la cláusula de que se trate.
                </p>
                <p>
                    <strong>b) </strong>
                    <strong>Acuerdo único;</strong>
                    el presente convenio, sus anexos, así como cualquier
                    documento que deba ser otorgado o entregado de acuerdo con
                    lo que aquí se establece, contiene el acuerdo total entre
                    las partes con respecto a las materias aquí tratadas y
                    sobresee y cancela todos los acuerdos, negociaciones,
                    convenios o escritos anteriormente realizados entre las
                    partes en relación con la materia que en el mismo se
                    contiene.
                </p>
                <p>
                    <strong>c) </strong>
                    <strong>Elementos de existencia;</strong>
                    el presente es otorgado de común acuerdo, libre de vicios o
                    actos ilícitos y en su voluntad no existe dolo, error o
                    mala fe, reconociendo como suyas las firmas que lo calzan
                    por haber sido puestas de su puño y letra, y ser las que
                    utilizan en todos sus actos públicos y privados.
                </p>
                <p>
                    <strong>d) </strong>
                    <strong>Modificaciones;</strong>
                    cualquier modificación a este convenio, deberá ser
                    realizada en forma escrita y firmada por todas las partes
                    que intervienen en el mismo.
                </p>
                <p>
                    <strong>e) </strong>
                    <strong>No renuncia a derechos; </strong>
                    si en cualquier tiempo alguna de las partes elige no
                    ejercer alguno de los derechos que tiene al amparo de ese
                    convenio, dicha conducta no implicará la renuncia al mismo
                    y su terminación no afectará las reclamaciones que hayan
                    existido o deriven de actos u omisiones ocurridos durante
                    el tiempo de su vigencia, ni la aplicación de su clausulado
                    que por su naturaleza estén destinadas a seguir teniendo
                    efecto con posterioridad a la fecha de terminación del
                    mismo. <strong><u></u></strong>
                </p>
                <p>
                    <strong>f) </strong>
                    <strong>Nulidad parcial; </strong>
                    la validez o nulidad de una cláusula no afectará la validez
                    de las demás cláusulas de este convenio, por lo tanto, en
                    caso de que se determine la invalidez o nulidad de una de
                    éstas por la autoridad competente, las provisiones
                    estipuladas en el resto del Convenio continuarán en
                    completo vigor y efecto.
                </p>
                <p>
                    <strong>g) </strong>
                    <strong>Ejemplares</strong>
                    <strong>;</strong>
                    este Convenio podrá otorgarse en varios ejemplares, ya sea
                    por duplicado, triplicado, etc., en el entendido de que,
                    cada uno de ellos es y será considerado e interpretado como
                    un original, y como un único convenio.
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u>THIRTEENTH. MISCELLANEOUS</u></strong>
                </p>
                <p>
                    <strong></strong>
                </p>
                <p>
                    <strong>a) Headings; </strong>
                    are only established for reference purposes. In case of any
                    conflict related to the interpretation of such headings,
the text of the clause shall survive for such effect.                    <strong></strong>
                </p>
                <p>
                    <strong>b) </strong>
                    <strong>Entire Agreement;</strong>
                    this NDA and/ or its exhibits, and any other document to be
                    executed about it constitutes the complete agreement of the
                    parties with respect to the matter hereunder and supersedes
                    all prior oral and written agreements and discussions with
                    respect thereto.
                </p>
                <p>
                    <strong>c) </strong>
                    <strong>Validity;</strong>
                    this NDA is executed due to the concurrence of wills
                    without any defects, illicit acts whatsoever that may
                    affect its existence and validity. The parties recognized
                    that their signatures are from their own handwriting and
have been used in all their public and private acts.                    <strong></strong>
                </p>
                <p>
                    <strong>d) </strong>
                    <strong>Amendments;</strong>
                    any amendment to the NDA shall be done in writing and shall
be executed by their respective authorized representatives.                    <strong></strong>
                </p>
                <p>
                    <strong>e) </strong>
                    <strong>No Waiver; </strong>
                    if at any time either party\'s failure to enforce in whole
                    or in part any clause, right or remedy under the NDA, such
                    conduct shall not constitute a waiver of such clause, right
                    or remedy, neither its expiration shall affect any remedy
                    deriving from any act or omission occurred during the term
                    of this agreement, nor in any way affect the validity of
the clause that by its nature shall remain full in force.                    <strong></strong>
                </p>
                <p>
                    <strong>f) </strong>
                    <strong>Partial Nullity; </strong>
                    If any clause of this NDA shall be held by a court of
                    competent jurisdiction to be invalid, illegal or
                    unenforceable, the validity, legality and enforceability of
                    the remaining clause of this NDA shall not in any way be
                    affected or impaired thereby.<strong></strong>
                </p>
                <p>
                    <strong>g) </strong>
                    <strong>Copies;</strong>
                    This NDA may be executed in any number of identical copies,
                    each of which shall be deemed to be an original, but all of
                    which, taken together, shall constitute one and the same
                    agreement.
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong>
                        <u>DÉCIMA CUARTA. JURISDICCIÓN E INTERPRETACIÓN.</u>
                    </strong>
                    Para la interpretación y cumplimiento del presente Convenio
                    las Partes se someten expresamente a las leyes y los
                    tribunales competentes de la Ciudad de México, renunciando
                    a cualquier otro fuero que pudiere corresponderles por
                    razón de sus domicilios presentes o futuros o por cualquier
                    otra razón.
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong><u>FOURTEENTH. </u></strong>
                    <strong><u>GOVERNING LAW AND JURISDICTION</u></strong>
                    This NDA shall be governed by and will be interpreted in
                    accordance with the law and courts of the United Mexican
                    States. All disputes under the NDA shall be settled in by
                    the courts of Mexico City, and the parties expressly waive
                    any right they may have to territorial jurisdiction which
                    they may have by any reason whatsoever and excluding its
                    conflict of law.
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong>
                        Leído que fue por las Partes, debidamente enteradas del
                        contenido y alcance legal de todas y cada una de las
                        cláusulas del presente convenio, lo ratifican y
                        suscriben de conformidad, el día '.$d->m_e_fecha.' en la Ciudad de
                        México en dos (2) tantos originales, quedando un
                        ejemplar en cada una de las partes.
                    </strong>
                </p>
                <p>
                    <strong><u></u></strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong>
                        Read that was by the Parties, duly aware of the content
                        and legal scope of each one of the clauses of this NDA,
                        ratify and subscribe in accordance, on '.$d->m_e_fecha.', in Mexico
                        City in two (2) so many originals, leaving one copy in
                        each of the parts.
                    </strong>
                </p>
                <p>
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p>
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p align="center">
                    <strong>IDEASREWARD, S.A.P.I. DE C.V.</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p align="center">
                    <strong>'.$d->m_sociedad.'</strong>
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p align="center">
                    <strong>Miguel Angel Parada Montaño</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p align="center">
                    <strong>'.$d->name.'</strong>
                    <strong></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="346" valign="top">
                <p align="center">
                    <strong>Representante Legal</strong>
                </p>
            </td>
            <td width="19" valign="top">
            </td>
            <td width="340" valign="top">
                <p align="center">
                    <strong>Por su propio derecho</strong>
                </p>
            </td>
        </tr>
    </tbody>
</table>

';
  $return_ .= '</body>';
  $return_ .= '</html>';

  		return $return_;
  	}

}
