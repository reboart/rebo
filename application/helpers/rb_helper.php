<?php 
	
	function is_logged_in()
	{
		$ci = get_instance();
		if (!$ci->session->userdata('email')) {
			redirect('auth');
		} else {
			$role_id = $ci->session->userdata('role_id');
			$menu_id = $ci->uri->segment(1);

			$querymenu = $ci->db->get_where('rb_role',['role' => $menu_id])->row_array();
			$menu = $querymenu['id'];

			$access = $ci->db->get_where('rb_access',['role_id' => $role_id, 'menu' => $menu]);
			if ($access->num_rows() < 1) {
				redirect('block');
			}
		}
	}
	
	function is_logged_in_user()
	{
		$ci = get_instance();
		if (!$ci->session->userdata('email')) {
			redirect('auth');
		}
	}
 ?>