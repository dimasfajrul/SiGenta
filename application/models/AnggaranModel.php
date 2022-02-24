<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AnggaranModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function read()
    {
        return $this->db->get('data_anggaran')->result();
    }

    public function create($data = array())
    {
        return $this->db->insert('data_anggaran', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('data_anggaran', $data);
    }

    public function detail($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('data_anggaran')->result();
    }

    public function delete($id)
    {
        $this->db->where("id", $id);
        return $this->db->delete("data_anggaran");
    }

    public function total()
    {
        $query = $this->db->get('data_anggaran');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
