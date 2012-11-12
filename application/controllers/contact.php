<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
	private $data = array();

	public function __construct(){
        parent::__construct();
	}

	public function index(){
		$this->load->model('SiteContent');
		$this->data['content'] = $this->SiteContent->get_content_by_id(4);
		$this->data['page_title'] = $this->data['content']->title;

		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');
		$this->form_validation->set_rules('comment', 'Comment', 'trim|required');
		$this->form_validation->set_error_delimiters('<span class="err_msg">', '</span>');

		$this->data['save_successful'] = false;

		if ($this->form_validation->run()==true && $_POST){
			// Send an e-mail letting us know someone tried to contact us...
			$email_data = array(
				'from'					=> $_POST['email'],
				'from_name'             => $_POST['name'],
				'subject'               => 'Snorkel-Interactive.com Contact Request',
				'body'                  => '<html><body style="font-family: Verdana, Arial, sans-serif;">You have a new contact submission.<br/><br/>Name: <strong>' . $_POST['name'] . '</strong><br/>E-mail: <strong><a href="mailto:' . $_POST['email'] . '">' . $_POST['email'] . '</a></strong><br/>Comments: <strong>' . $_POST['comment'] . '</strong></body></html>',
				'email_address'         => 'contact@snorkel-interactive.com',
				'reply_to_address'      => $_POST['email'],
				'reply_to_name'         => $_POST['name']
			);

			$this->snorkelmail->send_message($email_data);    
			
			// Send an e-mail to the person who submitted the form letting them know we got it.
			$cust_email_data = array(
				'from'					=> 'noreply@snorkel-interactive.com',
				'from_name'             => 'Snorkel-bot',
				'subject'               => 'Snorkel-Interactive.com Contact Request',
				'body'                  => '<html><body style="font-family: Verdana, Arial, sans-serif;">Your contact submission has been sent. Thank you for your interest. You should hear from us soon. Please do not reply to this e-mail as it is an automated response.<br/><br/>Name: <strong>' . $_POST['name'] . '</strong><br/>E-mail: <strong>' . $_POST['email'] . '</strong><br/>Comments: <strong>' . $_POST['comment'] . '</strong></body></html>',
				'email_address'         => $_POST['email'],
				'reply_to_address'      => 'noreply@snorkel-interactive.com',
				'reply_to_name'         => 'No Reply'
			);

			$this->snorkelmail->send_message($cust_email_data);
			$this->form_validation->_field_data = array();;
			$this->data['save_successful'] = true;
		}

		$this->load->view('template/top', $this->data);
		//$this->load->view('template/sidebar', $this->data);
		$this->load->view('content', $this->data);
		$this->load->view('contact_view');
		$this->load->view('template/bottom');
	}
}
?>