<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataIsu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('IsuModel');
		$this->load->library('form_validation');
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

		$cari1 = @$_POST['cari1'];
		// echo $cari1;
		// var_dump($cari1);
		if ($cari1 != null) {
			$data['search'] = $this->db->query("SELECT * FROM data_notadinas WHERE isu LIKE '%$cari1%'")->result_array();
			
		} else {
			$data['search'] = [];
		}

		$cari2 = @$_POST['cari2'];
		// echo $cari1;
		// var_dump($cari1);
		if ($cari2 != null) {
			$data['search2'] = $this->db->query("SELECT * FROM data_dokumentasi WHERE isu LIKE '%$cari2%'")->result_array();
			
		} else {
			$data['search2'] = [];
		}

		// json_encode($cari1);

		// $data['isu'] = $this->IsuModel->read();
		$this->load->view('dataTiapIsu/data_isu', $data);
	}
}
