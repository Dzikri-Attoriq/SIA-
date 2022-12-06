<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->utama->login();
		$this->load->model('M_crud');
		$this->setting();
	}

	public function setting() {
		$this->M_crud->table = 'pengguna';
		$this->M_crud->pk = 'username';
	}

	public function index() {
		$data['title'] = "Halaman Profil";
		$id = $this->session->userdata('username');
		$data['query'] = $this->M_crud->getdatabyid($id);

		if($this->input->post('submit') <> null) {
			$password = $this->input->post('password');
			if($password == null) {
				$record = [
					'nama' => $this->input->post('nama'),
					'jenisKelamin' => $this->input->post('jenisKelamin')
				];
			} else {
				$record = [
					'password' => md5($this->input->post('password')),
					'nama' => $this->input->post('nama'),
					'jenisKelamin' => $this->input->post('jenisKelamin')
				];
			}

			$user_data = [
				'nama' => $this->input->post('nama'),
				'jenisKelamin' => $this->input->post('jenisKelamin')
			];

			$this->session->set_userdata($user_data);
			$this->M_crud->edit($id, $record);
			redirect(base_url('profil')); 


		} else {
			$this->load->view('profil/view',$data);
		}
	}
}