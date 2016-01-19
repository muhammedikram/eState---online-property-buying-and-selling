<?php

//TODO This is going to get replaced by SwiftMailer / will be used to instantiate SwiftMailer.
namespace Mail;

class Mail
{
	protected $transport;
	protected $mailer;
	protected $message;
	protected $view;
	protected $template;
	
	
	public function __construct($useGmail = false)
	{
	
		$transport = \Swift_SmtpTransport::newInstance('ssl://smtp.gmail.com', 465) //now uses the bulkmail server.
					->setUsername('ikimuhammed@gmail.com')
					->setPassword('ikram0192');
		
		
		// Create the Mailer using your created Transport
		$mailer = \Swift_Mailer::newInstance($transport);
		
		// Create a message
		$message = \Swift_Message::newInstance();
		
		
		
		$this->transport = $transport;
		$this->mailer    = $mailer;
		$this->message   = $message;
	}
	
	
	
	public function setFrom($emailAddress, $name = '')
	{
		$this->message->setFrom(
			array(
				$emailAddress => $name
			)
		);
	}
	
	public function setTo($emailAddress, $name = '')
	{
		//$emailAddress = 'ikimuhammed@gmail.com';
		$this->message->setTo(
			array(
				$emailAddress => $name
			)
		);
	}
	
	public function addCC($emailAddress, $name = '')
	{
		$this->message->addCC(
			array(
				$emailAddress => $name
			)
		);
	}
	
	public function addBCC($emailAddress, $name = '')
	{
		$this->message->addBCC(
			array(
				$emailAddress => $name
			)
		);
	}
	
	public function setReadReceiptTo($emailAddress)
	{
		$this->message->setReadReceiptTo($emailAddress);
	}
	
	
	
	public function setSubject($subject)
	{
		$this->message->setSubject($subject);
	}
	
	public function setBodyHTML($bodyHTML)
	{
		$this->message->setBody($bodyHTML, 'text/html');
	}
	
	public function setBodyText($bodyText)
	{
		$this->message->setBody($bodyText, 'text/plain');
	}
	
	
	
	public function attach($filePath)
	{
		$this->message->attach(
			\Swift_Attachment::fromPath($filePath)
		);
	}
	
	
	
	public function send()
	{
		return $this->mailer->send(
			$this->message
		);
	}
}