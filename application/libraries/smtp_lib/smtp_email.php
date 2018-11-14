<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Smtp_email
{
	protected 	$ci;
	protected 	$username;
	protected 	$password;

	public function __construct(){
        $this->ci =& get_instance();
        $this->username = 'apikey';
        $this->password = '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';
	}

	public function sendEmail($from, $to, $subject, $html){
		include_once "swift_required.php";
		
		$transport = Swift_SmtpTransport::newInstance('smtp.mandrillapp.com', 587);
		$transport->setUsername($this->username);
		$transport->setPassword($this->password);
		$swift = Swift_Mailer::newInstance($transport);

		$message = new Swift_Message($subject);
		$message->setFrom($from);
		$message->setBody($html, 'text/html');
		$message->setTo($to);
		
		if ($recipients = $swift->send($message, $failures)){
			return FALSE;			// If email is successfully send then it return false because in controller we want to run else condition on email success
		}
		else{
			return $failures;		// If email is not successfully send then it return errors array
		}
	}
}