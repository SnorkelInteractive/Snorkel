<?php
class SiteContent extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	public function get_content_by_id($c_key){
		$this->db->from('content');
		$this->db->where('c_key', $c_key);
		return $this->db->get()->row();
	}
}
?>