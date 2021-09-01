<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {

	public function index()
	{
        $data ['title'] = "Task";

        $this->load->view('partials_dashboard/header',$data);
        $this->load->view('partials_dashboard/sidebar');
		$this->load->view('layout/dashboard/v_all_task');
        $this->load->view('partials_dashboard/footer');
	}

    public function pending()
	{
        $data ['title'] = "Pending Task";

        $this->load->view('partials_dashboard/header',$data);
        $this->load->view('partials_dashboard/sidebar');
		$this->load->view('layout/dashboard/v_pending_task');
        $this->load->view('partials_dashboard/footer');
	}

    public function complete()
	{
        $data ['title'] = "Complete Task";

        $this->load->view('partials_dashboard/header',$data);
        $this->load->view('partials_dashboard/sidebar');
		$this->load->view('layout/dashboard/v_complete_task');
        $this->load->view('partials_dashboard/footer');
	}
}
