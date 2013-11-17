<?php
	
	namespace Cms\WebSiteBundle\Entity;
	use Symfony\Component\HttpFoundation\File\UploadedFile;
	use Symfony\Component\Validator\Constraint;
	use Symfony\Component\Validator\ConstraintValidator;
    
	use Doctrine\ORM\Mapping as ORM;

	/**
	 * @ORM\Entity
	 * @ORM\Table(name="categories")
	 */
	class Categories {
	
		/**
		 * @ORM\Id
		 * @ORM\Column(type="integer")
		 * @ORM\GeneratedValue(strategy="AUTO")
		 */
		protected $id;
		
		/**
		 * @ORM\Column(name="name",type="string", length=255)
		 */
		protected $name;
	
	
		 /**
		 * Get id
		 *
		 * @return integer 
		 */
		public function getId()
		{
			return $this->id;
		}

		/**
		 * Set name
		 *
		 * @param string $name
		 * @return Template
		 */
		public function setName($name)
		{
			$this->name = $name;
		
			return $this;
		}

		/**
		 * Get name
		 *
		 * @return string 
		 */
		public function getName()
		{
			return $this->name;
		}
	
	
	
	}