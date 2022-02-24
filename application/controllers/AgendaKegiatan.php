<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AgendaKegiatan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('AgendaModel');
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

		$data['agenda'] = $this->AgendaModel->read();
		$this->load->view('agendakegiatan/agenda_kegiatan', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('agenda', 'Agenda', 'required|trim');
		$this->form_validation->set_rules('waktu', 'Waktu', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('icon', 'Jenis Kegiatan', 'required');
		$this->form_validation->set_rules('tempat', 'Tempat Kegiatan', 'required|trim');
		$this->form_validation->set_rules('link', 'Link Meeting', 'trim|max_length[255]');

		if ($this->form_validation->run() == false) {
			$this->load->view('agendakegiatan/tambah');
		} else {
			$dataPost = array(
				'id'			=> '',
				'agenda'		=> $this->input->post('agenda'),
				'waktu'			=> $this->input->post('waktu'),
				'tanggal'		=> $this->input->post('tanggal'),
				'icon'			=> $this->input->post('icon'),
				'tempat'		=> $this->input->post('tempat'),
				'link'			=> $this->input->post('link'),
				'status'		=> 1,
				'created_at'	=> date('Y-m-d H:i:s'),
				'updated_at'	=> date('Y-m-d H:i:s')
			);
			if ($this->AgendaModel->create($dataPost)) {
				$this->session->set_flashdata(
					'success_msg',
					'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Selamat!</strong> Agenda berhasil ditambahkan!</span>
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
					<span class="alert-text"><strong>Maaf!</strong> Agenda gagal ditambahkan!</span>
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
		$this->form_validation->set_rules('agenda', 'Agenda', 'required|trim');
		$this->form_validation->set_rules('waktu', 'Waktu', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('icon', 'Jenis Kegiatan', 'required');
		$this->form_validation->set_rules('tempat', 'Tempat Kegiatan', 'required|trim');
		$this->form_validation->set_rules('link', 'Link Meeting', 'trim|max_length[255]');

		if ($this->form_validation->run() == false) {
			$data['detail']	= $this->AgendaModel->detail($id);
			$this->load->view('agendakegiatan/edit', $data);
		} else {
			$update = $this->AgendaModel->update(array(
				'id'			=> $this->input->post('id'),
				'agenda'		=> $this->input->post('agenda'),
				'waktu'			=> $this->input->post('waktu'),
				'tanggal'		=> $this->input->post('tanggal'),
				'icon'			=> $this->input->post('icon'),
				'tempat'		=> $this->input->post('tempat'),
				'link'			=> $this->input->post('link'),
				'status'		=> 1,
				'created_at'	=> $this->input->post('created_at'),
				'updated_at'	=> date('Y-m-d H:i:s')
			), $id);
			if ($update) {
				$this->session->set_flashdata(
					'success_msg',
					'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Selamat!</strong> Agenda berhasil diubah!</span>
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
					<span class="alert-text"><strong>Maaf!</strong> Agenda gagal diubah!</span>
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
		$delete = $this->AgendaModel->delete($id);
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
