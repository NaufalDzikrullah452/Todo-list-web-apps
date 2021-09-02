<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verification_code extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session', 'email');
        $this->load->helper('form');
        $this->load->model(array('User_model'));
    }

	public function index()
	{
		$this->load->view('layout/v_verification_code');
	}

    public function verify()
    {
        $verif_code_db = $this->User_model->getVerifCode($this->session->userdata('forgot_email'));
        $verif_code_user = $this->input->post('pass');

        if($verif_code_db == $verif_code_user) {
            $this->session->set_userdata('allow_change', TRUE);
            redirect(site_url('index.php/new_password'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Incorrect verification code </div>');
            redirect(site_url('index.php/verification_code'));
        }
    }
}