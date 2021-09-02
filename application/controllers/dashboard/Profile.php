<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->library(array('form_validation'));
                $this->load->model(array('Task_model', 'Subtask_model', 'User_model'));
        }

	public function index()
	{
        if ($this->session->userdata('user_email') == null) redirect('index.php/sign_in');

        $data['allTasksCount'] = $this->Task_model->getTotalByUserId($this->session->userdata('user_id'));
        $data['pendingTasksCount'] = $this->Task_model->getAllUncompletedCountByUserId($this->session->userdata('user_id'));
        $data['completedTasksCount'] = $this->Task_model->getAllCompletedCountByUserId($this->session->userdata('user_id'));
        
        $data ['title'] = "Profile";
        $data['user'] = $this->User_model->getById($this->session->userdata('user_id'));

        $this->load->view('partials_dashboard/header', $data);
        $this->load->view('partials_dashboard/sidebar');
	$this->load->view('layout/dashboard/v_profile', $data);
        $this->load->view('partials_dashboard/footer');
        $this->load->view('partials_dashboard/js/js_profile');
        }

        public function update()
        {
                if (!$this->session->userdata('user_email')) redirect(site_url('index.php/dashboard/sign_in/signout'));

                $profile = $this->User_model;

                $validation = $this->form_validation;
                $validation->set_rules($profile->rules());

                $post = $this->input->post();

                if ($validation->run() && $post['password'] == $post['password2']) {
                        $profile->update($this->session->userdata('user_id'));
                        $this->session->set_flashdata('success', 'Profile berhasil disimpan');
                        redirect(site_url('index.php/dashboard/profile'));
                }

                $this->session->set_flashdata('error', 'Profile gagal disimpan');
                redirect(site_url('index.php/dashboard/profile'));
        }
}
