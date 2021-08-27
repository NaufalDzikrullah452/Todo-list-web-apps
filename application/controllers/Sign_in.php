<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_in extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/v_sign_in');
	}
}
