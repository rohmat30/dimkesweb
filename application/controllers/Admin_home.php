<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_home extends CI_Controller {

    public function index()
    {
        $data['access'] = [1,2,3];
        $this->Ui->admin('home/v_index',$data);
    }
    public function second() {
        $this->load->view('il');
    }

}

/* End of file Admin_home.php */
