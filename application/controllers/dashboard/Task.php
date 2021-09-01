<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Task extends CI_Controller
{

<<<<<<< Updated upstream
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation'));
        $this->load->model(array('Task_model', 'Subtask_model'));
    }

	public function index()
	{
        if ($this->session->userdata('user_email') == null) redirect('index.php/sign_in');

        $data ['title'] = "Task";

        $data['allTasks'] = $this->Task_model->getAllByUserId($this->session->userdata('user_id'));

        $this->load->view('partials_dashboard/header',$data);
        $this->load->view('partials_dashboard/sidebar');
		$this->load->view('layout/dashboard/v_all_task', $data);
=======
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != TRUE) {
            redirect('index.php/Sign_in');
        };

        $this->load->model('task_model');
    }

    public function index()
    {
        $data['title'] = "Task";
        $data['task'] = $this->task_model->getTaskById($this->session->userdata('user_id'));
        $this->load->view('partials_dashboard/header', $data);
        $this->load->view('partials_dashboard/sidebar');
        $this->load->view('layout/dashboard/v_all_task', $data);
>>>>>>> Stashed changes
        $this->load->view('partials_dashboard/footer');
        $this->load->view('partials_js/js_checklist_task');
        $this->load->view('partials_js/js_priority_task');
    }

    public function pending()
<<<<<<< Updated upstream
	{
        $data ['title'] = "Pending Task";

        $data['pendingTasks'] = $this->Task_model->getAllUncompletedByUserId($this->session->userdata('user_id'));

        $this->load->view('partials_dashboard/header',$data);
        $this->load->view('partials_dashboard/sidebar');
		$this->load->view('layout/dashboard/v_pending_task', $data);
=======
    {
        $data['title'] = "Pending Task";
        $data['task'] = $this->task_model->getPendingTask($this->session->userdata('user_id'));
        $this->load->view('partials_dashboard/header', $data);
        $this->load->view('partials_dashboard/sidebar');
        $this->load->view('layout/dashboard/v_pending_task', $data);
>>>>>>> Stashed changes
        $this->load->view('partials_dashboard/footer');
        $this->load->view('partials_js/js_checklist_task');
        $this->load->view('partials_js/js_priority_task');
    }

    public function complete()
    {
        $data['title'] = "Complete Task";

<<<<<<< Updated upstream
        $data['completedTasks'] = $this->Task_model->getAllCompletedByUserId($this->session->userdata('user_id'));

        $this->load->view('partials_dashboard/header',$data);
        $this->load->view('partials_dashboard/sidebar');
		$this->load->view('layout/dashboard/v_complete_task', $data);
=======
        $data['task'] = $this->task_model->getCompletedTask($this->session->userdata('user_id'));
        $this->load->view('partials_dashboard/header', $data);
        $this->load->view('partials_dashboard/sidebar');
        $this->load->view('layout/dashboard/v_complete_task', $data);
>>>>>>> Stashed changes
        $this->load->view('partials_dashboard/footer');
        $this->load->view('partials_js/js_checklist_task');
        $this->load->view('partials_js/js_priority_task');
    }
}
