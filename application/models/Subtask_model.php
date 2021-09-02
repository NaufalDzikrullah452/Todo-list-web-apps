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

    public function getByParentId($id)
    {
        return $this->db->get_where($this->_table, array('subtask_parent_id' => $id))->result();
    }

    public function getLastById()
    {
        $last_id = $this->db->insert_id();
        return $this->db->get_where($this->_table, array('subtask_id' => $last_id))->row();
    }

    public function save($data)
    {
        // return true;
        return $this->db->insert($this->_table, $data);
    }

    public function update($id, $task_name)
    {
        $this->db->where('subtask_id', $id);
        return $this->db->update($this->_table, array('subtask_name' => $task_name));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('subtask_id' => $id));
    }

    public function update_status($id)
    {
        $data = $this->getById($id);

        $this->db->where('subtask_id', $id);

        if ($data->subtask_status != 'complete') {
            $this->db->update($this->_table, array('subtask_status' => 'complete'));
            return true;
        } else {
            $this->db->update($this->_table, array('subtask_status' => 'uncomplete'));
            return false;
        }
        // return true;
    }
    public function deleteByParent($id)
    {
        return $this->db->delete($this->_table, array('subtask_parent_id' => $id));
    }
}
