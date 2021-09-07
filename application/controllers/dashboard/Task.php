<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Task extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation'));
        $this->load->model(array('Task_model', 'Subtask_model', 'User_model'));
        $this->load->model('task_model');
        $this->load->model('subtask_model');
    }

    public function index()
    {
        if ($this->session->userdata('user_email') == null) redirect('index.php/sign_in');

        $data['title'] = "Task";
        $data['user'] = $this->User_model->getById($this->session->userdata('user_id'));

        $data['task'] = $this->Task_model->getAllByUserId($this->session->userdata('user_id'));

        // get subtask each with id
        foreach ($data['task'] as $task) {
            $task->subtask = $this->subtask_model->getByParentId($task->task_id);
        }

        $this->load->view('partials_dashboard/header', $data);
        $this->load->view('partials_dashboard/sidebar');
        $this->load->view('layout/dashboard/v_all_task', $data);
        $this->load->view('partials_dashboard/footer');
        $this->load->view('partials_dashboard/js/js_checklist_task');
        $this->load->view('partials_dashboard/js/js_priority_task');
        $this->load->view('partials_dashboard/js/js_checklist_subtask');
        $this->load->view('partials_dashboard/js/js_notification');
    }

    public function pending()
    {
        $data['title'] = "Pending Task";
        $data['user'] = $this->User_model->getById($this->session->userdata('user_id'));

        $data['task'] = $this->Task_model->getAllUncompletedByUserId($this->session->userdata('user_id'));

        // get subtask each with id
        foreach ($data['task'] as $task) {
            $task->subtask = $this->subtask_model->getByParentId($task->task_id);
        }
        $this->load->view('partials_dashboard/header', $data);
        $this->load->view('partials_dashboard/sidebar');
        $this->load->view('layout/dashboard/v_pending_task', $data);
        $this->load->view('partials_dashboard/footer');
        $this->load->view('partials_dashboard/js/js_checklist_task');
        $this->load->view('partials_dashboard/js/js_priority_task');
        $this->load->view('partials_dashboard/js/js_checklist_subtask');
        $this->load->view('partials_dashboard/js/js_notification');
    }

    public function complete()
    {
        $data['title'] = "Complete Task";
        $data['user'] = $this->User_model->getById($this->session->userdata('user_id'));

        $data['task'] = $this->Task_model->getAllCompletedByUserId($this->session->userdata('user_id'));

        // get subtask each with id
        foreach ($data['task'] as $task) {
            $task->subtask = $this->subtask_model->getByParentId($task->task_id);
        }
        $this->load->view('partials_dashboard/header', $data);
        $this->load->view('partials_dashboard/sidebar');
        $this->load->view('layout/dashboard/v_complete_task', $data);
        $this->load->view('partials_dashboard/footer');
        $this->load->view('partials_dashboard/js/js_checklist_task');
        $this->load->view('partials_dashboard/js/js_priority_task');
        $this->load->view('partials_dashboard/js/js_checklist_subtask');
        $this->load->view('partials_dashboard/js/js_notification');
    }

    public function save()
    {
        $var = $this->input->post('task_due_date');
        $str_rep = str_replace('/', '-', $var);
        $date = date('Y-d-m', strtotime($str_rep));
        $data = [
            'task_user_id' => $this->session->userdata('user_id'),
            'task_name' => $this->input->post('task_name', true),
            'task_description' => $this->input->post('task_description', true),
            'task_category_id' => $this->input->post('task_category_id', true),
            'task_status' => 'uncomplete',
            'task_due_date' => $date,
            'task_time' => $this->input->post('task_time', true),
            'task_priority_status' => '0'
        ];
        if ($this->task_model->save($data)) {
            $this->session->set_flashdata('msg', 'success');
        } else {
            $this->session->set_flashdata('msg', 'error');
        }
        redirect('index.php/dashboard/task');
    }

    public function edit()
    {
        $var = $this->input->post('task_due_date');
        $str_rep = str_replace('/', '-', $var);
        $date = date('Y-d-m', strtotime($str_rep));
        $data = [
            'task_user_id' => $this->session->userdata('user_id'),
            'task_name' => $this->input->post('task_name', true),
            'task_description' => $this->input->post('task_description', true),
            'task_category_id' => $this->input->post('task_category_id', true),
            'task_status' => $this->input->post('task_status', true),
            'task_due_date' => $date,
            'task_time' => $this->input->post('task_time', true),
            'task_priority_status' => $this->input->post('task_priority_status', true),
        ];
        if ($this->task_model->update($this->input->post('task_id'), $data)) {
            redirect('index.php/dashboard/task');
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
    public function edit_priority_status()
    {
        if ($this->task_model->update_priority_status($this->input->post('task_id'))) {
            $data = array('responce' => '1', 'message' => 'Task Priority!');
        } else {
            $data = array('responce' => '0', 'message' => 'Task Unpriority!');
        }
        echo json_encode($data);
    }
    public function delete()
    {
        $this->subtask_model->deleteByParent($this->input->post('task_id'));
        if ($this->task_model->delete($this->input->post('task_id'))) {
            redirect('index.php/dashboard/task');
        }
    }


    public function save_subtask()
    {
        $data = [
            'subtask_name' => $this->input->post('sub_task_name', true),
            'subtask_status' => 'uncomplete',
            'subtask_parent_id' => $this->input->post('subtask_parent_id', true)
        ];
        if ($this->subtask_model->save($data)) {
            $subtask = $this->subtask_model->getLastById();
            redirect('index.php/dashboard/task');
        } else {
            $data = array('name' => 'name error');
        }
    }
    function edit_subtask()
    {
        $subtask_id = $this->input->post('subtask_id');
        $subtask_name = $this->input->post('subtask_name');
        if ($this->subtask_model->update($subtask_id, $subtask_name)) {
            redirect('index.php/dashboard/task');
        }
        echo $subtask_name . ' ' . $subtask_id;
    }

    public function edit_status_subtask()
    {
        if ($this->subtask_model->update_status($this->input->post('subtask_id'))) {
            $data = array('responce' => 'complete', 'message' => 'Task Completed!');
        } else {
            $data = array('responce' => 'uncomplete', 'message' => 'Task Uncompleted!');
        }
        echo json_encode($data);
    }

    public function delete_subtask()
    {
        if ($this->subtask_model->delete($this->input->post('task_id'))) {
            redirect('index.php/dashboard/task');
        }
    }
}
