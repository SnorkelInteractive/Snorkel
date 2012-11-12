<?php

require('./class.phpmailer.php');

class Snorkelmail {
	var $mail;
	var $db;
	var $CI;

	function Snorkelmail(){
		$this->CI =& get_instance();

		// set up default PHPMailer stuff
		$this->mail = new PHPMailer();
		$this->mail->SMTPAuth   = true;
		$this->mail->SMTPSecure = 'ssl';
		$this->mail->Port       = '465';
		$this->mail->Mailer     = 'smtp';
		$this->mail->Host       = 'smtp.gmail.com';
		$this->mail->Username   = 'noreply@snorkel-interactive.com';
		$this->mail->Password   = '4zeeweb!ok';
		$this->mail->IsHTML(true);
	}

	function send_message($data){
		$this->mail->ClearAllRecipients();
		$this->mail->From		= $data['from'];
		$this->mail->FromName	= $data['from_name'];
		$this->mail->Subject	= $data['subject'];
		$this->mail->Body		= nl2br($data['body']);
		$this->mail->AddReplyTo( $data['reply_to_address'], $data['reply_to_name'] );

		if (is_array($data['email_address'])){
			foreach ($data['email_address'] as $email){
				$this->mail->AddAddress( $email );
			}
		} else {
			$this->mail->AddAddress( $data['email_address'] );
		}

		$this->mail->Send();
	}
}

?>
