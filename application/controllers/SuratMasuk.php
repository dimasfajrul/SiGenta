<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratMasuk extends CI_Controller {

	public function index()
	{
		$this->load->view('suratmasuk/surat_masuk');
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
