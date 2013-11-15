<?php
 
 
namespace Cms\WebSiteBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Cms\WebSiteBundle\Entity\Text;
use Cms\WebSiteBundle\Entity\Page;
use Cms\WebSiteBundle\Entity\Template;
use Cms\WebSiteBundle\Entity\Utils;
 
class WebsiteController extends BaseController 
{
	public function indexAction()
	{
		$repo = $this->getDoctrine()
						->getRepository('CmsWebSiteBundle:Page');
		$page=$repo->findOneBy(array("isIndex"=>true));
		if($page != null){
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
		}else{
			$url = $this->getRequest()->getUri();
			$session = $this->getRequest()->getSession();
			$session->set("url",$url);
			
		}
	}
  
	public function pageAction($pageName){
		$repo = $this->getDoctrine()
						->getRepository('CmsWebSiteBundle:Page');
		$page=$repo->findOneBy(array("name"=>$pageName));
		if($page != null){
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
		}else{
			$url = $this->getRequest()->getUri();
			$session = $this->getRequest()->getSession();
			$session->set("url",$url);
		}
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