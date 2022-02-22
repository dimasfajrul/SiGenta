<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaAkun extends CI_Controller {

	public function index()
	{
		$this->load->view('kelolaakun/kelola_akun');
	}
	
    public function tambah()
	{
		$this->load->view('kelolaakun/tambah');
	}
    
    public function detail()
	{
		$this->load->view('kelolaakun/detail');
	}
}
