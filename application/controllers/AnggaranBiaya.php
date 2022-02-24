<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AnggaranBiaya extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('AnggaranModel');
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

		$data['biaya'] = $this->AnggaranModel->read();
		$data['total'] = $this->AnggaranModel->total();
		$this->load->view('AnggaranBiaya/anggaran_biaya', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('tahun', 'Tahun', 'required|numeric');
		$this->form_validation->set_rules('nama', 'Anggaran', 'required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');

		if ($this->form_validation->run() == false) {
			$this->load->view('anggaranbiaya/tambah');
		} else {
			$dataPost = array(
				'id'			=> '',
				'tahun'			=> $this->input->post('tahun'),
				'nama'			=> $this->input->post('nama'),
				'jumlah'		=> $this->input->post('jumlah'),
				'created_at'	=> date('Y-m-d H:i:s'),
				'updated_at'	=> date('Y-m-d H:i:s')
			);
			if ($this->AnggaranModel->create($dataPost)) {
				$this->session->set_flashdata(
					'success_msg',
					'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Selamat!</strong> Anggaran berhasil ditambahkan!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('AnggaranBiaya');
			} else {
				$this->session->set_flashdata(
					'error_msg',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Maaf!</strong> Anggaran gagal ditambahkan!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('AnggaranBiaya');
			}
		}
	}

	public function edit($id = null)
	{
		$this->form_validation->set_rules('tahun', 'Tahun', 'required|numeric');
		$this->form_validation->set_rules('anggaran', 'Anggaran', 'required|numeric');
		$this->form_validation->set_rules('realisasi', 'Realisasi', 'required|numeric');
		$this->form_validation->set_rules('sisa', 'Sisa', 'required|numeric');

		if ($this->form_validation->run() == false) {
			$data['detail']	= $this->AnggaranModel->detail($id);
			$this->load->view('AnggaranBiaya/edit', $data);
		} else {
			$update = $this->AnggaranModel->update(array(
				'id'			=> $this->input->post('id'),
				'tahun'			=> $this->input->post('tahun'),
				'anggaran'		=> $this->input->post('anggaran'),
				'realisasi'		=> $this->input->post('realisasi'),
				'sisa'			=> $this->input->post('sisa'),
				'created_at'	=> $this->input->post('created_at'),
				'updated_at'	=> date('Y-m-d H:i:s')
			), $id);
			if ($update) {
				$this->session->set_flashdata(
					'success_msg',
					'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Selamat!</strong> Anggaran Highlight berhasil diubah!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('AnggaranBiaya');
			} else {
				$this->session->set_flashdata(
					'error_msg',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Maaf!</strong> Anggaran Highlight gagal diubah!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('AnggaranBiaya');
			}
		}
	}

	public function hapus($id)
	{
		$delete = $this->AnggaranModel->delete($id);
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
			redirect('AnggaranBiaya');
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
			redirect('AnggaranBiaya');
		}
	}
}
