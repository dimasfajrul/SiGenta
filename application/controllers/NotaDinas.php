<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NotaDinas extends CI_Controller {

	public function index()
	{
		$this->load->view('notadinas/nota_dinas');
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
