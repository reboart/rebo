<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in_user();
	}

	public function index()
	{
		$data['title']='Dashboard';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('template/admin_header',$data);
		$this->load->view('template/user_sidebar',$data);
		$this->load->view('template/admin_top_nav',$data);
		$this->load->view('user/index',$data);
		$this->load->view('template/admin_footer',$data);
		


	}

	
}