<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_crud');
		$this->utama->login();
		$this->setting();
	}

	public function setting() {
		$this->M_crud->table = 'mahasiswa';
		$this->M_crud->pk = 'nim';
	}


	// ke view index
	public function index() {
		$data['title'] = "Halaman Mahasiswa";
		$data['query'] = $this->M_crud->getdatamahasiswa();
		$this->load->view('mahasiswa/view',$data);
	}


	// ke tambah
	public function tambah() {
		$data['title'] = "Halaman Tambah";
		$data['jurusan'] = $this->M_crud->getdatajurusan();
		$data['agama'] = $this->M_crud->getdataagama();

		if($this->input->post('submit') <> null) {

			$config['upload_path'] = './assets/' ;
			$config['allowed_types'] = 'gif|png|jpeg|jpg|webp';
			$config['file_name'] = 'foto'.random_string('numeric',6);
			$config['max_size'] = 2024; // 2mb

			$this->load->library("upload",$config);

			if($this->upload->do_upload('foto')) {
				// $upload_data = $this->upload->data();
				// $foto = $upload_data['file_name'];
				$foto = $this->upload->data('file_name');

				$record = [
					'nim' => $this->input->post('nim'),
					'nama' => $this->input->post('nama'),
					'jenisKelamin' => $this->input->post('jenisKelamin'),
					'tempatLahir' => $this->input->post('tempatLahir'),
					'tanggalLahir' => $this->input->post('tanggalLahir'),
					'agama' => $this->input->post('agama'),
					'alamat' => $this->input->post('alamat'),
					'foto' => $foto,
					'kd_jurusan' => $this->input->post('kd_jurusan')
				];
				$this->M_crud->tambah($record);
				redirect(base_url('mahasiswa'));
			} else {
				// $this->load->view('mahasiswa/tambah',$data);
				redirect(base_url('jurusan'));
			}
		} else {
			$this->load->view('mahasiswa/tambah',$data);
		}
	}


	// ke edit
	public function edit() {
		$data['title'] = "Halaman Edit";

		if($this->uri->segment(3) == null) {
			redirect(base_url('mahasiswa'));
		} else {
			$id = $this->uri->segment(3);
		}

		$data['query'] = $this->M_crud->getdatabyid($id);
		$data['jurusan'] = $this->M_crud->getdatajurusan();
		$data['agama'] = $this->M_crud->getdataagama();

		if($this->input->post('submit') <> null) {

			$config['upload_path'] = './assets/';
			$config['allowed_types'] = 'gif|png|jpeg|jpg|webp';
			$config['file_name'] = 'foto'.random_string('numeric',6);
			$config['max_size'] = 2024; // 2mb

			$this->load->library('upload',$config);

				if($_FILES['foto']['name'] == "") {
					$record = [
						'nama' => $this->input->post('nama'),
						'jenisKelamin' => $this->input->post('jenisKelamin'),
						'tempatLahir' => $this->input->post('tempatLahir'),
						'tanggalLahir' => $this->input->post('tanggalLahir'),
						'agama' => $this->input->post('agama'),
						'alamat' => $this->input->post('alamat'),
						'kd_jurusan' => $this->input->post('kd_jurusan')
					];
					$this->M_crud->edit($id,$record);
					redirect(base_url('mahasiswa'));
				} else {
					if($this->upload->do_upload('foto')) {
						// $upload_data = $this->upload->data();
						// $foto = $upload_data['file_name'];
						$foto = $this->upload->data('file_name');

						$record = [
							'nama' => $this->input->post('nama'),
							'jenisKelamin' => $this->input->post('jenisKelamin'),
							'tempatLahir' => $this->input->post('tempatLahir'),
							'tanggalLahir' => $this->input->post('tanggalLahir'),
							'agama' => $this->input->post('agama'),
							'alamat' => $this->input->post('alamat'),
							'foto' => $foto,
							'kd_jurusan' => $this->input->post('kd_jurusan')
						];
						$this->M_crud->edit($id,$record);
						redirect(base_url('mahasiswa'));
					} else {
						$this->load->view('mahasiswa/edit',$data);
					}
				}

		} else {
			$this->load->view('mahasiswa/edit',$data);
		}
	}


	// ke hapus
	public function hapus() {
		if($this->uri->segment(3) == null) {
			redirect(base_url('mahasiswa'));
		} else {
			$id = $this->uri->segment(3);
		}

		$this->M_crud->hapus($id);
		redirect(base_url('mahasiswa'));
	}


	// ke print
	public function print() {
		$data['title'] = "Halaman Print";
		$data['query'] = $this->M_crud->getdata();
		$this->load->view('mahasiswa/print',$data);
	}


}