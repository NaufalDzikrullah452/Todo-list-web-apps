<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class New_password extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session', 'email');
        $this->load->helper('form');
        $this->load->model(array('User_model'));
    }

	public function index()
	{
        if (!$this->session->userdata('allow_change')) redirect('index.php/sign_in');

		$this->load->view('layout/v_new_pass');
	}

    public function renew()
    {
        $new_password = $this->input->post('pass');
        $new_password_confirm = $this->input->post('pass2');

        if($new_password == $new_password_confirm) {
            $this->User_model->update_password($this->session->userdata('forgot_email'), md5($new_password));
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New password successfuly setup </div>');
            redirect(site_url('index.php/sign_in'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Password confirmation is different </div>');
            redirect(site_url('index.php/new_password'));
        }

        
    }
}
