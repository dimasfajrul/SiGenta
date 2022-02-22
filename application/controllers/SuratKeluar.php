<?php
defined('BASEPATH') or exit('No direct script access allowed');
class SuratKeluar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('SKeluarModel');
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

		$data['surat'] = $this->SKeluarModel->read();
		$this->load->view('suratkeluar/surat_keluar', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('tanggal', 'Tanggal Surat', 'required');
		$this->form_validation->set_rules('perihal', 'Perihal', 'required|trim');
		$this->form_validation->set_rules('no', 'No Surat', 'required|trim');
		$this->form_validation->set_rules('link', 'Link Berkas', 'required|trim|max_length[255]');

		if ($this->form_validation->run() == false) {
			$this->load->view('suratkeluar/tambah');
		} else {
			$dataPost = array(
				'id'			=> '',
				'no_surat'		=> $this->input->post('no'),
				'perihal'		=> $this->input->post('perihal'),
				'tanggal'		=> $this->input->post('tanggal'),
				'link'			=> $this->input->post('link'),
				'created_at'	=> date('Y-m-d H:i:s'),
				'updated_at'	=> date('Y-m-d H:i:s')
			);
			if ($this->SKeluarModel->create($dataPost)) {
				$this->session->set_flashdata(
					'success_msg',
					'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Selamat!</strong> Surat keluar berhasil ditambahkan!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('SuratKeluar');
			} else {
				$this->session->set_flashdata(
					'error_msg',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Maaf!</strong> Surat keluar gagal ditambahkan!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('SuratKeluar');
			}
		}
	}

	public function edit($id = null)
	{
		$this->form_validation->set_rules('tanggal', 'Tanggal Surat', 'required');
		$this->form_validation->set_rules('perihal', 'Perihal', 'required|trim');
		$this->form_validation->set_rules('no', 'No Surat', 'required|trim');
		$this->form_validation->set_rules('link', 'Link Berkas', 'required|trim|max_length[255]');

		if ($this->form_validation->run() == false) {
			$data['detail']	= $this->SKeluarModel->detail($id);
			$this->load->view('suratkeluar/edit', $data);
		} else {
			$update = $this->SKeluarModel->update(array(
				'id'			=> $this->input->post('id'),
				'no_surat'		=> $this->input->post('no'),
				'perihal'		=> $this->input->post('perihal'),
				'tanggal'		=> $this->input->post('tanggal'),
				'link'			=> $this->input->post('link'),
				'created_at'	=> $this->input->post('created_at'),
				'updated_at'	=> date('Y-m-d H:i:s')
			), $id);
			if ($update) {
				$this->session->set_flashdata(
					'success_msg',
					'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Selamat!</strong> Surat keluar berhasil diubah!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('SuratKeluar');
			} else {
				$this->session->set_flashdata(
					'error_msg',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Maaf!</strong> Surat keluar gagal diubah!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('SuratKeluar');
			}
		}
	}

	public function hapus($id)
	{
		$delete = $this->SKeluarModel->delete($id);
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
			redirect('SuratKeluar');
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
			redirect('SuratKeluar');
		}
	}
}
