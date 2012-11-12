<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {
	private $data = array();

	public function __construct(){
        parent::__construct();
	}

	public function index(){
		$this->load->model('SiteContent');
		$this->data['content'] = $this->SiteContent->get_content_by_id(3);
		$this->data['page_title'] = $this->data['content']->title;

		$this->load->view('template/top', $this->data);
		//$this->load->view('template/sidebar', $this->data);
		$this->load->view('content', $this->data);
		$this->load->view('template/bottom');
	}
}
?>