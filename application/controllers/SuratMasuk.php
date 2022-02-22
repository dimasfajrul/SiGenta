<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SuratMasuk extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('SMasukModel');
		$this->load->library('form_validation');
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

		$data['surat'] = $this->SMasukModel->read();
		$this->load->view('suratmasuk/surat_masuk', $data);
	}
	
    public function tambah()
	{
		$this->form_validation->set_rules('tanggal', 'Tanggal Surat', 'required');
		$this->form_validation->set_rules('asal', 'Asal Surat', 'required|trim');
		$this->form_validation->set_rules('link', 'Link Berkas', 'required|trim|max_length[255]');

		if ($this->form_validation->run() == false) {
			$this->load->view('suratmasuk/tambah');
		} else {
			$dataPost = array(
				'id'			=> '',
				'tanggal'		=> $this->input->post('tanggal'),
				'asal_surat'	=> $this->input->post('asal'),
				'link'			=> $this->input->post('link'),
				'created_at'	=> date('Y-m-d H:i:s'),
				'updated_at'	=> date('Y-m-d H:i:s')
			);
			if ($this->SMasukModel->create($dataPost)) {
				$this->session->set_flashdata(
					'success_msg',
					'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Selamat!</strong> Surat masuk berhasil ditambahkan!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('SuratMasuk');
			} else {
				$this->session->set_flashdata(
					'error_msg',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Maaf!</strong> Surat masuk gagal ditambahkan!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('SuratMasuk');
			}
		}
	}
    
    public function edit($id = null)
	{
		$this->form_validation->set_rules('tanggal', 'Tanggal Surat', 'required');
		$this->form_validation->set_rules('asal', 'Asal Surat', 'required|trim');
		$this->form_validation->set_rules('link', 'Link Berkas', 'required|trim|max_length[255]');

		if ($this->form_validation->run() == false) {
			$data['detail']	= $this->SMasukModel->detail($id);
			$this->load->view('suratmasuk/edit', $data);
		} else {
			$update = $this->SMasukModel->update(array(
				'id'			=> $this->input->post('id'),
				'tanggal'		=> $this->input->post('tanggal'),
				'asal_surat'	=> $this->input->post('asal'),
				'link'			=> $this->input->post('link'),
				'created_at'	=> $this->input->post('created_at'),
				'updated_at'	=> date('Y-m-d H:i:s')
			), $id);
			if ($update) {
				$this->session->set_flashdata(
					'success_msg',
					'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Selamat!</strong> Surat masuk berhasil diubah!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('SuratMasuk');
			} else {
				$this->session->set_flashdata(
					'error_msg',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Maaf!</strong> Surat masuk gagal diubah!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('SuratMasuk');
			}
		}
	}

	public function hapus($id)
	{
		$delete = $this->SMasukModel->delete($id);
		if ($delete) {
			$this->session->set_flashdata(
				'success_msg',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
				<span class="alert-icon"><i class="ni ni-like-2"></i></span>
				<span class="alert-text"><strong>Selamat!</strong> Data berhasil dihapus!</span>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>'
			);
			redirect('Keuangan');
		} else {
			$this->session->set_flashdata(
				'error_msg',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<span class="alert-icon"><i class="ni ni-like-2"></i></span>
				<span class="alert-text"><strong>Maaf!</strong> Data gagal dihapus!</span>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>'
			);
			redirect('Keuangan');
		}
	}
}
