<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Today extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('task_model');
    }

    public function index()
    {
        if ($this->session->userdata('user_email') == null) redirect('index.php/sign_in');
        
        $data['user'] = $this->db->get_where('tbl_user', ['user_email' => $this->session->userdata('user_email')])->row_array();
        // echo 'Selamat Datang ' . $data['user']['user_email'];
        $data['title'] = "Today";

        $data['task'] = $this->task_model->getAll();

        $this->load->view('partials_dashboard/header', $data);
        $this->load->view('partials_dashboard/sidebar');
        $this->load->view('layout/dashboard/v_today', $data);
        $this->load->view('partials_dashboard/footer');
    }

    public function save()
    {
        if ($this->input->is_ajax_request()) {
            //echo "ajax request successfully";
            $this->form_validation->set_rules('task_name', 'Task_name', 'required');
            $this->form_validation->set_rules('task_description', 'Task_description', 'required');
            $this->form_validation->set_rules('task_category_id', 'Task_category_id', 'required');
            $this->form_validation->set_rules('task_due_date', 'Task_due_date', 'required');
            $this->form_validation->set_rules('task_time', 'Task_time', 'required');

            if ($this->form_validation->run() == false) {
                $data = array('responce' => 'error', 'message' => validation_errors());
            } else {
                $ajax_data = $this->input->post();
                if ($this->task_model->save($ajax_data)) {
                    $data = array('responce' => 'success', 'message' => 'Task successfully added!');
                } else {
                    $data = array('responce' => 'error', 'message' => 'Failed to add task!');
                }
                echo json_encode($data);
            }
        } else {
            echo "No direct scripts access allowed";
        }
    }

    public function edit()
    {
        if ($this->task_model->update($this->input->post('task_id'))) {
            redirect('index.php/dashboard/today');
        }
    }
    public function edit_status()
    {
        if ($this->task_model->update_status($this->input->post('task_id'))) {
            $data = array('responce' => 'complete', 'message' => 'Task Completed!');
        } else {
            $data = array('responce' => 'uncomplete', 'message' => 'Task Uncompleted!');
        }
        echo json_encode($data);
    }
    public function delete()
    {
        if ($this->task_model->delete($this->input->post('task_id'))) {
            redirect('index.php/dashboard/today');
        }
    }
}
