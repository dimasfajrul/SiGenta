<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SKeluarModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function read()
    {
        return $this->db->get('data_suratkeluar')->result();
    }

    public function create($data = array())
    {
        return $this->db->insert('data_suratkeluar', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('data_suratkeluar', $data);
    }

    public function detail($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('data_suratkeluar')->result();
    }

    public function delete($id)
    {
        $this->db->where("id", $id);
        return $this->db->delete("data_suratkeluar");
    }
}
