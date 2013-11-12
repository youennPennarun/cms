<?php
	namespace Cms\WebSiteBundle\Entity;
	use Symfony\Component\Validator\Constraint;
	use Symfony\Component\Validator\ConstraintValidator;
	
	use Doctrine\ORM\Mapping as ORM;
	/**
	 * @ORM\Entity(repositoryClass="Cms\WebSiteBundle\Entity\Repository\ImageRepository")
	 * @ORM\Table(name="images")
	 */
	Class Image {
	
		/**
		 * @ORM\Id
		 * @ORM\Column(type="integer")
		 * @ORM\GeneratedValue(strategy="AUTO")
		 */
		protected $id;
		
		/**
		 * @ORM\Column(name="name",type="string", length=999)
		 */
		protected $name;
		/**
		 * @ORM\Column(name="path",type="string", length=999)
		 */
		protected $path;
		
		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}
		public function getName(){
			return $this->name;
		}
		public function setName($name){
			$this->name = $name;
		}
		public function getPath(){
			return $this->path;
		}
		public function setPath($path){
			$this->path = $path;
		}
		
	
	}