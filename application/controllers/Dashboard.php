<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('PinModel');
		$this->load->model('BeritaModel');
		$this->load->model('DashboardModel');
		$this->load->model('AgendaModel');
		$this->load->model('AnggaranModel');
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

		$querydata = $this->db->query("SELECT * FROM data_anggaran")->result();
		//PIE 10 Kategori
		if ($querydata != null) {
			foreach ($querydata as $row) {
				$data['nama'][] = $row->nama;
				$data['jumlah'][] = (int) $row->jumlah;
			}
			$data['pie'] = json_encode($data);
		}

		$data['anggaran'] = $this->db->query("SELECT * FROM data_anggaran")->result();

		$data['keuangan']     	= $this->DashboardModel->data_keuangan();
        $data['suratkeluar']    = $this->DashboardModel->data_suratkeluar();
        $data['suratmasuk'] 	= $this->DashboardModel->data_suratmasuk();
        $data['notadinas']      = $this->DashboardModel->data_notadinas();
		$data['berita'] 		= $this->BeritaModel->read();
		$data['pin'] 			= $this->PinModel->read();
		$data['agenda'] 		= $this->AgendaModel->sort();

		$this->load->view('dashboard', $data);
	}
}
