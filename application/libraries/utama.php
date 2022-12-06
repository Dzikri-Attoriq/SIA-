<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class utama {
	public function login() {
		$_this =&get_instance();
		$_this->load->helper('url');

		if( $_this->session->userdata('izin') != true ) {
			redirect(base_url('Login'));
		}
	}

	public function aksesAdmin() {
		$_this =&get_instance();
		$_this->load->helper('url');

		if( $_this->session->userdata('level') != 'Admin' ) {
			redirect(base_url('Login'));
		}	
	}
}

?>