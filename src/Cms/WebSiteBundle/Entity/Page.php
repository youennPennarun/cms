<?php
	
	namespace Cms\WebSiteBundle\Entity;
	use Symfony\Component\Validator\Constraint;
	use Symfony\Component\Validator\ConstraintValidator;
    
	use Doctrine\ORM\Mapping as ORM;

	/**
	 * @ORM\Entity
	 * @ORM\Table(name="pages")
	 */
	class Page {
	
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
		 * @ORM\Column(name="template",type="string", length=255)
		 */
		protected $template;
		
		/**
		 * @ORM\Column(name="content",type="array", length=9999)
		 */
		protected $content;
		
		/**
		 * @ORM\Column(name="isIndex",type="boolean", length=255)
		 */
		protected $isIndex = false;
		
		
	
	
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
     * @return Page
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

    /**
     * Set template
     *
     * @param string $template
     * @return Page
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    
        return $this;
    }

    /**
     * Get template
     *
     * @return string 
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set content
     *
     * @param array $content
     * @return Page
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return array 
     */
    public function getContent()
    {
        return $this->content;
    }
	
	/**
     * Set isIndex
     *
     * @param boolean $isIndex
     * @return Page
     */
    public function setIsIndex($isIndex)
    {
        $this->isIndex = $isIndex;
    
        return $this;
    }

    /**
     * Get isIndex
     *
     * @return boolean 
     */
    public function getIsIndex()
    {
        return $this->isIndex;
    }
}