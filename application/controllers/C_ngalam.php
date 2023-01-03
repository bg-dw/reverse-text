<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_ngalam extends CI_Controller {

	public function index()
	{
		$this->load->view('V_ngalam');
	}
	function convert(){
		$text = $this->input->post('inp');
		$data = $text;
		echo json_encode($data);
	}
}
