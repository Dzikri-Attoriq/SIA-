<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_model {

	// property buat database
	public $table = "";
	public $pk = "";


	// dataLevel
	public function getdatamahasiswa() {
		$query = $this->db->get('mahasiswa');
		return $query->num_rows();
	}

	// dataJurusan
	public function getdatajurusan() {
		$query = $this->db->get('jurusan');
		return $query->num_rows();
	}


	// dataAgama
	public function getdatapengguna() {
		$query = $this->db->get('pengguna');
		return $query->num_rows();
	}

}


?>