<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Datatables_model extends CI_Model {
 
    private $table; //nama tabel dari database
    public $column_order = array(); //field yang ada di table user
    private $column_search = array(); //field yang diizin untuk pencarian 
 
    function __construct()
    {
        parent::__construct();
        $this->post = (object) $this->input->post();
    }
 
    private function _get_datatables_query()
    {    
        $this->db->from($this->table);

        $index = 0;     
        foreach ($this->column_search as $key => $item) // looping awal
        {
            if($this->post->search['value']) // jika datatable mengirimkan pencarian dengan metode POST
            { 
                if($index===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $index) 
                $this->db->group_end(); 
            }
            $index++;
        }
    }

    public function column_search($column) {
        if (is_array($column)) {
            $this->column_search = $column;
        } else {
            $this->column_search = array($column);
        }
    }

    public function get_datatables($table)
    {
        $this->table = $table;
        $this->_get_datatables_query();
        
        if($this->post->length != -1)
            $this->db->limit($this->post->length, $this->post->start);
            
        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
 
}