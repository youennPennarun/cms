<?php
 
 
namespace Cms\WebSiteBundle\Controller;

use Cms\WebSiteBundle\Controller\SettingsController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Cms\WebSiteBundle\Entity\Text;
use Cms\WebSiteBundle\Entity\Page;
use Cms\WebSiteBundle\Entity\Template;
use Cms\WebSiteBundle\Entity\Menu;
use Cms\WebSiteBundle\Entity\Link;
use Cms\WebSiteBundle\Entity\Form\Type\Menu\MenuType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
 
class MenuController extends SettingsController 
{
	public function newMenuAction(Request $request){
		$menu = new Menu;
		$form = $this->createForm(new MenuType(), $menu);
		$repo = $this->getDoctrine()
					->getRepository('CmsWebSiteBundle:Page');
		$pages = $repo->findAll();
		
		if ($request->isMethod('POST')) {
        $form->bind($this->getRequest());
        //if ($form->isValid()) {
				echo "gtrf";
				$data = $form->getData();	// get all the inputs
				echo "<br>".$data->getName();
				foreach($data->getContent() as $p){
					echo "<br>".$p->path;
				}
				$em = $this->getDoctrine()->getManager();
				$em->persist($data);
				$em->flush();
			
		}
		return $this->render('CmsWebSiteBundle:WebSite:default/settings/menu/menuSettings.html.twig',array("form"=>$form->createView(),"pages"=>$pages));
	
	}
	
	public function editMenuAction(Request $request){
		$id = $request->query->get('id');
		$em = $this->getDoctrine()->getManager();
			$menu = $em->getRepository('CmsWebSiteBundle:Menu')->find($id);
			if (!$menu) {
				throw $this->createNotFoundException(
					'menu not found for id : '.$id
				);	
			}
		$form = $this->createForm(new MenuType(), $menu);
		if ($request->isMethod('POST')) {
			$form->bind($this->getRequest());
			$em->flush();
		}
		return $this->render('CmsWebSiteBundle:WebSite:default/settings/menu/menuSettings.html.twig',array("form"=>$form->createView()));
	
	}
	
	
	public function manageMenusAction(Request $request){
		$action = $request->query->get('action');
		$id = $request->query->get('id');
		if(isset($action) && isset($id)){
			$em = $this->getDoctrine()->getManager();
			$menuToDelete = $em->getRepository('CmsWebSiteBundle:Menu')->find($id);
			if (!$menuToDelete) {
				throw $this->createNotFoundException(
					'menu not found for id : '.$id
				);	
			}
			$em->remove($menuToDelete);
			$em->flush();
			return $this->redirect($this->generateUrl('Settings-manageMenus'));
		}else{
			$repo = $this->getDoctrine()
					->getRepository('CmsWebSiteBundle:Menu');
			$menu = array();
			$menu = $repo->findAll();
			return $this->render('CmsWebSiteBundle:WebSite:default/settings/menu/menuSettings.html.twig',
				array("menus"=>$menu));
		}
	
	}
	
	public function getMenuViewAction($id){
		$repo = $this->getDoctrine()
			->getRepository('CmsWebSiteBundle:Menu');
		$menuContent = $repo->findOneBy(array("id"=>$id));
		$menu = "<ul>\n";
		foreach($menuContent->getContent() as $m){
			$menu .= "<li><a href='".$m->path."' >".$m->linkName."</a></li>\n";
		}
		$menu .= "</ul><br>\n";
		return $this->render('CmsWebSiteBundle:WebSite:default/settings/menu/renderMenu.html.twig',
				array("menu"=>$menu));
	}
	
	public function selectMenuWysiwygAction(Request $request)
	{
			
		$repo = $this->getDoctrine()
			->getRepository('CmsWebSiteBundle:Menu');
		$menuList = $repo->findAll();
		
		$from = $request->query->get('from');
		return $this->render('CmsWebSiteBundle:WebSite:default/settings/menu/selectMenuWysiwyg.html.twig',array ("menuList"=> $menuList,"from" => $from));
	}
	

}

?>