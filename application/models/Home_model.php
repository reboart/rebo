<?php
class Home_model extends CI_model{

	public function post($kode)
	{
		$hsl=$this->db->query("SELECT * FROM rb_post WHERE id='$kode'");
		return $hsl;
	}
}