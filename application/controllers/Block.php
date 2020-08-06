<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Block extends CI_Controller {

	public function index($value='')
	{
		$data['title']='404';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('block/index',$data);
	}



}

