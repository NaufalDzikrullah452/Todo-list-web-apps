<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function index()
	{
        if ($this->session->userdata('user_email') == null) redirect('index.php/sign_in');
        
        $data ['title'] = "Account";

        $this->load->view('partials_dashboard/header',$data);
        $this->load->view('partials_dashboard/sidebar');
		$this->load->view('layout/dashboard/v_account');
        $this->load->view('partials_dashboard/footer');
	}
}
