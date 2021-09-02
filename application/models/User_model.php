<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = 'tbl_user';

    public $user_picture;
    public $user_username;
    public $user_email;
    public $user_password;

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Username',
                'rules' => 'required'
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            ],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, array('user_id' => $id))->row();
    }

    public function update($user_id)
    {
        $post = $this->input->post();

        $data = array(
            'user_username' => $post['nama'],
            'user_email' => $post['email'],
            'user_password' => $post['password'] == null || $post['password'] == "" ? $this->session->userdata('user_password') : $post['password']
        );

        if (!empty($_FILES["filefoto"]["name"])) {
            $new_filename = $this->_upload_file();
            $old_filename = $this->getById($user_id)->user_picture;

            $data['user_picture'] = $new_filename ? $new_filename : $old_filename;
            $this->_delete_file($old_filename);
        }

        $this->db->update($this->_table, $data, array('user_id' => $user_id));
        return $this->db->affected_rows();
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('user_id', $id));
    }

    private function _upload_file()
    {
        $config['upload_path']          = './uploads/';
        $config['file_name'] = 'profil_' . md5(uniqid());
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 5012;

        $this->load->library('upload', $config);

        var_dump("here");

        if ($this->upload->do_upload("filefoto")) {
            var_dump("please be here");
            return $this->upload->data("file_name");
        }

        var_dump("whyhere");
        die();

        return NULL;
    }

    private function _delete_file($filename = NULL)
    {
        $this->load->helper('file');

        if ($filename !== NULL) {
            delete_files('../uploads/' . $filename);
        }
    }
}
