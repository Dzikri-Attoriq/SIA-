<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_crud');
		$this->setting();
		$this->utama->login();
	}

	public function setting() {
		$this->M_crud->table = 'tbl_jurusan';
		$this->M_crud->pk = 'kd_jurusan';
	}


	// ke view index
	public function index() {
		//bisa nulis array begini 
		// $data = [
		// 	"title" => "Halaman Utama"
		// ];

		$data['title'] = "Halaman Jurusan";
		$data['query'] = $this->M_crud->getdata();
		$this->load->view('jurusan/view',$data);
	}


	public function tambah() {
		$data['title'] = "Halaman Tambah";
		if($this->input->post('submit') <> null) {
			$record = [
				'kd_jurusan' => $this->input->post('kd_jurusan'),
				'jurusan' => $this->input->post('jurusan')
			];
			$this->M_crud->tambah($record);
			redirect(base_url('jurusan'));
		} else {
			$this->load->view('jurusan/tambah',$data);
		}
	}


	public function edit() {
		$data['title'] = "Halaman Edit";
		if($this->uri->segment(3) == null) {
			redirect(base_url('jurusan'));
		} else {
			$id = $this->uri->segment(3);
		}

		$data['query'] = $this->M_crud->getdatabyid($id);

		if($this->input->post('submit') <> null) {
			$record = [
				'jurusan' => $this->input->post('jurusan')
			];
			$this->M_crud->edit($id,$record);
			redirect(base_url('jurusan'));
		} else {
			$this->load->view('jurusan/edit',$data);
		}
	}


	public function hapus() {
		if($this->uri->segment(3) == null) {
			redirect(base_url('jurusan'));
		} else {
			$id = $this->uri->segment(3);
		}

		$this->M_crud->hapus($id);
		redirect(base_url('jurusan'));
	}


	public function print() {
		$data['title'] = "Halaman Print";
		$data['query'] = $this->M_crud->getdata();
		$this->load->view('jurusan/print',$data);
	}


}