<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
        if ($this->session->userdata('user_email') == null) redirect('index.php/sign_in');
        
        $data ['title'] = "Profile";

        $this->load->view('partials_dashboard/header',$data);
        $this->load->view('partials_dashboard/sidebar');
	$this->load->view('layout/dashboard/v_profile');
        $this->load->view('partials_dashboard/footer');
	}
}
