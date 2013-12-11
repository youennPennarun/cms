<?php
	
	namespace Cms\WebSiteBundle\Entity\utils;
	use Symfony\Component\Validator\Constraint;
	use Symfony\Component\Validator\ConstraintValidator;
	use Cms\WebSiteBundle\Entity\Template;
	use Cms\WebSiteBundle\Entity\Page;
	use Cms\WebSiteBundle\Entity\Text;
	use Cms\WebSiteBundle\Entity\Categories;
    
	class PageUtils {
		private $doctrine;
		private $logger;
		
		
		public function __construct($doctrine,$logger){
			$this->doctrine = $doctrine;
			$this->logger = $logger;
		}
		
		
		public function newPage($data,$template,$varList,$varType){
			$repo = $this->doctrine
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
					$text->setType($varType[$i]);
					$em = $this->doctrine->getManager();
					$em->persist($text);
					$em->flush();
					
					$var[$varList[$i]] = $text->getId();
					$i++;
				}
				$newPage->setContent($var);
				$em = $this->doctrine->getManager();
				$newPage->setContent($var);
				
				if($data["publishingDate"] == ""){
					$data["publishingDate"] = null;
				}else if(strtotime($data["publishingDate"]) == false){
					$data["publishingDate"] = null;
				}
				$newPage->setPublishingDate($data["publishingDate"]);
				if( $data["isIndex"] == true){
					$this->setAsIndex($newPage);
				}
				echo gettype ($data["publishingDate"]);
				$em->persist($newPage);
				$em->flush();
				$this->logger->info("new page '".$data['pageName']."' succesfully created");
			}else{
				$this->logger->info("there is already a page named '".$data['pageName']."' ");
				return null;
			}
			return $newPage;
		}
		
		
		public function setAsIndex($page){
			$em = $this->doctrine->getManager();
			$repo = $this->doctrine
								->getRepository('CmsWebSiteBundle:Page');
			$pages = array();
			$pages = $repo->findBy(array("isIndex"=>true));
			foreach($pages as $p){
				$p->setIsIndex(false);
			}
			$page->setIsIndex(true);	
		}
		
		
	}

?>