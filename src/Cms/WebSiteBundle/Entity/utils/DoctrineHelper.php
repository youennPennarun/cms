<?php
	
	namespace Cms\WebSiteBundle\Entity\utils;
	use Symfony\Component\HttpFoundation\File\UploadedFile;
	use Symfony\Component\Validator\Constraint;
	use Symfony\Component\Validator\ConstraintValidator;
    
	
	class DoctrineHelper{
	
		protected $controller;
		protected $logger;
		
		public function __construct($controller){
			$this->controller = $controller;
			$this->logger = $this->controller->get('logger');
		}
		
		public function find($object,$key){
			$class = get_class($object);
			$class = explode("\\",$class)[count(explode("\\",$class))-1];
			$result = null;
			try {
				$repo = $this->controller->getDoctrine()
							->getRepository('CmsWebSiteBundle:'.$class);
				$result = $repo->find($key);
			} catch (\Doctrine\Common\Persistence\Mapping\MappingException $e) {
				$this->logger->err('Doctrine\\Common\\Persistence\\Mapping\\MappingException : class '.$class.' is unknown');
			}

			return $result;
		}
		
		public function findAll($object){
			$class = get_class($object);
			$class = explode("\\",$class)[count(explode("\\",$class))-1];
			$result = null;
			
			try {
				$repo = $this->controller->getDoctrine()
							->getRepository('CmsWebSiteBundle:'.$class);
				$result = $repo->findAll();
			} catch (\Doctrine\Common\Persistence\Mapping\MappingException $e) {
				$this->logger->err('Doctrine\\Common\\Persistence\\Mapping\\MappingException : class '.$class.' is unknown');
			}

			return $result;
		}
		
		
		public function findOneBy($object,$values){
			$class = get_class($object);
			$class = explode("\\",$class)[count(explode("\\",$class))-1];
			$result = null;
			try {
				$repo = $this->controller->getDoctrine()
							->getRepository('CmsWebSiteBundle:'.$class);
				$result = $repo->findOneBy($values);
			} catch (\Doctrine\Common\Persistence\Mapping\MappingException $e) {
				$this->logger->err('Doctrine\\Common\\Persistence\\Mapping\\MappingException : class '.$class.' is unknown');
			}

			return $result;
		}
		
		public function remove($object){
			$class = get_class($object);
			$class = explode("\\",$class)[count(explode("\\",$class))-1];
			$result = null;
			try {
				$em = $this->controller->getDoctrine()->getManager();
				$result = $em->remove($object);
				$em->flush();
			} catch (\Doctrine\Common\Persistence\Mapping\MappingException $e) {
				$this->logger->err('Doctrine\\Common\\Persistence\\Mapping\\MappingException : class '.$class.' is unknown');
			}

			return $result;
		}
	
	
	
	}
	
?>