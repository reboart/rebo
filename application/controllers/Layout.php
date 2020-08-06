<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		is_logged_in();

	}

	public function index()
	{
		$data = array(
			'title' => 'Layout',
			'user'	=> $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array(),
			'usermenu' => $this->db->get('rb_user_menu')->result_array(),
			
		);

		$this->load->view('template/admin_header',$data);
		$this->load->view('template/top_nav');
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('layout/control',$data);
	}


}

