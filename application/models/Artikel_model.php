<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_model{

	public function user(){
		$email = $this->session->userdata('email');
		$user = $this->db->where('email'== $email)->get('user');
		if ($user) {
			return $user->row_array();
		}else {
			return false;
		}
	}

	public function usermenu(){
		$usermenu = $this->db->get('rb_user_menu');
		if ($usermenu) {
			return $usermenu->result_array();
		}else {
			return false;
		}
	}


	public function newpost($data)
	{
		$query = $this->db->insert('rb_post', $data);

		if ($query) {
			return true;
		}else{
			return false;
		}
	}

}