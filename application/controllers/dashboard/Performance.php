<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Performance extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model(array('Task_model', 'Subtask_model', 'User_model'));
    }
    
	public function index()
	{
        if ($this->session->userdata('user_email') == null) redirect('index.php/sign_in');

        $data['title'] = "Performance";
        $data['user'] = $this->User_model->getById($this->session->userdata('user_id'));

        $this->load->view('partials_dashboard/header',$data);
        $this->load->view('partials_dashboard/sidebar');
		$this->load->view('layout/dashboard/v_performance', $data);
        $this->load->view('partials_dashboard/footer_performance');
        $this->load->view('partials_dashboard/js/js_performance');
	}

    public function statistics()
    {
        foreach ($this->Task_model->getEachTotalByKategori($this->session->userdata('user_id')) as $total) {
            $data[$total->category_name] = (int) $total->total;
        }

        header('Content-Type: application/json');
        echo json_encode($data);

        return;
    }

    public function total_task()
    {
        $data['totalCount'] = $this->Task_model->getTotalByUserId($this->session->userdata('user_id'));

        header('Content-Type: application/json');
        echo json_encode($data);
        
        return;
    }

    public function completed_each_week()
    {
        $data['completedEachWeek'] = $this->Task_model->getCompletedEachWeek($this->session->userdata('user_id'));

        for ($i = 0; $i < count($data['completedEachWeek']); $i++){
            $data['completedEachWeek'][$i] = (int) $data['completedEachWeek'][$i]->total;
        }

        header('Content-Type: application/json');
        echo json_encode($data);
        
        return;
    }

    public function uncompleted_each_week()
    {
        $data['uncompletedEachWeek'] = $this->Task_model->getUncompletedEachWeek($this->session->userdata('user_id'));

        for ($i = 0; $i < count($data['uncompletedEachWeek']); $i++){
            $data['uncompletedEachWeek'][$i] = (int) $data['uncompletedEachWeek'][$i]->total;
        }

        header('Content-Type: application/json');
        echo json_encode($data);
        
        return;
    }
}
