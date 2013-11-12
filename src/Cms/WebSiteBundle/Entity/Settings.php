<?php
	
	namespace Cms\WebSiteBundle\Entity;
	use Symfony\Component\Validator\Constraint;
	use Symfony\Component\Validator\ConstraintValidator;
    
	use Doctrine\ORM\Mapping as ORM;

	/**
	 * @ORM\Entity
	 * @ORM\Table(name="settings")
	 */
	class Settings{
		/**
		 * @ORM\Id
		 * @ORM\Column(type="string", length=25, unique=true)
		 */
		protected $id;
	
		/**
		 * @ORM\Column(type="boolean", length=25, unique=false, nullable=true)
		 */
		protected $ini;
	
		public function __construct($id)
		{
			$this->id=$id;
			$this->ini=false;
		}
	
    /**
     * Set ini
     *
     * @param string $ini
     * @return Settings
     */
    public function setIni($ini)
    {
        $this->ini = $ini;
    
        return $this;
    }

    /**
     * Get ini
     *
     * @return string 
     */
    public function getIni()
    {
        return $this->ini;
    }

    /**
     * Set id
     *
     * @param string $id
     * @return Settings
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }
}