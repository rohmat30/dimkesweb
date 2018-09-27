<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $model = array(
                    'Berita_model'
               );
        $helper = array(
                    'date',
                    'text'
                );
        $this->load->model($model);
        $this->load->helper($helper);
    }
    
    public function index()
    {
        $data['latest_news'] = $this->Berita_model->list(2)->result_object();
        $this->Ui->template('home/v_home_index',$data);
    }

}

/* End of file Home.php */
