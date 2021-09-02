<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verification_code extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/v_verification_code');
	}

    public function verify()
    {
        // code to verify the verification code here

        redirect(site_url('index.php/new_password'));
    }
}