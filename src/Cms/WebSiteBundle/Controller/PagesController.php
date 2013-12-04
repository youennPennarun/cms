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
	use Cms\WebSiteBundle\Entity\utils\UtilsTemplate;
	 
	class PagesController extends Controller
	{
		public function newPageAction(Request $request){
			$session = $this->getRequest()->getSession();
			$template = $session->get('template');
			if($template == null ){
				return $this->redirect($this->generateUrl('Settings-selectTemplate'));
			}
			
			$utils = new UtilsTemplate;
			$varUtils = $utils->creatVarEditor_NewPage($template->getVariableArray());
			$varList = $varUtils["varList"];
			$varEditor = $varUtils["varEditor"];
			
			$defaultData = array('varList'=>$varList);
			
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
				->getForm();
			$form->handleRequest($request);
			if ($form->isValid()) {	
				$data = $form->getData();
				$repo = $this->getDoctrine()
						->getRepository('CmsWebSiteBundle:Page');
				$page=$repo->findOneBy(array("name"=>$data['pageName']));
				if($page == null){
					
					$newPage = new Page;
					$newPage->setCategories(explode("|~|",$data['categories']));
					$var = array();
					$newPage->setName($data['pageName']);
					$newPage->setPath($data['path']);
					if($data['path'] == null || $data['path'] == "" )
						$newPage->setPath($data['pageName']);
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
			foreach($template->getVariableArray() as $varName => $values){
				$id = null;
					foreach($contentList as $cVarName => $varId){
						if($cVarName == $varName){
							$id=$varId;
							array_push($ids,$id);
						}
					}
					if($id != null){
						$repo = $this->getDoctrine()
							->getRepository('CmsWebSiteBundle:text');
						$text = $repo->findOneBy(array("id"=>$id));
						if( $values['type'] == 'text'){
							if(preg_match_all($regexMenu, $varName, $matches)){
								$content[$varName] = "<div class='CMS_MENU_EDITABLE' cmsId='val-".$i."'>".$text->getValue()."</div>";
							}else{
								$content[$varName] = "<div class='hideBox'><textarea class='ckeditor' id='val-".$i."'>".$text->getValue()."</textarea ></div>";
							}
							
							
						}else if($values['type'] == 'image'){
							$content[$varName] = $text->getValue();
						}
						$i++;
						array_push($varList,$text->getValue());
					}
				
			}
			$defaultData = array('pageName' => $pageName,'varList'=>$varList);
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
			echo 'page : CmsWebSiteBundle:WebSite:'.$template->getName();
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
									->getRepository('CmsWebSiteBundle:Template');
					$template = $repo->findOneBy(array("name"=>$page->getTemplate()));
					
					foreach($template->getVariableArray() as $varName => $values){
						$textId = null;
						foreach($contentList as $cVarName => $varId){
							if($cVarName == $varName){
								echo "founded";
								$textId=$varId;
							}
						}
						if($textId != null){
							$text = $em->getRepository('CmsWebSiteBundle:Text')->findOneBy(array("id"=>$textId));
							if($text != null){
								$em->remove($text);
								$em->flush();
							}
						}
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
				$this->get('session')->getFlashBag()->set('validation', 'the page '.$index->getName().' is know the index');
				return $this->redirect($this->generateUrl('Settings-browsePages'));
			}
			$repo = $this->getDoctrine()
					->getRepository('CmsWebSiteBundle:Page');
			$pages = array();
			$pages = $repo->findAll();
			
			
			return $this->render('CmsWebSiteBundle:WebSite:default/settings/pages/browsePages.html.twig',
				array("pageList"=>$pages));

		
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