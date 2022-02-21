<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataIsu extends CI_Controller {

	public function index()
	{
		$this->load->view('dataTiapIsu/data_isu');
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
