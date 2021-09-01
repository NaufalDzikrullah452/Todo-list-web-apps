<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sign_up extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_user.user_email]', [
			'is_unique' => 'The Email Account Already Exists!'
		]);
		$this->form_validation->set_rules('pass1', 'Password', 'required|trim|min_length[3]|matches[pass2]', [
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short!',
		]);
		$this->form_validation->set_rules('pass2', 'Password', 'required|trim|matches[pass1]');

		if ($this->form_validation->run() == false) {
			$this->load->view('layout/v_sign_up');
		} else {
			$data = [
				'user_picture' => 'default.jpg',
				'user_username' => htmlspecialchars($this->input->post('username', true)),
				'user_email' => htmlspecialchars($this->input->post('email', true)),
				'user_password' => md5($this->input->post('pass1')),
			];
			$this->db->insert('tbl_user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Your account has been created!. Please Login</div>');
			redirect('index.php/Sign_in');
		}
	}
}
