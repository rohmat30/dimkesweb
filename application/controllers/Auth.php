<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
    }
    public function index()
    {
        if ($this->session->username) {
            redirect('admin_home');
        }
        
        $data = array();
        if ($this->input->post()) {
            $is_login = $this->Auth_model->login();
            if ($is_login) {
                $this->session->set_userdata('username', $is_login);
                redirect('admin_home');
            } else {
                $data['message'] = $this->Auth_model->get_message();
            }
        }
        $this->load->view('login',$data);
    }
    public function logout() {
        $this->session->sess_destroy();
        redirect('auth');
    }
}

/* End of file Auth.php */
