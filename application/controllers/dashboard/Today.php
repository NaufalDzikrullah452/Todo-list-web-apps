<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Today extends CI_Controller {

	public function index()
	{
        $data['user'] = $this->db->get_where('tbl_user', ['user_email' => $this->session->userdata('user_email')])->row_array();
        // echo 'Selamat Datang ' . $data['user']['user_email'];
        $data ['title'] = "Today";

        $this->load->view('partials_dashboard/header',$data);
        $this->load->view('partials_dashboard/sidebar');
		$this->load->view('layout/dashboard/v_today');
        $this->load->view('partials_dashboard/footer');
	}

    public function logout()
    {
        $this->session->unset_userdata('user_email');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You have been logged out!</div>');

        redirect('Sign_in');
    }
}
