<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dokumentasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('DokModel');
		$this->load->library('form_validation');
		cek_session();
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

		$data['dok'] = $this->DokModel->read();
		$this->load->view('dokumentasi/berkas_dokumentasi', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isu', 'Isu', 'required');
		$this->form_validation->set_rules('kegiatan', 'Kegiatan', 'required|trim');
		$this->form_validation->set_rules('link', 'Link Berkas', 'required|trim|max_length[255]');

		if ($this->form_validation->run() == false) {
			$this->load->view('dokumentasi/tambah');
		} else {
			$dataPost = array(
				'id'			=> '',
				'judul'			=> $this->input->post('judul'),
				'kegiatan'		=> $this->input->post('kegiatan'),
				'link'			=> $this->input->post('link'),
				'isu'			=> $this->input->post('isu'),
				'created_at'	=> date('Y-m-d H:i:s'),
				'updated_at'	=> date('Y-m-d H:i:s')
			);
			if ($this->DokModel->create($dataPost)) {
				$this->session->set_flashdata(
					'success_msg',
					'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Selamat!</strong> Dokumentasi berhasil ditambahkan!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('Dokumentasi');
			} else {
				$this->session->set_flashdata(
					'error_msg',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Maaf!</strong> Dokumentasi gagal ditambahkan!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('Dokumentasi');
			}
		}
	}

	public function edit($id = null)
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isu', 'isu', 'required');
		$this->form_validation->set_rules('kegiatan', 'Kegiatan', 'required|trim');
		$this->form_validation->set_rules('link', 'Link Berkas', 'required|trim|max_length[255]');

		if ($this->form_validation->run() == false) {
			$data['detail']	= $this->DokModel->detail($id);
			$this->load->view('dokumentasi/edit', $data);
		} else {
			$update = $this->DokModel->update(array(
				'id'			=> $this->input->post('id'),
				'judul'			=> $this->input->post('judul'),
				'kegiatan'		=> $this->input->post('kegiatan'),
				'link'			=> $this->input->post('link'),
				'isu'			=> $this->input->post('isu'),
				'created_at'	=> $this->input->post('created_at'),
				'updated_at'	=> date('Y-m-d H:i:s')
			), $id);
			if ($update) {
				$this->session->set_flashdata(
					'success_msg',
					'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Selamat!</strong> Dokumentasi berhasil diubah!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('Dokumentasi');
			} else {
				$this->session->set_flashdata(
					'error_msg',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Maaf!</strong> Dokumentasi gagal diubah!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('Dokumentasi');
			}
		}
	}

	public function hapus($id)
	{
		$delete = $this->DokModel->delete($id);
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
			redirect('Dokumentasi');
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
			redirect('Dokumentasi');
		}
	}
}
