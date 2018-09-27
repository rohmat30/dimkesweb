<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_kegiatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kegiatan_model');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'admin_kegiatan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'admin_kegiatan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'admin_kegiatan/index.html';
            $config['first_url'] = base_url() . 'admin_kegiatan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Kegiatan_model->total_rows($q);
        $admin_kegiatan = $this->Kegiatan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'admin_kegiatan_data' => $admin_kegiatan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->Ui->admin('kegiatan/v_kegiatan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Kegiatan_model->get_by_id($id);
        if ($row) {
            $data = array(
                    'kegiatan_id' => $row->kegiatan_id,
                    'kegiatan_gambar' => $row->kegiatan_gambar,
                    'kegiatan_deskripsi' => $row->kegiatan_deskripsi,
                    'kegiatan_waktu' => $row->kegiatan_waktu,
                    'admin_username' => $row->admin_username,
                );
            $this->Ui->admin('kegiatan/v_kegiatan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin_kegiatan'));
        }
    }

    public function tambah() 
    {
        $kategori_kegiatan = $this->db->get('kategori_kegiatan')->result_object();
        $kategori_list = array('' => '- Pilih -');
        foreach ($kategori_kegiatan as $kategori) {
            $kategori_list[$kategori->kategori_kegiatan_id] = $kategori->kategori_kegiatan_nama;
        }
        $data = array(
            'button'             => 'Tambah',
            'action'             => '',
            'kegiatan_judul'     => set_value('kegiatan_judul'),
            'kegiatan_deskripsi' => set_value('kegiatan_deskripsi'),
            'kegiatan_waktu'     => set_value('kegiatan_waktu'),
            'kategori_kegiatan_select'     => set_value('kategori_kegiatan_id'),
            'kategori_kegiatan_list' => $kategori_list,
            'add_js'             => array(
                                    'dist/backend/plugins/momentjs/moment.js',
                                    'dist/backend/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js',
                                    'dist/backend/js/datetimepicker.js'
                                ),
            'add_css'            => array(
                                 'dist/backend/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css'
                                )
        );
        $this->Kegiatan_model->insert($data);
        $this->Ui->admin('kegiatan/v_kegiatan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kegiatan_gambar' => $this->input->post('kegiatan_gambar',TRUE),
		'kegiatan_deskripsi' => $this->input->post('kegiatan_deskripsi',TRUE),
		'kegiatan_waktu' => $this->input->post('kegiatan_waktu',TRUE),
		'admin_username' => $this->input->post('admin_username',TRUE),
	    );

            $this->Kegiatan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin_kegiatan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Kegiatan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('admin_kegiatan/update_action'),
		'kegiatan_id' => set_value('kegiatan_id', $row->kegiatan_id),
		'kegiatan_gambar' => set_value('kegiatan_gambar', $row->kegiatan_gambar),
		'kegiatan_deskripsi' => set_value('kegiatan_deskripsi', $row->kegiatan_deskripsi),
		'kegiatan_waktu' => set_value('kegiatan_waktu', $row->kegiatan_waktu),
		'admin_username' => set_value('admin_username', $row->admin_username),
	    );
            $this->load->view('admin_kegiatan/kegiatan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin_kegiatan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kegiatan_id', TRUE));
        } else {
            $data = array(
		'kegiatan_gambar' => $this->input->post('kegiatan_gambar',TRUE),
		'kegiatan_deskripsi' => $this->input->post('kegiatan_deskripsi',TRUE),
		'kegiatan_waktu' => $this->input->post('kegiatan_waktu',TRUE),
		'admin_username' => $this->input->post('admin_username',TRUE),
	    );

            $this->Kegiatan_model->update($this->input->post('kegiatan_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin_kegiatan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Kegiatan_model->get_by_id($id);

        if ($row) {
            $this->Kegiatan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin_kegiatan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin_kegiatan'));
        }
    }

}

/* End of file Admin_kegiatan.php */
/* Location: ./application/controllers/Admin_kegiatan.php */