<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login/halaman_login');
	}
	
    public function tambah()
	{
		$this->load->view('berkaskeuangan/tambah');
	}
    
    public function edit()
	{
		$this->load->view('dberkaskeuangan/edit');
	}
}
