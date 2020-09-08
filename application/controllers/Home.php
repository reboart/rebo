<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');

			

	}

	public function index()
	{
		// rebo options
		$siurl = $this->db->get_where('rb_options' ,['id'=> 1])->row_array();
		$hm = $this->db->get_where('rb_options' ,['id'=> 2])->row_array();
		$blogname = $this->db->get_where('rb_options' ,['id'=> 3])->row_array();
		$tl = $this->db->get_where('rb_options' ,['id'=> 4])->row_array();
		$tl = $this->db->get_where('rb_options' ,['id'=> 4])->row_array();
		$tl = $this->db->get_where('rb_options' ,['id'=> 4])->row_array();
		$data['title']= $tl['value'];
			// menu
		$data['menu']= $this->db->get_where('rb_user_menu',['menu_id'=> 3])->result_array();


		$this->load->view('layout/header', $data);
		$this->load->view('layout/index', $data);
		$this->load->view('layout/footer', $data);
	
	}

	public function post()
	{	
		$kode=$this->uri->segment(3);
		$x['postnya']=$this->home_model->post($kode)->row_array();
		// rebo options
		$siurl = $this->db->get_where('rb_options' ,['id'=> 1])->row_array();
		$hm = $this->db->get_where('rb_options' ,['id'=> 2])->row_array();
		$blogname = $this->db->get_where('rb_options' ,['id'=> 3])->row_array();
		$tl = $this->db->get_where('rb_options' ,['id'=> 4])->row_array();
		$tl = $this->db->get_where('rb_options' ,['id'=> 4])->row_array();
		$tl = $this->db->get_where('rb_options' ,['id'=> 4])->row_array();
		$data['title']= $tl['value'];

		// menu
		$data['menu']= $this->db->get_where('rb_user_menu',['menu_id'=> 3])->result_array();


		// post terkait
		$ck = $x['postnya'];
		$ckt = $ck['categori'];
		$data['ctg']= $this->db->get_where('rb_post',['categori'=> $ckt])->result_array();
		

		$this->load->view('layout/header',$data);
		$this->load->view('layout/page', $x);
		$this->load->view('layout/footer_page',$data);
		
	}
	public function demo()
	{
		$this->load->view('index');
	}


}