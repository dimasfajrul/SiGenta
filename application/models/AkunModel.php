<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AkunModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function read()
    {
        return $this->db->get('data_user')->result();
    }

    public function create($data = array())
    {
        return $this->db->insert('data_user', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('data_user', $data);
    }

    public function detail($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('data_user')->result();
    }

    public function delete($id)
    {
        $this->db->where("id", $id);
        return $this->db->delete("data_user");
    }

    public function nonActive($id)
    {
        $this->db->where('id', $id);
        $this->db->update('data_user', ['status' => '0']);
    }

    public function active($id)
    {
        $this->db->where('id', $id);
        $this->db->update('data_user', ['status' => '1']);
    }

    public function updatePw($cekpw, $email)
    {
        $this->db->set('password', $cekpw);
        $this->db->where('email', $email);
        $this->db->update('data_user');
        return $this->db;
    }
}
