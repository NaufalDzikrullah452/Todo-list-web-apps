<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['user_email' => $this->session->userdata('user_email')])->row_array();
        echo 'Selamat Datang ' . $data['user']['user_email'];
    }

    public function logout()
    {
        $this->session->unset_userdata('user_email');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You have been logged out!</div>');

        redirect('Sign_in');
    }
}
