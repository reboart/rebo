<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	

	public function index()
	{
		$data['title']='Profile';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$data['usermenu'] = $this->db->get('rb_user_menu')->result_array();

		$this->load->view('template/admin_header',$data);
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_top_nav',$data);
		$this->load->view('profile/index',$data);
		$this->load->view('template/admin_footer',$data);
		


	}
}