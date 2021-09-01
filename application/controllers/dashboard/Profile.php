<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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

        $data['allTasksCount'] = $this->Task_model->getTotalByUserId($this->session->userdata('user_id'));
        $data['pendingTasksCount'] = $this->Task_model->getAllUncompletedCountByUserId($this->session->userdata('user_id'));
        $data['completedTasksCount'] = $this->Task_model->getAllCompletedCountByUserId($this->session->userdata('user_id'));
        
        $data ['title'] = "Profile";

        $this->load->view('partials_dashboard/header', $data);
        $this->load->view('partials_dashboard/sidebar');
	$this->load->view('layout/dashboard/v_profile', $data);
        $this->load->view('partials_dashboard/footer');
        }
}
