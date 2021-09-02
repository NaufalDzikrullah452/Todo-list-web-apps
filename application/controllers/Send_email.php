<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send_email extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session', 'email');
        $this->load->helper('form');
        $this->load->model(array('User_model'));
    }

	public function index()
	{
		$this->load->view('layout/v_send_email_pass');
	}

    public function send()
    {
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => '',  // Email gmail kalian
            'smtp_pass'   => '',  // Password gmail kalian
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);
        
        $from_email = ""; // Email gmail kalian
        $to_email = $this->input->post('email');

        $this->session->set_userdata('forgot_email', $to_email);

        $code = rand(pow(10, 4-1), pow(10, 4)-1);
        $this->User_model->updateVerifCode($to_email, $code);

        $this->load->library('email');
        $this->email->from($from_email, 'YourTodo');
        $this->email->to($to_email);
        $this->email->subject('Verification code');
        $this->email->message('Your verification code is: ' . $code);

        if($this->email->send()) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Email sent successfully </div>');
            redirect(site_url('index.php/verification_code'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Failed to send email </div>');
            redirect(site_url('index.php/send_email'));
        }
    }
}
