<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    public function list($limit, $start = 0, $q = NULL) {
        $this->db->order_by('berita_id','desc');
        $this->db->like('berita_judul',$q);
        $this->db->or_like('berita_deskripsi',$q);
        $this->db->limit($limit,$start);
        return $this->db->get('v_berita_list');
    }

    
    public function list_by_kategori($limit, $start = 0, $kategori_id = NULL) {
        $this->db->order_by('berita_id','desc');
        $this->db->limit($limit,$start);
        $this->db->having('kategori_list LIKE ','% '.$kategori_id.',%');
        return $this->db->get('v_berita_list');
    }

    public function listById($berita_id) {
        return $this->db->get_where('berita', array('berita_id' => $berita_id));
    }

    public function post($berita_id) {
        return $this->db->get_where('v_berita_list', array('berita_id' => $berita_id));
    }
    
    public function selectKategori($berita_id) {
        $result = $this->db->get_where('berita_kategori', array('berita_id' => $berita_id))->result_object();
        $list = array();
        foreach ($result as $key => $row) {
            $list[$row->kategori_id] = $row->kategori_id;
        }
        return $list;
    }

    private function validasi() {
        $this->form_validation->set_rules('berita_judul','Judul', 'required');
        $this->form_validation->set_rules('berita_deskripsi','Deskripsi', 'required');
        return $this->form_validation->run();
    }
    
    public function insert() {
        if ($this->validasi() == TRUE){
            $input = $this->input->post();
            $data = array(
                'berita_judul' => $input['berita_judul'],
                'berita_deskripsi' => htmlspecialchars($input['berita_deskripsi']),
                'admin_username' => $this->session->username,
            );
            $this->db->insert('berita', $data);

            $this->insertKategori($this->db->insert_id());
            return TRUE;
        };
        return FALSE;
    }
    
    public function update($berita_id) {
        $this->validasi();
        if ($this->form_validation->run() == TRUE){
            $input = $this->input->post();
            $data = array(
                'berita_judul' => $input['berita_judul'],
                'berita_deskripsi' => htmlspecialchars($input['berita_deskripsi']),
                'admin_username' => $this->session->username,
            );
            $this->db->where('berita_id', $berita_id);
            $this->db->update('berita', $data);

            $this->db->where('berita_id', $berita_id);
            $this->db->delete('berita_kategori');

            $this->insertKategori($berita_id);
            return TRUE;
        };
        return FALSE;
    }

    private function insertKategori($berita_id) {
        $data_kategori = array('berita_id' => $berita_id);            
        $insert_batch = array();
        $kategori = $this->input->post('kategori');
        if (count($kategori) > 0) {
            foreach ($kategori as $value) {
                $data_kategori['kategori_id'] = $value;
                $insert_batch[] = $data_kategori;
            }
            $this->db->insert_batch('berita_kategori',$insert_batch);
        } else {
            $data_kategori['kategori_id'] = 1;
            $this->db->insert('berita_kategori',$data_kategori);
        }
    }

    public function delete($berita_id) {
        $this->db->where('berita_id',$berita_id);
        $this->db->delete(array('berita','berita_kategori'));
    }

    public function datatables() {
        $this->Datatables_model->column_search('berita_judul');
        $this->db->where('admin_username',$this->session->username);
        $this->db->order_by('berita_id','desc');
        $list = $this->Datatables_model->get_datatables('v_berita_list');
        $data = array();
        $no = $this->input->post('start');
        
        foreach ($list as $key => $row) {
            $no++;
            $json = json_decode($row->kategori_list);
            $data[$key][0] = $row->berita_judul.' <span class="kategori-list">';
            foreach ($json as $i => $rowjson) {
                $data[$key][0] .= ($i != 0 ? ', ' : NULL) . anchor($rowjson->kategori_id,$rowjson->kategori_nama);
            }
            $data[$key][0] .= '</span><div class="link">'.anchor('admin_berita/edit?id='.$row->berita_id,'Edit').' | '.anchor('admin_berita/detail/'.$row->berita_id,'Lihat').' | '.anchor('admin_berita/hapus/'.$row->berita_id,'Hapus','class="delete-confirm"').'</div>';
            $data[$key][1] = $row->admin_nama; 
            $data[$key][2] = mdate('%d/%m/%Y', strtotime($row->berita_tanggal));
        }
        
        $this->db->where('admin_username',$this->session->username); 
        $total = $this->Datatables_model->count_all();

        $this->db->where('admin_username',$this->session->username); 
        $filter = $this->Datatables_model->count_filtered();

        $output = array(
            "draw" => $this->input->post('draw'),
            "recordsTotal" => $total,
            "recordsFiltered" => $filter,
            "data" => $data
        );
        return $output;
    }
    
    public function total_rows($q = NULL) {
        $this->db->like('berita_judul',$q);
        $this->db->or_like('berita_deskripsi',$q);
        $this->db->from('v_berita_list');
        return $this->db->count_all_results();
    }
    
    public function kategori_total_rows($kategori_id = NULL) {
        $this->db->having('kategori_list LIKE ','% '.$kategori_id.',%');
        return count($this->db->get('v_berita_list')->result_object());
    }
}

/* End of file Berita_model.php */

