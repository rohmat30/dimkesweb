<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Ui');
    }
    public function index($page='index')
    {
        $this->Ui->template($page);
    }

}

/* End of file Template.php */
