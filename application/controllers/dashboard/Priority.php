<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Priority extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Task_model', 'Subtask_model'));
        $this->load->library(array('form_validation'));
    }

	public function index()
	{
        $data['title'] = "Priority";
        $data['prioritizedTasks'] = $this->Task_model->getAllPrioritized($this->session->userdata('user_id'));

        $this->load->view('partials_dashboard/header',$data);
        $this->load->view('partials_dashboard/sidebar');
		$this->load->view('layout/dashboard/v_priority', $data);
        $this->load->view('partials_dashboard/footer');
	}
}
