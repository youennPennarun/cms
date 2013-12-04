<?php
	namespace Cms\WebSiteBundle\Controller;
	 
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Session\Session;
	 
	class MailingController extends Controller{
	
		public function adminMailerAction(){
			$message = \Swift_Message::newInstance()
				->setSubject('test Email')
				->setFrom('youenn.pennarun@gmail.com')
				->setTo('youenn.pennarun@gmail.com')
				->addPart('<q>Here is the message itself</q>', 'text/html');

			$p = $this->get('mailer')->send($message);
				return $this->redirect($this->generateUrl('Settings'));
		}
	
	}
	
	
?>