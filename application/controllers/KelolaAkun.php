<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KelolaAkun extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('AkunModel');
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

		$data['user'] = $this->AkunModel->read();
		$this->load->view('kelolaakun/kelola_akun', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[data_user.email]');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|max_length[100]');
		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|matches[password1]');

		if ($this->form_validation->run() == false) {
			$this->load->view('kelolaakun/tambah');
		} else {
			$dataPost = array(
				'id'			=> '',
				'nama'			=> $this->input->post('nama'),
				'email'			=> $this->input->post('email'),
				'password'		=> password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'status'		=> 1,
				'role'			=> $this->input->post('role'),
				'created_at'	=> date('Y-m-d H:i:s'),
				'updated_at'	=> date('Y-m-d H:i:s')
			);
			if ($this->AkunModel->create($dataPost)) {
				$this->session->set_flashdata(
					'success_msg',
					'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Selamat!</strong> Akun berhasil ditambahkan!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('KelolaAkun');
			} else {
				$this->session->set_flashdata(
					'error_msg',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Maaf!</strong> Akun gagal ditambahkan!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('KelolaAkun');
			}
		}
	}

	public function detail($id)
	{
		$data['user'] = $this->AkunModel->detail($id);

		if (isset($_POST['aktif'])) {
			$this->AkunModel->active($id);
			$this->session->set_flashdata(
				'success_msg',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
				<span class="alert-icon"><i class="ni ni-like-2"></i></span>
				<span class="alert-text"><strong>Selamat!</strong> Akun berhasil diaktifkan!</span>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>'
			);
			redirect('KelolaAkun');
		} elseif (isset($_POST['mati'])) {
			$this->AkunModel->nonActive($id);
			$this->session->set_flashdata(
				'success_msg',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<span class="alert-icon"><i class="ni ni-like-2"></i></span>
				<span class="alert-text"><strong>Selamat!</strong> Akun berhasil ditangguhkan!</span>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>'
			);
			redirect('KelolaAkun');
		}
		$this->load->view('kelolaakun/detail', $data);
	}

	public function profile()
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

		$data['user']	= $this->db->get_where('data_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('kelolaakun/profil', $data);
	}

	public function upProfile()
	{
		$data['profil'] = $this->AkunModel->read();
		$data['user']	= $this->db->get_where('data_user', ['email' => $this->session->userdata('email')])->row_array();
		$email = $this->session->userdata('email');
		// $data['edit'] = $this->AkunModel->update();
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim|max_length[100]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == false) {
			$this->load->view('kelolaakun/editprofil', $data);
		} else {
			$update = array(
				'nama'			=> $this->input->post('nama'),
				'email'			=> $this->input->post('email'),
				'status'		=> $this->input->post('status'),
				'role'			=> $this->input->post('role'),
				'created_at'	=> $this->input->post('created_at'),
				'updated_at'	=> date('Y-m-d H:i:s')
			);
			$this->db->set($update);
			$this->db->where('email', $email);
			$this->db->update('data_user');

			$this->session->set_flashdata(
				'success_msg',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
				<span class="alert-icon"><i class="ni ni-like-2"></i></span>
				<span class="alert-text"><strong>Selamat!</strong> Akun berhasil diperbaharui!</span>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>'
			);
			redirect('KelolaAkun/profile');
		}
	}

	public function upPass()
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

		$data['user']	= $this->db->get_where('data_user', ['email' => $this->session->userdata('email')])->row_array();
		$email = $this->session->userdata('email');

		$this->form_validation->set_rules('pwlama', 'Password Lama', 'required|trim|min_length[6]');
		$this->form_validation->set_rules('pwbaru', 'Password Baru', 'required|trim|min_length[6]|max_length[100]');
		$this->form_validation->set_rules('konfirpwbaru', 'Konfirmasi Password', 'required|matches[pwbaru]');

		if ($this->form_validation->run() == false) {
			$this->load->view('kelolaakun/editpw', $data);
		} else {
			$pwLama = $this->input->post(htmlspecialchars('pwlama'));
			$pwbaru = $this->input->post(htmlspecialchars('pwbaru'));

			if (!password_verify($pwLama, $data['user']['password'])) {
				$this->session->set_flashdata(
					'error_msg',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Gagal!</strong> Password lama tidak sesuai!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('KelolaAkun/upPass');
			} else {
				$cekpw = password_hash($pwbaru, PASSWORD_DEFAULT);
				$this->AkunModel->updatePw($cekpw, $email);
				$this->session->set_flashdata(
					'success_msg',
					'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Selamat!</strong> Password berhasil diperbaharui!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('KelolaAkun/profile');
			}
		}
	}
}
