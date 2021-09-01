<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sign_in extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		if ($this->session->userdata('user_email') != null) redirect('index.php/dashboard/today');

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('pass', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {
			# code...
			$this->load->view('layout/v_sign_in');
		} else {
			// validasi success
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$pass = md5($this->input->post('pass'));
		$user = $this->db->get_where('tbl_user', ['user_email' => $email])->row_array();

		if ($user) {
			if ($pass == $user['user_password']) {
				// if user exist
				$data = [
					'user_id' => $user['user_id'],
					'user_picture' => $user['user_picture'],
					'user_username' => $user['user_username'],
					'user_email' => $user['user_email']
				];
				$this->session->set_userdata($data);
				$this->session->set_userdata('logged', TRUE);
				redirect('index.php/dashboard/Today');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Your password wrong! </div>');
				redirect('index.php/Sign_in');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Your email not registered!</div>');
			redirect('index.php/Sign_in');
		}
	}

	function signout()
	{
		$this->session->sess_destroy();
		$url = base_url('index.php/Sign_in');
		redirect($url);
	}
}
