<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AgendaKegiatan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('EtcModel');
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

		$data['dok'] = $this->EtcModel->read();
		$this->load->view('agendakegiatan/agenda_kegiatan', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');
		$this->form_validation->set_rules('link', 'Link Berkas', 'required|trim|max_length[255]');

		if ($this->form_validation->run() == false) {
			$this->load->view('agendakegiatan/tambah');
		} else {
			$dataPost = array(
				'id'			=> '',
				'judul'			=> $this->input->post('judul'),
				'keterangan'	=> $this->input->post('keterangan'),
				'link'			=> $this->input->post('link'),
				'created_at'	=> date('Y-m-d H:i:s'),
				'updated_at'	=> date('Y-m-d H:i:s')
			);
			if ($this->EtcModel->create($dataPost)) {
				$this->session->set_flashdata(
					'success_msg',
					'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Selamat!</strong> Berkas berhasil ditambahkan!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('AgendaKegiatan');
			} else {
				$this->session->set_flashdata(
					'error_msg',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Maaf!</strong> Berkas gagal ditambahkan!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('AgendaKegiatan');
			}
		}
	}

	public function edit($id = null)
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');
		$this->form_validation->set_rules('link', 'Link Berkas', 'required|trim|max_length[255]');

		if ($this->form_validation->run() == false) {
			$data['detail']	= $this->EtcModel->detail($id);
			$this->load->view('agendakegiatan/edit', $data);
		} else {
			$update = $this->EtcModel->update(array(
				'id'			=> $this->input->post('id'),
				'judul'			=> $this->input->post('judul'),
				'keterangan'	=> $this->input->post('keterangan'),
				'link'			=> $this->input->post('link'),
				'created_at'	=> $this->input->post('created_at'),
				'updated_at'	=> date('Y-m-d H:i:s')
			), $id);
			if ($update) {
				$this->session->set_flashdata(
					'success_msg',
					'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Selamat!</strong> Berkas berhasil diubah!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('AgendaKegiatan');
			} else {
				$this->session->set_flashdata(
					'error_msg',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Maaf!</strong> Berkas gagal diubah!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('AgendaKegiatan');
			}
		}
	}

	public function hapus($id)
	{
		$delete = $this->EtcModel->delete($id);
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
			redirect('AgendaKegiatan');
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
			redirect('AgendaKegiatan');
		}
	}
}
