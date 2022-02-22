<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumentasi extends CI_Controller {

	public function index()
	{
		$this->load->view('dokumentasi/berkas_dokumentasi');
	}
	
    public function tambah()
	{
		$this->load->view('dokumentasi/tambah');
	}
    
    public function edit()
	{
		$this->load->view('dokumentasi/edit');
	}
}
