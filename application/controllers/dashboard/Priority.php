<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Priority extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation'));
        $this->load->model(array('Task_model', 'Subtask_model'));
    }

	public function index()
	{
        if ($this->session->userdata('user_email') == null) redirect('index.php/sign_in');

        $data['title'] = "Priority";
        $data['prioritizedTasks'] = $this->Task_model->getAllPrioritized($this->session->userdata('user_id'));

        $this->load->view('partials_dashboard/header',$data);
        $this->load->view('partials_dashboard/sidebar');
		$this->load->view('layout/dashboard/v_priority', $data);
        $this->load->view('partials_dashboard/footer');
	}
}
