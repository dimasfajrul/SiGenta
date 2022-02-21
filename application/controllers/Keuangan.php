<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan extends CI_Controller {

	public function index()
	{
		$this->load->view('berkaskeuangan/berkas_keuangan');
	}
	
    public function tambah()
	{
		$this->load->view('dataTiapIsu/tambah');
	}
    
    public function edit()
	{
		$this->load->view('dataTiapIsu/edit');
	}
}
