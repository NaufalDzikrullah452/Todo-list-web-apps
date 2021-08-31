<?php defined('BASEPATH') or exit('No direct script access allowed');

class Subtask_model extends CI_Model
{
    private $_table = 'tbl_subtask';

    public $subtask_name;
    public $subtask_status;
    
    public $subtask_parent_id;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, array('subtask_id' => $id))->row();
    }

    public function save()
    {
        $post = $this->input->post();

        $this->subtask_name = $post['subtask_name'];
        $this->subtask_status = $post['subtask_status'];
        $this->subtask_parent_id = $post['subtask_parent_id'];

        return $this->db->insert($this->_table, $this);
    }

    public function update($id)
    {
        $post = $this->input->post();

        $this->subtask_name = $post['subtask_name'];
        $this->subtask_status = $post['subtask_status'];
        $this->subtask_parent_id = $post['subtask_parent_id'];

        return $this->db->update($this->_table, $this, array('subtask_id', $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('subtask_id', $id));
    }
}
