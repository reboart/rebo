<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}
	public function index()
	{
		$data['title']='Dashboard';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$data['usermenu'] = $this->db->get('rb_user_menu')->result_array();

		$this->load->view('template/admin_header',$data);
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_top_nav',$data);
		$this->load->view('admin/index',$data);
		$this->load->view('template/admin_footer',$data);
		


	}

	public function options()
	{
		$data['title'] = 'Options';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/admin_header',$data);
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_top_nav',$data);
		$this->load->view('admin/index',$data);
		$this->load->view('template/admin_footer',$data);

	}

	

	
}