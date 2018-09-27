<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
    function __construct() {
        parent::__construct();
        $model = array(
                    'Berita_model',
                    'Kategori_model'
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
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url']  = site_url('berita/index?q=' . urlencode($q));
            $config['first_url'] = site_url('berita/index?q=' . urlencode($q));
        } else {
            $config['base_url']  = site_url('berita/index');
            $config['first_url'] = site_url('berita/index');
        }

        $config['per_page'] = 8;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Berita_model->total_rows($q);
        $berita = $this->Berita_model->list($config['per_page'], $start, $q)->result_object();

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'news' => $berita,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'kategori' => $this->Kategori_model->list_counter()->result_object()
        );

        $this->Ui->template('berita/v_berita_index',$data); 
    }

    public function post($berita_id, $slug) {
        $berita = $this->Berita_model->post($berita_id)->result_object();
        if (!count($berita)) {
            show_404();
        }

        $berita = $berita[0];
        $slug   = url_title(strtolower(word_limiter($berita->berita_judul,5))) == $slug;
        if (!$slug) {
            show_404();
        }

        $data['berita']   = $berita;
        $data['kategori'] = $this->Kategori_model->list_counter()->result_object();
        $this->Ui->template('berita/v_berita_single',$data);
    }

    public function kategori($kategori_id) {
        $start = intval($this->input->get('start'));

        $config['base_url']  = site_url('berita/kategori');
        $config['first_url'] = site_url('berita/kategori');
        $config['per_page'] = 8;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Berita_model->kategori_total_rows($kategori_id);

        $berita = $this->Berita_model->list_by_kategori($config['per_page'], $start, $kategori_id)->result_object();

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'news' => $berita,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'kategori' => $this->Kategori_model->list_counter()->result_object()
        );
        $this->Ui->template('berita/v_berita_index',$data); 
    }

}

/* End of file Berita.php */
