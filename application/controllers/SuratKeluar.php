<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratKeluar extends CI_Controller {

	public function index()
	{
		$this->load->view('suratkeluar/surat_keluar');
	}
	
    public function tambah()
	{
		$this->load->view('suratkeluar/tambah');
	}
    
    public function edit()
	{
		$this->load->view('suratkeluar/edit');
	}
}
