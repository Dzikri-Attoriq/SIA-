<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->utama->login();
		$this->load->model('M_home');
	}

	public function index() {
		$data['title'] = "Halaman Home";
		$data['jurusan'] = $this->M_home->getdatajurusan();
		$data['mahasiswa'] = $this->M_home->getdatamahasiswa();
		$data['pengguna'] = $this->M_home->getdatapengguna();
		if($this->session->userdata('jenisKelamin') == "Laki-Laki") {
                $jenisKelamin = "Bapak";
              } else {
                $jenisKelamin = "Ibu";
              }

              date_default_timezone_set("Asia/Hong_Kong");
              if( date("H") >= 6 AND date("H") <= 10) {
                $waktu = "Selamat Pagi";
              } elseif( date("H") >= 10.01 AND date("H") <= 15) {
                $waktu = "Selamat Siang";
              } elseif ( date("H") >= 15.01 AND date("H") <= 18) {
                $waktu = "Selamat Sore";
              } else {
                $waktu = "Selamat Malam";
              }
              $data['jenisKelamin'] = $jenisKelamin;
              $data['waktu'] = $waktu;
		$this->load->view('home/view', $data);
	}

}