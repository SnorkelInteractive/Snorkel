<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	private $data = array();

	public function __construct(){
        parent::__construct();
		$this->data['page_title'] = '';
	}

	public function index(){
		$this->load->model('SiteContent');
		$this->data['content'] = $this->SiteContent->get_content_by_id(1);

		$this->load->model('Sites');
		$this->data['sites'] = $this->Sites->get_portfolio(4);

		$this->load->view('template/top', $this->data);
		//$this->load->view('template/sidebar', $this->data);
		$this->load->view('content', $this->data);
		$this->load->view('welcome_message', $this->data);
		$this->load->view('template/bottom');
	}
}
?>