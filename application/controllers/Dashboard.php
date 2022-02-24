<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('BeritaModel');
		$this->load->model('DashboardModel');
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

		$data['isu']     		= $this->DashboardModel->data_isu();
        $data['suratkeluar']    = $this->DashboardModel->data_suratkeluar();
        $data['suratmasuk'] 	= $this->DashboardModel->data_suratmasuk();
        $data['notadinas']      = $this->DashboardModel->data_notadinas();
		$data['berita'] 		= $this->BeritaModel->read();

		$this->load->view('dashboard', $data);
	}
}
