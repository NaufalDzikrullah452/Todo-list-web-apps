<?php defined('BASEPATH') or exit('No direct script access allowed');

class Task_model extends CI_Model
{
    private $_table = 'tbl_task';

    public $task_name;
    public $task_description;
    public $task_status;
    public $task_due_date;
    public $task_time;
    public $task_priority_status;

    public $task_user_id;
    public $task_category_id;


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, array('task_id' => $id))->row();
    }

    public function save()
    {
        $post = $this->input->post();

        $this->task_name = $post['task_name'];
        $this->task_description = $post['task_description'];
        $this->task_status = $post['task_status'];
        $this->task_due_date = $post['task_due_date'];
        $this->task_time = $post['task_time'];
        $this->task_priority_status = $post['task_priority_status'];

        $this->task_user_id = $post['task_user_id'];
        $this->task_category_id = $post['task_category_id'];

        return $this->db->insert($this->_table, $this);
    }

    public function update($id)
    {
        $post = $this->input->post();

        $this->task_name = $post['task_name'];
        $this->task_description = $post['task_description'];
        $this->task_status = $post['task_status'];
        $this->task_due_date = $post['task_due_date'];
        $this->task_time = $post['task_time'];
        $this->task_priority_status = $post['task_priority_status'];

        $this->task_user_id = $post['task_user_id'];
        $this->task_category_id = $post['task_category_id'];

        return $this->db->update($this->_table, $this, array('task_id', $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('task_id', $id));
    }
}
