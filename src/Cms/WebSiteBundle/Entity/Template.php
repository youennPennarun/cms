<?php
	
	namespace Cms\WebSiteBundle\Entity;
	use Symfony\Component\HttpFoundation\File\UploadedFile;
	use Symfony\Component\Validator\Constraint;
	use Symfony\Component\Validator\ConstraintValidator;
    
	use Doctrine\ORM\Mapping as ORM;

	/**
	 * @ORM\Entity
	 * @ORM\Table(name="templates")
	 */
	class Template {
	
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
		 * @ORM\Column(name="path",type="string", length=255)
		 */
		protected $path;
		
		/**
		 * @ORM\Column(name="variables",type="array", length=999)
		 */
		protected $variableArray;
		/**
		 * @ORM\Column(name="assets",type="array", length=999)
		 */
		protected $assetsString;
			
			
			public function analyseFile(){
				$assets = array();
				$variable = array();
				$images = array();
				
				$regexpVar = "({{([^\(]*)}})";
				$regexpAsset = "({{asset\(['\"](.*)['\"]\)}})";
				$regexpLinkSrc = '(< *link[^>]*href *= *["\']?([^"\']*).*>)';
				$regexpScriptSrc = '(< *script[^>]*src *= *["\']?([^"\']*).*>)';
				
				$regexpImgSrc = '(< *img[^>]*src *= *["\']?([^"\']*).*>)';
				$regexpImgClass = '(< *img[^>]*class *= *["\']?([^"\']*).*>)';
				$regexpImgId = '(< *img[^>]*id *= *["\']?([^"\']*).*>)';
				$regexpImgWidth = '(< *img[^>]*width *= *["\']?([^"\' ]*).*>)';
				$regexpImgHeight = '(< *img[^>]*height *= *["\']?([^"\' ]*).*>)';
				$regexpImg = '/.*(<img[^>]+>).*/i';
			
				$handle = fopen($this->path, 'r');//Open file
				$line = 1;
				if ($handle)//If there is no error
				{
					while (!feof($handle))	//while the file isn't ended
					{
						$buffer = fgets($handle);	//we read the line
						$bufferTmp = str_replace(" ","",$buffer);	//we delete the spaces
						if(preg_match($regexpAsset,$bufferTmp,$return)){	//if the line call an assets
							array_push($assets,$return[1]);			//we add the path in the array
						}
						if(preg_match($regexpVar,$bufferTmp,$return)){	//if the line call an variable
							$r=str_replace("+","",$return[1]);
							$r=str_replace("-","",$r);
							array_push($variable,$r);			
						}
						if(preg_match($regexpImg,$buffer,$return) && (preg_match($regexpImgSrc,$buffer,$returnSrc))){	//if the line is an <img> tag
							$img = array();
							$img["src"] = $returnSrc[1];
							if(preg_match($regexpImgId,$buffer,$return))
								$img["id"] = $return[1];
							if(preg_match($regexpImgClass,$buffer,$return))
								$img["class"] = $return[1];
							if(preg_match($regexpImgWidth,$buffer,$return))
								$img["width"] = $return[1];
							if(preg_match($regexpImgHeight,$buffer,$return))
								$img["height"] = $return[1];
							array_push($images,$img);
						}
						if(preg_match($regexpLinkSrc,$buffer,$return)){	//if the line is an <link> tag
								if(!preg_match("(http.*)",$return[1],$retur)){	//if it's a local file
									array_push($assets,$return[1]);			//we add the path in the array
								}
						}
						if(preg_match($regexpScriptSrc,$buffer,$return)){	//if the line is an <link> tag
								if(!preg_match("(http.*)",$return[1],$retur)){	//if it's a local file
									array_push($assets,$return[1]);			//we add the path in the array
								}
						}
						$line++;
					}
					fclose($handle);	//we close the file
				}
				return array("assets" => $assets,"variable"=>$variable,"images"=>$images);
			}
			
			public function analyseCss($cssFilePath){
				$toUpload = array();
				$regexBackgroundImage = "(.*background[^:]*: *url\(([^\)]*).*)";
				$handle = fopen("../".$cssFilePath, 'r');//Open file
				$line = 1;
				if ($handle)//If there is no error
				{
					while (!feof($handle))	//while the file isn't ended
					{
						$buffer = fgets($handle) ;
						if(preg_match($regexBackgroundImage,$buffer,$return)){	//if the line is an background image tag
							array_push($toUpload,$return[1]);
						}
						$line++;
					}
					fclose($handle);
				}
				
				return $toUpload;
			}
			public function editCss($cssFilePath,$toBeReplaced){
				$regexBackgroundImage = "(.*background[^:]*: *url\(([^\)]*).*)";
				$error = !rename("..".$cssFilePath,"..".$cssFilePath.".tmp");	//we make a temp file
				$error = !copy("..".$cssFilePath.".tmp","..".$cssFilePath);	
				$handle = fopen("..".$cssFilePath.".tmp", 'r');
				$th=fopen("../".$cssFilePath, 'w');
				$line = 1;
				if ($handle)
					{
					while (!feof($handle))
					{
						$buffer = fgets($handle);
						
						foreach($toBeReplaced as $oldStr=>$newStr){
							//if(preg_match(".*(".$oldStr.").*",$buffer,$return))
							echo "<br>";
								echo "       old :'".$oldStr."'   ->   new : '".$newStr."'<br>";
							echo "<br>";
								$buffer=str_replace($oldStr,$newStr,$buffer);
						}
						fwrite($th, $buffer);
						$line++;
					}
					
				/*Closing files*/
				fclose($handle);
				fclose($th);
				unlink("..".$cssFilePath.".tmp");		// delete the tmp file
				}
				
			}
			
			public function editFile($linesToBeReplaced,$imgToReplace){
				$nameCut = preg_split("[\\/]",$this->path);
				$path = "";
				foreach($nameCut as $n){	//re-writing of the path
					if(!preg_match("(.*\..*)",$n)){
						$path = $path.$n."/";
					}
				}
				$error = !rename($this->path,$this->path.".tmp");	//we make a temp file
				if($error){
					return;
				}else{		//if there is no error	
					$error = !copy($this->path.".tmp",$this->path);	
					$regexpVar = "({{([^\(]*)}})";
					$regexpHead = "([ ]*< *head *>[ ]*)";
					$regexpImgSrc = '(< *img[^>]*src *= *["\']?([^"\']*).*>)';
					$regexpImg = '/(.*(<img[^>]+>).*)/i';
					$regexpStartBody = "([ ]*< *body *>[ ]*)";
					$regexpEndBody = "([ ]*< */body *>[ ]*)";
					$nn = 0;
					
					$handle = fopen($this->path.".tmp", 'r');
					$th=fopen($this->path, 'w');
					$line = 1;
					if ($handle)
					{
						while (!feof($handle))
						{
							$buffer = fgets($handle) ;
							$bufferTmp = str_replace(" ","",$buffer);	//we delete the spaces
							if(preg_match($regexpVar,$bufferTmp,$return)) {
								$r=str_replace("+","",$return[1]);
								$r=str_replace("-","",$r);
								$buffer = str_replace($return[1],$r."|raw",$buffer);
							}
							if(preg_match($regexpHead,$bufferTmp,$return)) {
								$buffer = $buffer."\r\n"."{% include 'CmsWebSiteBundle:WebSite:default/includes/includes.html.twig' %}"."\r\n"; //add an include used to make the new page
							}
							if(preg_match($regexpStartBody,$bufferTmp,$return)) {
								$buffer = $buffer."\r\n"."{% include 'CmsWebSiteBundle:WebSite:default/includes/menu/adminTopBar.html.twig' %}"; //add an include used to make the new page
							}
							if(preg_match($regexpEndBody,$bufferTmp,$return)) {
								$buffer = "{% include 'CmsWebSiteBundle:WebSite:default/includes/newPageForm.html.twig' %}"."\r\n".$buffer; //add an include used to make the new page
							}
							if(preg_match($regexpImg,$buffer,$return) && (preg_match($regexpImgSrc,$buffer,$returnSrc))){	//if the line is an <img> tag
								if(in_array($returnSrc[1],$imgToReplace)){
									$buffer = str_replace($return[2],"{{ img".$nn." | raw }}",$buffer);
									$nn++;
								}								
							}
							foreach($linesToBeReplaced as $oldStr=>$newStr){
								//if(preg_match(".*(".$oldStr.").*",$buffer,$return))
									$buffer=str_replace($oldStr,$newStr,$buffer);
							}
							fwrite($th, $buffer);
							$line++;
						}
						/*Closing files*/
						fclose($handle);
						fclose($th);
						unlink($this->path.".tmp");		// delete the tmp file
					}
				
				}
			
			}
			
			
			public function toDBPreparation($variable){
				$this->variableArray = $variable;
			}
						
			
			
			
			
			
			// public function __sleep()
			// {
				// $ref   = new \ReflectionClass(__CLASS__);
				// $props = $ref->getProperties(\ReflectionProperty::IS_PROTECTED);
				 
				// $serialize_fields = array();
					 
				// foreach ($props as $prop) {
					// $serialize_fields[] = $prop->name;
				// }
				
				// return $serialize_fields;
			// }
			
		


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

    /**
     * Set path
     *
     * @param string $path
     * @return Template
     */
    public function setPath($path)
    {
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
     * Set variableArray
     *
     * @param array $variableArray
     * @return Template
     */
    public function setVariableArray($variableArray)
    {
        $this->variableArray = $variableArray;
    
        return $this;
    }

    /**
     * Get variableArray
     *
     * @return array 
     */
    public function getVariableArray()
    {
        return $this->variableArray;
    }

    /**
     * Set assetsString
     *
     * @param array $assetsString
     * @return Template
     */
    public function setAssetsString($assetsString)
    {
        $this->assetsString = $assetsString;
    
        return $this;
    }

    /**
     * Get assetsString
     *
     * @return array 
     */
    public function getAssetsString()
    {
        return $this->assetsString;
    }
}