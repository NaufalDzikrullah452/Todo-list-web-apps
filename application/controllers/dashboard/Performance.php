<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Performance extends CI_Controller {

	public function index()
	{
        $data ['title'] = "Performance";

        $this->load->view('partials_dashboard/header',$data);
        $this->load->view('partials_dashboard/sidebar');
		$this->load->view('layout/dashboard/v_performance');
        $this->load->view('partials_dashboard/footer_performance');
        $this->load->view('partials_dashboard/js/js_performance');
	}
}
