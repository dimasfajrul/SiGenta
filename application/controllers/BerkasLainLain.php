<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerkasLainLain extends CI_Controller {

	public function index()
	{
		$this->load->view('berkaslainlain/berkas_lainlain');
	}
	
    public function tambah()
	{
		$this->load->view('berkaslainlain/tambah');
	}
    
    public function edit()
	{
		$this->load->view('berkaslainlain/edit');
	}
}
