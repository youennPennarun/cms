<?php
	
	namespace Cms\WebSiteBundle\Entity;
	use Symfony\Component\HttpFoundation\File\UploadedFile;
	use Symfony\Component\Validator\Constraint;
	use Symfony\Component\Validator\ConstraintValidator;
    
	use Doctrine\ORM\Mapping as ORM;

	/**
	 * @ORM\Entity(repositoryClass="Cms\WebSiteBundle\Entity\Repository\TextRepository")
	 * @ORM\Table(name="text")
	 */
	class Text {
	
		/**
		 * @ORM\Id
		 * @ORM\Column(type="integer")
		 * @ORM\GeneratedValue(strategy="AUTO")
		 */
		protected $id;
		
		/**
		 * @ORM\Column(name="value",type="string", length=9999)
		 */
		protected $value;
		
		/**
		 * @ORM\Column(name="type",type="string", length=255, nullable = true)
		 */
		protected $type;
		
	
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
     * Set value
     *
     * @param string $value
     * @return Text
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }
	
	/**
     * Set value
     *
     * @param string $value
     * @return Text
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
}