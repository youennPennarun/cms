<?php
	namespace Cms\WebSiteBundle\Services;
	use Doctrine\ORM\EntityManager;
	class TestService
	{
		protected $em;

		public function __construct(EntityManager $em)
		{
			$this->em = $em;
		}
		public function helloWorld(){
			echo "<h1>It works!! : ".$this->em->getRepository('CmsWebSiteBundle:Page')->findOneBy(array("id"=>26))->getName()."</h1><br>";
			
		}
	}

?>