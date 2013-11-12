<?php
	namespace Cms\WebSiteBundle\Controller;
	 
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Session\Session;
	use Cms\WebSiteBundle\Entity\Template;
	use Cms\WebSiteBundle\Entity\Uploader;
	use Cms\WebSiteBundle\Entity\Page;
	use Cms\WebSiteBundle\Entity\Text;
	 
	class SettingsController extends Controller
	{
		
		
		public function newPageAction(Request $request){
		
			$session = $this->getRequest()->getSession();
			$template = $session->get('template');
			if($template == null ){
				return $this->redirect($this->generateUrl('Settings-selectTemplate'));
			}
			
			$varList = array();
			$varEditor = array();
			$i=0;
			$o=0;			
			foreach($template->getVariableArray() as $varName=>$values){
				$varList[] = $varName; 
				if( $values['type'] == 'text'){
					$varEditor[$varName] = "<div class='hideBox'><textarea class='ckeditor' id='val-".$i."'>".$varName."</textarea ></div>";
					$i++;
				}else if($values['type'] == 'image'){
					if(isset($values['options']['id'])){
						$id= $values['options']['id'];
					}else{
						$id = '';
					}
					if(isset($values['options']['class'])){
						$class= $values['options']['class'];
					}else{
						$class= '';
					}
					$varEditor[$varName] = "<img src='/img.jpg' class='".$class."' id='".$id."' width='".$values['options']['width']."' height='".$values['options']['height']."' cmsClass='editable-img' cmsId='val-".$o."'>";
					$o++;
				}
			}
			$defaultData = array('varList'=>$varList);
			$form = $this->createFormBuilder($defaultData)
				->add('pageName', 'text')
				->add('save','submit')
				->add('preview', 'submit')
				->add('varList', 'collection', array(
						'type'   => 'text',
						'label'  =>  'Variables : '))
				->getForm();
			$form->handleRequest($request);
			if ($form->isValid()) {	
				$data = $form->getData();
				
				if($form->get('save')->isClicked()){
					$newPage = new Page;
					$var = array();
					$newPage->setName($data['pageName']);
					$newPage->setTemplate($template->getName());
					$i=0;
					foreach( $data['varList'] as $varValue){
						$text = new Text;
						$text->setValue($varValue);
						$em = $this->getDoctrine()->getManager();
						$em->persist($text);
						$em->flush();
						
						$var[$varList[$i]] = $text->getId();
						$i++;
					}
					$newPage->setContent($var);
					$em = $this->getDoctrine()->getManager();
					$newPage->setContent($var);
						
					$em->persist($newPage);
					$em->flush();
			$session->remove('template');
					
				}else if($form->get('preview')->isClicked()){
					$session->set('template',$template);
					$i=0;
					foreach( $data['varList'] as $varValue){
						$session->set($varList[$i],$varValue);
						$i++;
					}
					return $this->redirect($this->generateUrl('Settings-pagePreview'));
				}
			}
			return $this->render('CmsWebSiteBundle:WebSite:'.$template->getName().'.html.twig',
				array_merge (array('form'=>$form->createView(), 'includesPath' => array('default/includes/js/ckeditor.html.twig')),$varEditor));
		
		}
		
		public function pagePreviewAction(){
			$session = $this->getRequest()->getSession();
			$template = $session->get('template');
			$content = array();
			foreach($template->getVariableArray() as $name=>$values){
				$content[$name] = $session->get($name);
			}
				return $this->render('CmsWebSiteBundle:WebSite:'.$template->getName().'.html.twig',$content);
			
		}
		
		private function containerInitialized()
		{
			 echo 'I like banana!!';
		}
	}
?>