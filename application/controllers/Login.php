<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
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

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

		if ($this->form_validation->run() == false) {
			$this->load->view('login/login', $data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->db->get_where('data_user', ['email' => $email])->row_array();

		if ($user) {
			if ($user['status'] == 1) {
				if (password_verify($password, $user['password'])) {
					$data = [
						'nama'			=> $user['nama'],
						'email'			=> $user['email'],
						'password'		=> $user['password'],
						'status' 		=> $user['status']
					];
					$this->session->set_userdata($data);
					$this->session->set_flashdata(
						'success_msg',
						'<div class="alert alert-success alert-dismissible fade show" role="alert">
						<span class="alert-icon"><i class="ni ni-like-2"></i></span>
						<span class="alert-text"><strong>Selamat datang!</strong> ' . $this->session->userdata('nama') . '!</span>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>'
					);
					redirect('Dashboard');
				} else {
					$this->session->set_flashdata(
						'error_msg',
						'<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<span class="alert-icon"><i class="ni ni-like-2"></i></span>
						<span class="alert-text"><strong>Login gagal!</strong> Pastikan anda memasukkan email dan password dengan benar!</span>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>'
					);
					redirect('Login');
				}
			} else {
				$this->session->set_flashdata(
					'error_msg',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text"><strong>Akun telah ditangguhkan!</strong> Hubungi admin untuk informasi lebih lanjut!</span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('Login');
			}
		} else {
			$this->session->set_flashdata(
				'error_msg',
				'<div class="alert alert-danger alert-dismissible text-left fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-fat-remove"></i></span>
					<span class="alert-text"><strong>Akun belum terdaftar!</strong> Pastikan anda memiliki akun yang aktif serta terdaftar!</span>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
			);
			redirect('Login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('status');
		$this->session->set_flashdata(
			'success_msg',
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
				<span class="alert-icon"><i class="ni ni-like-2"></i></span>
				<span class="alert-text"><strong>Anda berhasil keluar!</strong> Silahkan masuk kembali untuk melanjutkan!</span>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>'
		);
		redirect('Login');
	}
}
