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

    public function getAllPrioritized($user_id)
    {
        return $this->db->get_where($this->_table, array('task_user_id' => $user_id, 'task_priority_status' => '1'))->result();
    }

    public function getAllUncompletedByUserId($user_id)
    {
        return $this->db->get_where($this->_table, array('task_user_id' => $user_id, 'task_status' => 'uncomplete'))->result();
    }

    public function getAllUncompletedCountByUserId($user_id)
    {
        return $this->db->query("
        SELECT COUNT(*) as total
        FROM tbl_task
        WHERE task_user_id = {$user_id} AND task_status = 'uncomplete'
        ")->result();
    }

    public function getAllCompletedByUserId($user_id)
    {
        return $this->db->get_where($this->_table, array('task_user_id' => $user_id, 'task_status' => 'complete'))->result();
    }

    public function getAllCompletedCountByUserId($user_id)
    {
        return $this->db->query("
        SELECT COUNT(*) as total
        FROM tbl_task
        WHERE task_user_id = {$user_id} AND task_status = 'complete'
        ")->result();
    }

    public function getAllByUserId($user_id)
    {
        return $this->db->get_where($this->_table, array('task_user_id' => $user_id))->result();
    }
    public function getAllByUserIdToday($user_id, $today)
    {

        $this->db->where('task_due_date', $today);
        return $this->db->get_where($this->_table, array('task_user_id' => $user_id))->result();
    }
    public function getTaskById($id)
    {
        return $this->db->get_where($this->_table, array('task_id' => $id))->row();
    }

    public function getTotalByUserId($user_id)
    {
        return $this->db->query("
        SELECT COUNT(*) as total
        FROM tbl_task
        WHERE task_user_id = {$user_id}
        ")->result();
    }

    public function getEachTotalByKategori($user_id)
    {
        return $this->db->query("
        SELECT category_name, COUNT(*) as total 
        FROM tbl_task
        INNER JOIN tbl_category ON task_category_id = category_id
        WHERE task_user_id = {$user_id}
        GROUP BY category_name
        ")->result();
    }

    public function getCompletedEachWeek($user_id)
    {
        return $this->db->query("
        SELECT count(*) as total
        FROM tbl_task
        WHERE task_user_id = {$user_id} AND task_status = 'complete'
        GROUP BY yearweek(task_modified)
        ORDER BY task_modified
        LIMIT 4
        ")->result();
    }

    public function getUncompletedEachWeek($user_id)
    {
        return $this->db->query("
        SELECT count(*) as total
        FROM tbl_task
        WHERE task_user_id = {$user_id} AND task_status = 'uncomplete'
        GROUP BY yearweek(task_modified)
        ORDER BY task_modified
        LIMIT 4
        ")->result();
    }


    public function save($data)
    {
        // change YYYY/MM/DD to YYYY-MM-DD

        return $this->db->insert($this->_table, $data);
    }

    public function update($id, $data)
    {
        return $this->db->update($this->_table, $data, array('task_id' => $id));
    }


    public function update_status($id)
    {
        $data = $this->getTaskById($id);

        $this->db->where('task_id', $id);

        if ($data->task_status != 'complete') {
            $this->db->update($this->_table, array('task_status' => 'complete'));
            return true;
        } else {
            $this->db->update($this->_table, array('task_status' => 'uncomplete'));
            return false;
        }
        // return true;
    }
    public function update_priority_status($id)
    {
        $data = $this->getTaskById($id);

        $this->db->where('task_id', $id);

        if ($data->task_priority_status != '1') {
            $this->db->update($this->_table, array('task_priority_status' => '1'));
            return true;
        } else {
            $this->db->update($this->_table, array('task_priority_status' => '0'));
            return false;
        }
        // return true;
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('task_id' => $id));
    }

    public function get_last_insert()
    {
        return $this->db->insert_id();
    }
}
