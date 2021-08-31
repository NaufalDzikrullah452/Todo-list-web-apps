<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = 'tbl_user';

    public $user_picture;
    public $user_username;
    public $user_email;
    public $user_password;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, array('user_id' => $id))->row();
    }

    public function save()
    {
        $post = $this->input->post();

        $this->user_picture = $post['user_picture'];
        $this->user_username = $post['user_username'];
        $this->user_email = $post['user_email'];
        $this->user_password = $post['user_password'];

        return $this->db->insert($this->_table, $this);
    }

    public function update($id)
    {
        $post = $this->input->post();

        $this->user_picture = $post['user_picture'];
        $this->user_username = $post['user_username'];
        $this->user_email = $post['user_email'];
        $this->user_password = $post['user_password'];

        return $this->db->update($this->_table, $this, array('user_id', $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('user_id', $id));
    }
}
