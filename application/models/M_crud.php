<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_model {

	// property buat database
	public $table = "";
	public $pk = "";


	public function cek($u,$p) {
		$this->db->where($this->pk,$u);
		$this->db->where('password',$p);

		$query = $this->db->get($this->table);
		return $query->num_rows();
	}

	public function getdatalogin($u,$p) {
		$this->db->where($this->pk,$u);
		$this->db->where('password',$p);

		$query = $this->db->get($this->table);
		return $query->row_array();
	}

	// dataLevel
	public function getdatalevel() {
		$query = $this->db->get('level');
		return $query->result_array();
	}

	// dataJurusan
	public function getdatajurusan() {
		$query = $this->db->get('jurusan');
		return $query->result_array();
	}


	// dataAgama
	public function getdataagama() {
		$query = $this->db->get('agama');
		return $query->result_array();
	}

	// table join
	public function getdatamahasiswa() {
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->join('jurusan','mahasiswa.kd_jurusan = jurusan.kd_jurusan','left');

		$query = $this->db->get();
		return $query->result_array();
	}


	// method tampilkan data dari database
	public function getdata() {
		$query = $this->db->get($this->table);
		return $query->result_array();
	}


	//method tambah 
	public function tambah($record) {
		$this->db->insert($this->table,$record);
	}


	// method tampilkan data dari database where
	public function getdatabyid($id) {
		$this->db->where($this->pk, $id);
		$query = $this->db->get($this->table);
		return $query->row_array();
	}


	//method edit 
	public function edit($id, $record) {
		$this->db->where($this->pk, $id);
		$this->db->update($this->table,$record);
	}


	//method hapus 
	public function hapus($id) {
		$this->db->where($this->pk, $id);
		$this->db->delete($this->table);
	}

}


?>