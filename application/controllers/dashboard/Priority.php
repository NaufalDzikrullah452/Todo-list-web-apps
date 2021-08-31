<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Today extends CI_Controller {

	public function index()
	{
        $data ['title'] = "Priority";

        $this->load->view('partials_dashboard/header',$data);
        $this->load->view('partials_dashboard/sidebar');
		$this->load->view('layout/dashboard/v_priority');
        $this->load->view('partials_dashboard/footer');
	}
}
