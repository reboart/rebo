<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_model extends CI_model{

	public function ctrl($id)
	{
		$hsl=$this->db->query("SELECT * FROM rb_options WHERE id='$id'");
		return $hsl;
	}
}