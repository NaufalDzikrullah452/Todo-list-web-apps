<?php defined('BASEPATH') or exit('No direct script access allowed');

class Category_model extends CI_Model
{
    private $_table = 'tbl_category';

    public $category_name;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, array('category_id' => $id))->row();
    }

    public function save()
    {
        $post = $this->input->post();

        $this->category_name = $post['category_name'];

        return $this->db->insert($this->_table, $this);
    }

    public function update($id)
    {
        $post = $this->input->post();

        $this->category_name = $post['category_name'];

        return $this->db->update($this->_table, $this, array('category_id', $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('category_id', $id));
    }
}