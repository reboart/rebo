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
		$this->load->view('layout/header');
		$this->load->view('layout/top-nav');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/index');
		$this->load->view('layout/content');
		$this->load->view('layout/footer');
	}

	public function post()
	{	
		$kode=$this->uri->segment(3);
		$x['data']=$this->home_model->post($kode)->row_array();


		$this->load->view('layout/header');
		$this->load->view('layout/top-nav');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/page', $x);
		$this->load->view('layout/content');
		$this->load->view('layout/footer');
	}


}