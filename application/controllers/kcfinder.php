<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kcfinder extends CI_Controller {

	function index()
	{
		$data['title']='Dashboard';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$data['usermenu'] = $this->db->get('rb_user_menu')->result_array();
		$this->load->view('kcfinder/browser',$data);
		
	}
	function login()
	{
		$usr = $this->input->post('username');
		$pass = $this->input->post('password');
		if($usr=="admin" || $pass=="admin"){ 
			$_SESSION['ses_admin']="admin";
			$_SESSION['ses_kcfinder']=array();
			$_SESSION['ses_kcfinder']['disabled'] = false;
			$_SESSION['ses_kcfinder']['uploadURL'] = "../content_upload";
			$this->admin(); 
		}
		else { $this->index(); }
	}
	function admin()
	{
		$session=isset($_SESSION['ses_admin']) ? $_SESSION['ses_admin']:'';
		if($session==""){
			$this->login(); 
		}
		else { $this->load->view('kcfinder/admin'); }
	}
	
	function logout()
	{
		session_destroy();
		$this->login();
	}
}
