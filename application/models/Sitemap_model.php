<<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Sitemap
 */
class Sitemap_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function create()
	{
		$this->db->select('*');
        $this->db->from('rb_post');
        $this->db->order_by('id',"ASC");
        $query = $this->db->get();
        return $query->result();
	}
}

/* End of file Sitemap_model.php */
/* Location: ./application/models/Sitemap_model.php */