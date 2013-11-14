<?php
	
	namespace Cms\WebSiteBundle\Entity;
	use Symfony\Component\Validator\Constraint;
	use Symfony\Component\Validator\ConstraintValidator;
use Doctrine\Common\Collections\ArrayCollection;
    
	use Doctrine\ORM\Mapping as ORM;

	/**
	 * @ORM\Entity
	 * @ORM\Table(name="menu")
	 */
	class Menu {
	
		/**
		 * @ORM\Id
		 * @ORM\Column(name="id",type="integer")
		 * @ORM\GeneratedValue(strategy="AUTO")
		 */
		protected $id;
		/**
		 * @ORM\Column(name="name",type="string", length=255)
		 */
		protected $name;
		
				
		/**
		 * @ORM\Column(name="content",type="array", length=9999)
		 */
		protected $content;
		
		public function __construct(){
			$this->content = new ArrayCollection();
		}
	
    public function getId()
    {
        return $this->id;
    }
	
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }
    public function getName()
    {
        return $this->name;
    }
	
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }
    public function getContent()
    {
        return $this->content;
    }
	
	
	
}