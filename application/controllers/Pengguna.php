<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->utama->login();
		$this->load->model('M_crud');
		$this->utama->aksesAdmin();
		$this->setting();
	}

	public function setting() {
		$this->M_crud->table = 'pengguna';
		$this->M_crud->pk = 'username';
	}

	public function index() {
		$data['title'] = "Halaman Pengguna";
		$data['query'] = $this->M_crud->getdata(); 

		$this->load->view('pengguna/view',$data);
	}

	public function tambah() {
		$data['title'] = "Halaman Tambah Pengguna";
		$data['level'] = $this->M_crud->getdatalevel();
 
		if($this->input->post('submit')) {
			$record = [
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'nama' => $this->input->post('nama'),
				'jenisKelamin' => $this->input->post('jenisKelamin'),
				'level' => $this->input->post('level')
			];
			$this->M_crud->tambah($record);
			redirect(base_url('pengguna'));
		} else {
			$this->load->view('pengguna/tambah', $data);
		}
	}

	public function edit() {
		$data['title'] = "Halama Edit";
		$data['level'] = $this->M_crud->getdatalevel();

		if($this->uri->segment(3) == null) {
			redirect(base_url('pengguna'));
		} else {
			$id = $this->uri->segment(3);
		}

		$data['query'] = $this->M_crud->getdatabyid($id);

		if($this->input->post('submit') <> null){
			$password = $this->input->post('password');
			if($password == null) {
				$record = [
				'nama' => $this->input->post('nama'),
				'jenisKelamin' => $this->input->post('jenisKelamin'),
				'level' => $this->input->post('level')
					];
			} else {
				$record = [
				'password' => md5($this->input->post('password')),
				'nama' => $this->input->post('nama'),
				'jenisKelamin' => $this->input->post('jenisKelamin'),
				'level' => $this->input->post('level')
				];
			}
			$this->M_crud->edit($id, $record);
			redirect(base_url('pengguna'));
		} else {
			$this->load->view('pengguna/edit', $data);
		}

	}

	public function hapus() {
		if($this->uri->segment(3) == null) {
			redirect(base_url('pengguna'));
		} else {
			$id = $this->uri->segment(3);
		}

		$this->M_crud->hapus($id);
		redirect(base_url('pengguna'));
	}

	public function print() {
		$data['title'] = "Halaman Print";
		$data['query'] = $this->M_crud->getdata();
		$this->load->view('pengguna/print', $data);
	}


	
}