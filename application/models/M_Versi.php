<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Versi extends CI_Model
{

    private $table = "master_versi";

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getTable()
    {
        return $this->db->get($this->table);
    }

    public function getTableWhere($id)
    {
        $this->db->where('id_versi', $id);
        return $this->db->get($this->table);
    }

    public function insertTable()
    {
        $data = [ 'nama_versi' => $this->input->post('nama_versi')];
        return $this->db->insert($this->table, $data);
    }

    public function updateTable($id)
    {
        $data = [ 'nama_versi' => $this->input->post('nama_versi')];
        $this->db->where('id_versi', $id);
        return $this->db->update($this->table, $data);
    }


    public function deleteTable($id)
    {
        $this->db->where('id_versi', $id);
        return $this->db->delete($this->table);
    }

    public function filter($search, $limit, $start, $order_field, $order_ascdesc)
    {
        $this->db->select('*');
        $this->db->from('master_versi');
        $this->db->like('nama_versi', $search);
        $this->db->limit($limit, $start);
        $getData = $this->db->get();
        return $getData->result();
    }

    public function count_all()
    {
        return $this->db->get($this->table)->num_rows();
    }

    public function count_filter($search)
    {
        $this->db->select('*');
        $this->db->from('master_versi');
        $this->db->like('nama_versi', $search);
        return $this->db->get()->num_rows();
    }
}

/* End of file M_Sticker.php */
/* Location: ./application/models/M_Sticker.php */
