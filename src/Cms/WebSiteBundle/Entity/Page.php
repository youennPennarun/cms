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
		 * @ORM\Column(name="path",type="string", length=255)
		 */
		protected $path;
		
		/**
		 * @ORM\Column(name="template",type="string", length=255)
		 */
		protected $template;
		
		/**
		 * @ORM\Column(name="content",type="array", length=9999)
		 */
		protected $content;
		
		/**
		 * @ORM\Column(name="categories",type="array", length=9999)
		 */
		protected $categories = array();
		
		/**
		 * @var date $birthday
		 *
		 * @ORM\Column(name="publishingDate", type="string", nullable=true)
		 */
		private $publishingDate;
		/**
		 * @ORM\Column(name="isIndex",type="boolean", length=255)
		 */
		protected $isIndex = false;
		
		
		/**
		 * @ORM\Column(name="isReady",type="boolean", length=255)
		 */
		protected $isReady = true;
		
		
	
	
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
     * Set path
     *
     * @param string $path
     * @return Page
     */
    public function setPath($path)
    {
	
		$path = str_replace("  "," ",$path);
		$path = str_replace(" ","-",$path);
		$path = strtr($path,'àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ',
					'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
		echo "<h1>".$path."</h1>";
        $this->path = $path;
    
        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
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
     * Set categories
     *
     * @param array $categories
     * @return Page
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    
        return $this;
    }

    /**
     * Get categories
     *
     * @return array 
     */
    public function getCategories()
    {
        return $this->categories;
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
	
	/**
     * Set isIndex
     *
     * @param date $publishingDate
     * @return Page
     */
    public function setPublishingDate($publishingDate)
    {
		$this->publishingDate = $publishingDate;
        return $this;
    }

    /**
     * Get publishingDate
     *
     * @return date 
     */
    public function getPublishingDate()
    {
		return $this->publishingDate;
    }
	
	/**
     * Set isReady
     *
     * @param boolean $isReady
     * @return Page
     */
    public function setIsReady($isReady)
    {
        $this->isReady = $isReady;
    
        return $this;
    }

    /**
     * Get isReady
     *
     * @return boolean 
     */
    public function getIsReady()
    {
        return $this->isReady;
    }
}