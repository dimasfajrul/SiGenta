<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewUpdate extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		cek_session();
	}

	public function index()
	{
		$data = array();

		//Flashdata
		if ($this->session->userdata('success_msg')) {
			$data['success_msg'] = $this->session->userdata('success_msg');
			$this->session->unset_userdata('success_msg');
		}
		if ($this->session->userdata('error_msg')) {
			$data['error_msg'] = $this->session->userdata('error_msg');
			$this->session->unset_userdata('error_msg');
		}

		$this->load->view('newupdate/new_update', $data);
	}

    public function tambah()
    {
        $this->load->view('newupdate/tambah');
    }
    
    public function edit()
    {
        $this->load->view('newupdate/edit');
    }
}
