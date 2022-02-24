<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AgendaModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function read()
    {
        return $this->db->get('data_agenda')->result();
    }
    
    public function sort()
    {
        return $this->db->query("SELECT * FROM data_agenda WHERE status = '1' ORDER BY tanggal DESC LIMIT 5")->result();
    }

    public function create($data = array())
    {
        return $this->db->insert('data_agenda', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('data_agenda', $data);
    }

    public function detail($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('data_agenda')->result();
    }

    public function delete($id)
    {
        $this->db->where("id", $id);
        return $this->db->delete("data_agenda");
    }
}
