<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ui extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    public function template($page, $vars = array()) {
        $this->load->view('template/layout/header',$vars);
        $this->load->view('template/'.$page,$vars);
        $this->load->view('template/layout/footer',$vars);
    }
}

/* End of file Ui.php */
