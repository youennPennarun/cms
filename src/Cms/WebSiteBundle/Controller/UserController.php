<?php
	namespace Cms\WebSiteBundle\Controller;
	 
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Session\Session;
	use Symfony\Component\Security\Core\SecurityContext;
	use Cms\WebSiteBundle\Entity\User;
	
	class UserController extends BaseController 
	{
		public function SignUpAction(Request $request)
		{
			$newUser = new User(array("ROLE_USER"));
			
			$form = $this->createFormBuilder($newUser)
				->add('username','text')
				->add("password","password")
				->add('email','email')
				->add('firstName','text', array(
						'required'   => false,
						'label'  =>  'first name : '))
				->add('lastName','text', array(
						'required'   => false,
						'label'  =>  'last name : '))
				->add("submit","submit")
				->getForm();
			$form->handleRequest($request);
			if ($form->isValid()) {
				$newUser->encodePassword($this->get('security.encoder_factory'));
				$em = $this->getDoctrine()->getManager();
				$em->persist($newUser);
				$em->flush();
			}
			
			return $this->render('CmsWebSiteBundle:WebSite:default/settings/user/newUserForm.html.twig',
				array("form" => $form->createView()));
		}
		
		public function loginAction(){
			$request = $this->getRequest();
			$session = $request->getSession();
			// get the login error if there is one
			if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
				$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
			} else {
				$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
				$session->remove(SecurityContext::AUTHENTICATION_ERROR);
			}
			return $this->render('CmsWebSiteBundle:WebSite:default/settings/login.html.twig', array(
				// last username entered by the user
				'last_username' => $session->get(SecurityContext::LAST_USERNAME),
				'error'         => $error,
			));
		}
	}
?>