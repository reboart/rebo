<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('artikel_model');
		$this->load->library('upload');
	}

	public function a()
	{
		
		$data = array(
			'title' => 'Artikel',
			'user'	=> $this->artikel_model->user(),
			'usermenu' => $this->artikel_model->usermenu(),
			
		);
		$data['title']='Artikel';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$data['usermenu'] = $this->db->get('rb_user_menu')->result_array();

		$this->load->view('template/admin_header',$data);
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_top_nav',$data);
		$this->load->view('artikel/index',$data);
		$this->load->view('template/admin_footer',$data);
		


	}
	public function u()
	{
		
		$data = array(
			'title' => 'Artikel',
			'user'	=> $this->artikel_model->user(),
			'usermenu' => $this->artikel_model->usermenu(),
			
		);
		$data['title']='Artikel';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$data['usermenu'] = $this->db->get('rb_user_menu')->result_array();

		$this->load->view('template/admin_header',$data);
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_top_nav',$data);
		$this->load->view('artikel/artikel_user',$data);
		$this->load->view('template/admin_footer',$data);
		


	}

	public function new(){
		$data['title']='Artikel';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$data['usermenu'] = $this->db->get('rb_user_menu')->result_array();

		$this->load->view('template/admin_header',$data);
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_top_nav',$data);
		$this->load->view('artikel/new',$data);
		$this->load->view('template/admin_footer',$data);
	}

	public function edit()
	{
		$id = $this->uri->segment(3);

		$data = array(
			'title' => 'Artikel',
			'edit'	=> $this->artikel_model->edit($id),
			 );
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/admin_header',$data);
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_top_nav',$data);
		$this->load->view('artikel/edit',$data);
		$this->load->view('template/admin_footer',$data);
	}

	public function update()
	{
		$id = $this->input->post('id');

	}

	// public function newpost()
	// {
	// 	$auth 		= 1;
	// 	$date 		= time();
	// 	$conten 	= $this->input->post('post_content');
	// 	$title 		= $this->input->post('post_title');
	// 	$excrept 	= $this->input->post('post_excrept');
	// 	$status 	= 1;
	// 	$comen 		= 1;
	// 	$guide 		= $this->input->post('guide');
	// 	$type 		= 'post';
	// 	$thumb 		= 'post.jpg';

	// 	$data = [
	// 		'post_author' 		=> $auth,
	// 		'post_date' 		=> $date,
	// 		'post_content' 		=> $conten,
	// 		'post_title' 		=> $title,
	// 		'post_excrept' 		=> $excrept,
	// 		'post_status' 		=> $status,
	// 		'comment_status' 	=> $comen,
	// 		'guid' 			=> $guide,
	// 		'post_type' 		=> $type,
	// 		'thumbnail' 		=> $thumb,
	// 	];

	// 	$this->artikel_model->newpost($data);

	// 	$this->session->set_flashdata('massage', '<div class="alert alert-success alert-dismissible"> Success! Artikel berhasil diterbitkan..
	// 		                                    </div>');

	// 	//redirect
	// 	redirect('artikel');
	// }

	public function post()
	{
		$config['upload_path'] = './assets/images/post';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name'] = FALSE;

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();

				$config['image_library']='gd2';
				$config['source_image']='./assets/images/post/'.$gbr['file_name'];
				$config['create_thumb']=FALSE;
				$config['maintain_ratio']=FALSE;
				$config['quality']='60%';
				$config['width']= 710;
				$config['height']= 420;
				$config['new_image']='./assets/images/post'.$gbr['file_name'];

				$this->load->library('image_lib',$config);
				$this->image_lib->resize();

				$thumb =$gbr['file_name'];
				$title =$this->input->post('title');
				$content =$this->input->post('content');
				$ext =$this->input->post('post_excrept');
				$auth= 1;
				$sta= 1;
				$comen= 1;
				$categ= $this->input->post('categori');;
				$type= 'post';

				$data = [
					'post_author' 		=> $auth,
					'post_content' 		=> $content,
					'categori' 			=> $categ,
					'post_title' 		=> $title,
					'post_excrept' 		=> $ext,
					'post_status' 		=> $sta,
					'comment_status' 	=> $comen,
					'post_type' 		=> $type,
					'thumbnail' 		=> $thumb,
				];

				$this->artikel_model->newpost($data);

				redirect('artikel/a');
			}else{
				redirect('artikel/a');
			}
		}
	}

	

	
}