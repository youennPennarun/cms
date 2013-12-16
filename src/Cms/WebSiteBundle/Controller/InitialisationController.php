<?php
 
 //TEST!!
namespace Cms\WebSiteBundle\Controller;
 
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\HttpFoundation\Request;
	use Cms\WebSiteBundle\Entity\ini\Initialiser;
	use Cms\WebSiteBundle\Entity\User;
	use Cms\WebSiteBundle\Entity\Settings;
	use Exception, PDOException;
	use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Output\ConsoleOutput;
	
 
class InitialisationController extends Controller
{

	public function initialisationDbAction(Request $request)
	{
		$ini = new Initialiser($this);
		if(!$ini->autorised()){
			return $this->redirect($this->generateUrl('login'));
		}
		$data = array();
		$form = $this->createFormBuilder($data)
			->add('database_host','text', array(
					 'data' => $_SERVER["SERVER_NAME"]))
			->add('database_port','text', array(
					 'data' => 'null'))
			->add('database_name','text')
			->add('database_user','text')
			->add('database_password','text', array(
					 'data' => 'null'))
			->add("submit","submit")
			->getForm();
			
			
		$form->handleRequest($request);
		if ($form->isValid()) {
			$data = $form->getData();
			if($data["database_password"] == "null")
				$data["database_password"] = null;
			if($data["database_port"] == "null")
				$data["database_port"] = null;
			$error = $ini->setDBParam($data);
			return $this->redirect($this->generateUrl('ini-cache',array('goTo'=>'ini-settings-createDB')));		
		}
		return $this->render('CmsWebSiteBundle:WebSite:default/settings/initialisation/db-info-form.html.twig', array("form"=>$form->createView()));
	}
	
	public function createDBAction(Request $request){
		$ini = new Initialiser($this);
		if(!$ini->autorised()){
			return $this->redirect($this->generateUrl('login'));
		}
		try{
			$error = $ini->setDB();
			return $this->redirect($this->generateUrl('ini-settings-admin'));
		}catch (PDOException $e){
			echo $e->getMessage();
		}
	}
	
	public function initialisationAdminAction(Request $request)
	{
			$ini = new Initialiser($this);
			if(!$ini->autorised()){
				return $this->redirect($this->generateUrl('login'));
			}
			$newUser = new User(array("ROLE_ADMIN"));
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
				
				$ini->isInitialized();
				
			return $this->redirect($this->generateUrl('ini-cache',array('goTo'=>'Settings')));	
			}
			
			return $this->render('CmsWebSiteBundle:WebSite:default/settings/user/newUserForm.html.twig',
				array("form" => $form->createView()));
	
		
		return $this->render('CmsWebSiteBundle:WebSite:default/settings/initialisation/db-info-form.html.twig', array("form"=>$form->createView()));
	}

	
	private function execute($command)
	{
		$app = new Application($this->get('kernel'));
		$app->setAutoExit(false);

		$input = new StringInput($command);
		$output = new ConsoleOutput();

		$error = $app->run($input);

	}
	public function cacheClearAction(Request $request) {
		session_destroy();
		$this->execute('cache:clear');
		return $this->redirect($this->generateUrl($request->query->get('goTo')));	
	}
}

?>