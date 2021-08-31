<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class New_password extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/v_new_pass');
	}

    public function renew()
    {
        // code to renew password here

        redirect(site_url('sign_in'));
    }
}
