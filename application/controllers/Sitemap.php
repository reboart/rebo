<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Sitemap extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('sitemap_model');
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

		$data['post']= $this->sitemap_model->create();
		$this->load->view('layout/header', $data);
		$this->load->view('sitemap', $data);
		$this->load->view('layout/footer_page', $data);
	}
}

/* End of file Sitemap.php */
/* Location: ./application/controllers/Sitemap.php */