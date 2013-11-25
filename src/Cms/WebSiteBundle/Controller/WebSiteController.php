<?php
 
 
namespace Cms\WebSiteBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Cms\WebSiteBundle\Entity\Text;
use Cms\WebSiteBundle\Entity\Page;
use Cms\WebSiteBundle\Entity\Template;
use Cms\WebSiteBundle\Entity\Utils;
use Cms\WebSiteBundle\Entity\managers\deadLinkChecker;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
 
class WebsiteController extends BaseController 
{
	public function indexAction()
	{
		$repo = $this->getDoctrine()
						->getRepository('CmsWebSiteBundle:Page');
		$page=$repo->findOneBy(array("isIndex"=>true));
		if($page == null){
			throw new NotFoundHttpException('Sorry not existing!');
		}
		$contentList = $page->getContent();
		
		$repo = $this->getDoctrine()
						->getRepository('CmsWebSiteBundle:Template');
		$template = $repo->findOneBy(array("name"=>$page->getTemplate()));
		
		foreach($template->getVariableArray() as $varName => $varType){
			$id = null;
			foreach($contentList as $cVarName => $varId){
				if($cVarName == $varName){
					$id=$varId;
				}
			}
			if($id != null){
				$repo = $this->getDoctrine()
					->getRepository('CmsWebSiteBundle:text');
				$text = $repo->findOneBy(array("id"=>$id));
				$content[$varName] = $text->getValue();
			}
			
		}
		return $this->render('CmsWebSiteBundle:WebSite:'.$template->getName().'.html.twig',$content);
		
		
	}
  
	public function pageAction($path){
		$defaultData = array();
		$loginForm = $this->createFormBuilder($defaultData)
				->add("username","text")
				->add("password","text")
				->add("submit","submit")
				->getForm();
		$repo = $this->getDoctrine()
						->getRepository('CmsWebSiteBundle:Page');
		$page=$repo->findOneBy(array("path"=>$path));
		if($page == null){
			throw new NotFoundHttpException('Sorry not existing!');
		}
		$repo = $this->getDoctrine()
						->getRepository('CmsWebSiteBundle:Template');
		$template = $repo->findOneBy(array("name"=>$page->getTemplate()));
		
		$contentList = $page->getContent();
		foreach($template->getVariableArray() as $varName => $varType){
			$id = null;
				foreach($contentList as $cVarName => $varId){
					if($cVarName == $varName){
						$id=$varId;
					}
				}
				if($id != null){
					$repo = $this->getDoctrine()
						->getRepository('CmsWebSiteBundle:text');
					$text = $repo->findOneBy(array("id"=>$id));
					$content[$varName] = $text->getValue();
				}
			
		}
		$content["CMS_PAGE_TITLE"] = $page->getName();
		$content['CMS_LOGIN_FORM']=$loginForm->createView();
		return $this->render('CmsWebSiteBundle:WebSite:'.$template->getName().'.html.twig',$content);
		
	}
	
	public function pageNoFoundAction(){
		$session = $this->getRequest()->getSession();
		$url = $session->get("url");
		$session->remove("url");
		$utils = new Utils;
		$utils->filelist();
		return $this->render('CmsWebSiteBundle:WebSite:default/pages/pageNoFound.html.twig',array("url"=>$url));		
	}
	
	
}

?>