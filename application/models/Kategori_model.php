<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {
    public function list($remove_list_id = NULL) {
        $this->db->order_by('kategori_id','desc');
        if ($remove_list_id != NULL) {
            return $this->db->get_where('kategori', array('kategori_id !=' => $remove_list_id));
        }
        return $this->db->get('kategori');
    }

    public function listById($kategori_id) {
        return $this->db->get_where('kategori', array('kategori_id' => $kategori_id));
    }

    public function list_counter() {
        $this->db->order_by('IF(kategori_id = 1,1,0) ASC, kategori_nama ASC');
        return $this->db->get('v_kategori_counter');
    }

    public function tambah() {
        $this->form_validation->set_rules('kategori_nama', 'Kategori', 'required|is_unique[kategori.kategori_nama]|max_length[30]',array('required' => '%s tidak boleh kosong!', 'is_unique' => '%s telah digunakan!','max_length' => '%s tidak boleh lebih dari %s karakter'));
        if ($this->form_validation->run() == FALSE) {
        } else {
            $this->db->insert('kategori',$this->input->post());
            return array('status' => 'success','text' => (object) array('kategori_nama' => $this->input->post('kategori_nama'), 'kategori_id' => $this->db->insert_id()));
        }
        return array('status' => 'error','text' => form_error('kategori_nama','',''));
    }

    public function update($kategori_id) {
        $data = $this->listByid($kategori_id)->result_object();
        $validasi = 'required|max_length[30]';
        if (strtolower($data[0]->kategori_nama) != strtolower($this->input->post('kategori_nama'))) {
            $validasi .='|is_unique[kategori.kategori_nama]'; 
        }

        $this->form_validation->set_rules('kategori_nama', 'Kategori', $validasi,array('required' => '%s tidak boleh kosong!', 'is_unique' => '%s telah digunakan!','max_length' => '%s tidak boleh lebih dari %s karakter'));
        if ($this->form_validation->run() == FALSE) {
        } else {
            $this->db->where('kategori_id',$kategori_id);
            $this->db->update('kategori',$this->input->post());
            return TRUE;
        }
        return FALSE;
    }

    public function delete($kategori_id) {
        $this->db->where('kategori_id',$kategori_id);
        $this->db->delete(array('kategori','berita_kategori'));
    }
}

/* End of file Kategori_model.php */
