<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_crud');
		$this->setting();
	}

	public function setting() {
		$this->M_crud->table = 'pengguna';
		$this->M_crud->pk = 'username';
	}

	public function index() {
		$data['title'] = "Halaman Login";

		if($this->input->post('submit') <> null) {
			$u = $this->input->post('username');
			$p = md5($this->input->post('password'));

			$cek = $this->M_crud->cek($u,$p);

			if($cek == 1) {
				// benar
				$query = $this->M_crud->getdatalogin($u,$p);
				$user_data = [
					'username' => $query['username'],
					'nama' => $query['nama'],
					'level' => $query['level'],
					'jenisKelamin' => $query['jenisKelamin'],
					'izin' => true
				];
				$this->session->set_userdata($user_data);
				redirect(base_url('home'));
			}else {
				// salah
				redirect(base_url('login'));
			}

		} else {
			$this->load->view('login/view', $data);
		}

	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

}