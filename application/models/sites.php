<?php
class Sites extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	public function get_portfolio($limit = 0){
		$this->db->from('sites');
		if ($limit > 0){
			$this->db->limit($limit);
		}
		$this->db->order_by('s_key', 'desc');
		return $this->db->get();
	}
}
?>