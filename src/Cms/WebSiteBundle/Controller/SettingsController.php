<?php
	namespace Cms\WebSiteBundle\Controller;
	 
	use Cms\WebSiteBundle\Controller\preControllerController;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Session\Session;
	use Cms\WebSiteBundle\Entity\Template;
	use Cms\WebSiteBundle\Entity\Uploader;
	use Cms\WebSiteBundle\Entity\Page;
	use Cms\WebSiteBundle\Entity\Text;
	use Cms\WebSiteBundle\Entity\utils\DoctrineHelper;
	 
	class SettingsController extends Controller
	{
		public function indexAction(){
			$dH = new DoctrineHelper($this);
			$content['warning'] = "";
			if($dH->findOneBy(new Page,array("isIndex"=>true)) == null){
				$content['warning'] = "No index is defined";
			}
			return $this->render('CmsWebSiteBundle:WebSite:default/settings/settings.html.twig',$content);
		}
	}
?>