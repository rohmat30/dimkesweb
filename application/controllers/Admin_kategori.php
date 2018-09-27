<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_kategori extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Kategori_model');
    }

    public function index()
    {
        $data['title'] = 'Kategori';
        $data['default_value'] = $this->input->post('kategori_nama') ? $this->input->post('kategori_nama') : NULL;

        $add = $this->Kategori_model->tambah();
        if ($add['status'] == 'success') {
            $data['mess'] = 'Berhasil menambahkan!';
        }

        $mess = $this->session->flashdata('msg');
        if ($mess) {
            $data['mess'] = $mess;
        }
        
        $data['kategori'] = $this->Kategori_model->list()->result_object();

        $this->Ui->admin('kategori/v_kategori_index',$data);
    }
    
    public function edit($kategori_id)
    {
        $listById = $this->Kategori_model->listById($kategori_id)->result_object();
        
        $data['title']  = 'Kategori';
        
        $edit = $this->Kategori_model->update($kategori_id);
        if ($edit == TRUE) {
            $this->session->set_flashdata('msg','Berhasil Mengubah!');
            redirect('admin_kategori');
        }
        $list = $this->Kategori_model->list()->result_object();
        $data['default_value'] = $this->input->post('kategori_nama') ? $this->input->post('kategori_nama') : $listById[0]->kategori_nama;        
        $data['kategori'] = $list;

        $this->Ui->admin('kategori/v_kategori_index',$data);
    }

    public function hapus($delete_id) {                
        $kategori = $this->Kategori_model->listById($delete_id)->result_object();
        if (count($kategori) > 0 && $this->session->username) {
            if ($kategori[0]->kategori_id != 1) {
                $this->Kategori_model->delete($delete_id);
                $this->session->set_flashdata('msg', 'Berhasil Menghapus!');
                redirect('admin_kategori');
            } else {
                show_404();
            }
        } else {
            show_404();
        }
    }

    public function ajax_tambah() {
        if ($this->input->post()) {
            $json = $this->Kategori_model->tambah();
            $this->output->set_content_type('application/json')->set_output(json_encode($json));
        } else {
            show_404();
        }
    }

}

/* End of file Admin_kategori.php */
