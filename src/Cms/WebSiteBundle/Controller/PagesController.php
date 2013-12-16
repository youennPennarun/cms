<?php
	namespace Cms\WebSiteBundle\Controller;
	 
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Session\Session;
	use Cms\WebSiteBundle\Entity\Template;
	use Cms\WebSiteBundle\Entity\Uploader;
	use Cms\WebSiteBundle\Entity\Page;
	use Cms\WebSiteBundle\Entity\Text;
	use Cms\WebSiteBundle\Entity\Categories;
	use Cms\WebSiteBundle\Entity\utils\PageUtils;
	 
	class PagesController extends Controller
	{
		public function newPageAction(Request $request){
			$session = $this->getRequest()->getSession();
			$template = $session->get('template');
			if($template == null ){
				return $this->redirect($this->generateUrl('Settings-selectTemplate'));
			}
			
			//$utils = new UtilsTemplate;
			//$varUtils = $utils->createVarEditor_NewPage($template->getVariableArray());
			$pageService = $this->get('pageService');
			$varUtils = $pageService->createVarEditor_NewPage($template->getVariableArray());
			
			$varList = $varUtils["varList"];
			$varEditor = $varUtils["varEditor"];
			$varType = $varUtils["varType"];
			
			$data = array('varList'=>$varList);
			
			$form = $this->createFormBuilder($data)
				->add('pageName', 'text')
				->add('save','submit')
				->add('varList', 'collection', array(
						'type'   => 'text',
						'label'  =>  'Variables : '))
				->add('categories', 'text', array(
						'required'  => false,
						))
				->add('path', 'text', array(
						'required'  => false,
						))
				->add('publishingDate', 'text', array(
						'label'     => 'publish the ',
						'required'  => false,
						))
				->add('isIndex', 'checkbox', array(
						'label'     => 'set as index',
						'required'  => false,
						))
				->getForm();
			$form->handleRequest($request);
			if ($form->isValid()) {	
				$data = $form->getData();
				$pageUtils = new PageUtils($this->getDoctrine(),$this->get('logger'));
				$newPage = $pageUtils->newPage($data,$template,$varList,$varType);
				if($newPage != null){
					$session->remove('template');
					return $this->redirect($this->generateUrl('Page',array("path"=>$newPage->getPath())));
				}else{
					$i = 0;
					foreach($template->getVariableArray() as $varName=>$values){
						$varList[] = $varName; 
						if( $values['type'] == 'text'){
							$varEditor[$varName] = "<div class='hideBox'><textarea class='ckeditor' id='val-".$i."'>".$data['varList'][$i]."</textarea ></div>";
							
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
							$varEditor[$varName] = $data['varList'][$i];
						}
						$i++;
					}
					
					$form = $this->createFormBuilder($data)
						->add('pageName', 'text')
						->add('save','submit')
						->add('varList', 'collection', array(
								'type'   => 'text',
								'label'  =>  'Variables : '))
						->add('categories', 'text', array(
								'required'  => false,
								))
						->add('path', 'text', array(
								'required'  => false,
								))
						->add('publishingDate', 'text', array(
								'label'     => 'publish the ',
								'required'  => false,
								))
						->add('isIndex', 'checkbox', array(
								'label'     => 'set as index',
								'required'  => false,
								))
						->getForm();
				}
					
				
			}
			$varEditor["CMS_PAGE_TITLE"] = "";
			return $this->render('CmsWebSiteBundle:WebSite:'.$template->getName().'.html.twig',
				array_merge (array('form'=>$form->createView(), 'includesPath' => array('default/includes/js/ckeditor.html.twig')),$varEditor));
		
		}
		
		public function editPagesAction($pageName,Request $request){
			$repo = $this->getDoctrine()
						->getRepository('CmsWebSiteBundle:Page');
			$page=$repo->findOneBy(array("name"=>$pageName));
			$contentList = $page->getContent();
			$repo = $this->getDoctrine()
							->getRepository('CmsWebSiteBundle:Template');
			$template = $repo->findOneBy(array("name"=>$page->getTemplate()));
			$i = 0;
			$varList = array();
			$ids = array();
			$regexMenu = "(CMS_MENU_[1-9]+)";
			
			$pageService = $this->get('pageService');
			$content = $pageService->createVarEditor_EditPage($page);
			
			
			
			$defaultData = array('pageName' => $pageName,'varList'=>$varList,"path"=>$page->getPath(),"publishingDate"=>$page->getPublishingDate());
			$form = $this->createFormBuilder($defaultData)
				->add('pageName', 'text')
				->add('save','submit')
				->add('varList', 'collection', array(
						'type'   => 'text',
						'label'  =>  'Variables : '))
				->add('categories', 'text', array(
						'required'  => false,
						))
				->add('path', 'text', array(
						'required'  => false,
						))
				->add('publishingDate', 'text', array(
						'label'     => 'publish the ',
						'required'  => false,
						))
				->add('isIndex', 'checkbox', array(
						'label'     => 'set as index',
						'required'  => false,
						))
				->getForm();
			$form->handleRequest($request);
			if ($form->isValid()) {	
				$data = $form->getData();
				$i = 0;
				foreach($ids as $id){
					$varValue = $data['varList'][$i];
					$em = $this->getDoctrine()->getManager();
					$text = $em->getRepository('CmsWebSiteBundle:Text')->find($id);
					if (!$text) {
						throw $this->createNotFoundException(
							'Variable not found : '.$id
						);
					}
					$text->setValue($varValue);
					$em->flush();
					$i++;
				}
				$repo = $this->getDoctrine()
							->getRepository('CmsWebSiteBundle:Page');
				$page=$repo->findOneBy(array("name"=>$pageName));
					return $this->redirect($this->generateUrl('Page',array("path"=>$page->getPath())));
				}
			$content["CMS_PAGE_TITLE"] = $page->getName();
			return $this->render('CmsWebSiteBundle:WebSite:'.$template->getName().'.html.twig',
				array_merge (array('form'=>$form->createView(), 'includesPath' => array('default/includes/js/ckeditor.html.twig')),$content));
		}
		
		public function browsePagesAction(Request $request){
			$action = $request->query->get('action');
			$id = $request->query->get('id');
			if($action != "" && $id == ""){
				return $this->redirect($this->generateUrl('Settings-browsePages'));
			}else if($action == "delete"){
				$em = $this->getDoctrine()->getManager();
				$repo = $this->getDoctrine()
						->getRepository('CmsWebSiteBundle:Page');
				$page=$repo->findOneBy(array("id"=>$id));
				if($page != null){
					$contentList = $page->getContent();
					
					$repo = $this->getDoctrine()
									->getRepository('CmsWebSiteBundle:Text');
					foreach($contentList as $varName => $id){
						$var = $repo->findOneBy(array("id"=>$id));
						$em->remove($var);
					}
					$oldPageName = $page->getName();
					$em->remove($page);
					$em->flush();
				}
				$this->get('session')->getFlashBag()->set('validation', 'the page '.$oldPageName.' is removed');				
				return $this->redirect($this->generateUrl('Settings-browsePages'));
			}else if($action == "setIndex"){
				$em = $this->getDoctrine()->getManager();
				$repo = $this->getDoctrine()
									->getRepository('CmsWebSiteBundle:Page');
				$pages = array();
				$pages = $repo->findBy(array("isIndex"=>true));
				$index = $repo->findOneBy(array("id"=>$id));
				foreach($pages as $p){
					$p->setIsIndex(false);
				}
				$index->setIsIndex(true);
				$em->flush();
				$this->get('session')->getFlashBag()->set('validation', 'the page '.$index->getName().' is now the index');
				return $this->redirect($this->generateUrl('Settings-browsePages'));
			}
			$repo = $this->getDoctrine()
					->getRepository('CmsWebSiteBundle:Page');
			$pages = array();
			$pages = $repo->findAll();
			
			
			return $this->render('CmsWebSiteBundle:WebSite:default/settings/pages/browsePages.html.twig',
				array("pageList"=>$pages));

		}
		
		public function changeTemplateAction($pageName,Request $request){
			$session = $this->getRequest()->getSession();
			$template = $session->get('template');
			if($template == null ){
				return $this->redirect($this->generateUrl('Settings-selectTemplate'));
			}
			
			//$utils = new UtilsTemplate;
			//$varUtils = $utils->createVarEditor_NewPage($template->getVariableArray());
			$pageService = $this->get('pageService');
			$varUtils = $pageService->createVarEditor_ChangeTemplate($template->getVariableArray());
			
			$varList = $varUtils["varList"];
			$varEditor = $varUtils["varEditor"];
			$varType = $varUtils["varType"];
			
			$repo = $this->getDoctrine()
						->getRepository('CmsWebSiteBundle:Page');
			$page=$repo->findOneBy(array("name"=>$pageName));
			foreach($page->getContent() as $name=>$id){
				$repo = $this->getDoctrine()
						->getRepository('CmsWebSiteBundle:Text');
				$text=$repo->findOneBy(array("id"=>$id));
				if( $text->getType() == 'text'){
					$content["CMS_EXISTING_VALUE"]["text"][] = array("varName"=>$name,"value"=>$text);
				}else if($text->getType() == 'image'){
					$content["CMS_EXISTING_VALUE"]["image"][] = array("varName"=>$name,"value"=>$text);
				}
			}
			
			
			
			$data = array('varList'=>$varList);
			
			$form = $this->createFormBuilder($data)
				->add('pageName', 'text')
				->add('save','submit')
				->add('varList', 'collection', array(
						'type'   => 'text',
						'label'  =>  'Variables : '))
				->add('categories', 'text', array(
						'required'  => false,
						))
				->add('path', 'text', array(
						'required'  => false,
						))
				->add('publishingDate', 'text', array(
						'label'     => 'publish the ',
						'required'  => false,
						))
				->add('isIndex', 'checkbox', array(
						'label'     => 'set as index',
						'required'  => false,
						))
				->getForm();
			$form->handleRequest($request);
			if ($form->isValid()) {	
				$data = $form->getData();
				$pageUtils = new PageUtils($this->getDoctrine(),$this->get('logger'));
				$newPage = $pageUtils->newPage($data,$template,$varList,$varType);
				if($newPage != null){
					$session->remove('template');
					return $this->redirect($this->generateUrl('Page',array("path"=>$newPage->getPath())));
				}else{
					$i = 0;
					foreach($template->getVariableArray() as $varName=>$values){
						$varList[] = $varName; 
						if( $values['type'] == 'text'){
							$varEditor[$varName] = "<div class='hideBox'><textarea class='ckeditor' id='val-".$i."'>".$data['varList'][$i]."</textarea ></div>";
							
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
							$varEditor[$varName] = $data['varList'][$i];
						}
						$i++;
					}
					
					$form = $this->createFormBuilder($data)
						->add('pageName', 'text')
						->add('save','submit')
						->add('varList', 'collection', array(
								'type'   => 'text',
								'label'  =>  'Variables : '))
						->add('categories', 'text', array(
								'required'  => false,
								))
						->add('path', 'text', array(
								'required'  => false,
								))
						->add('publishingDate', 'text', array(
								'label'     => 'publish the ',
								'required'  => false,
								))
						->add('isIndex', 'checkbox', array(
								'label'     => 'set as index',
								'required'  => false,
								))
						->getForm();
				}
					
				
			}
			$varEditor["CMS_PAGE_TITLE"] = "";
			return $this->render('CmsWebSiteBundle:WebSite:'.$template->getName().'.html.twig',
				array_merge (array('form'=>$form->createView(),"content"=>$content, 'includesPath' => array('default/includes/js/ckeditor.html.twig')),$varEditor));
		
		}
		
		public function pageSettingsAction(Request $request){
			return $this->render('CmsWebSiteBundle:WebSite:default/settings/pages/pageSettings.html.twig');
		
		}
		
		public function selectPages(Request $request){
			$repo = $this->getDoctrine()
					->getRepository('CmsWebSiteBundle:Page');
			$pages = array();
			$pages = $repo->findAll();
			
			
			return $pages;

		
		}

		
	}
?>