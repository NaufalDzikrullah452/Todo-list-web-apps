<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send_email extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/v_send_email_pass');
	}

    public function send()
    {
        // code to send email here

        redirect(site_url('verification_code'));
    }
}
