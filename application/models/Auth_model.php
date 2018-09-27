<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
    public function login() {
        $this->username = $this->input->post('username');
        $this->password = $this->input->post('password');
        $query = $this->db->get_where('admin',array('admin_username' => $this->username,'admin_password' => md5($this->password)),1);
        if ($query->num_rows() > 0) {
            return $this->username;
        } else {
            $this->message = 'Username atau Password Salah!';
            return FALSE;
        }
    }
    public function get_message() {
        return $this->message;
    }
}

/* End of file Auth_model.php */
