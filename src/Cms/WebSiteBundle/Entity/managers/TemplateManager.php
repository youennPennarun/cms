<?php
	
	namespace Cms\WebSiteBundle\Entity\managers;
	use Symfony\Component\HttpFoundation\File\UploadedFile;
	use Symfony\Component\Validator\Constraint;
	use Symfony\Component\Validator\ConstraintValidator;
    
	class TemplateManager {
	
	
		
		public function removeTemplateAssets($templateName){
			
			$directory = "./uploads/assets/".$templateName;
			$this->removeDirectory($directory);
			
		}
		
		public function removeDirectory($dir){
			$dir_content = scandir($dir);
			if($dir_content !== FALSE){
				foreach ($dir_content as $entry)
				{
					if(!in_array($entry, array('.','..'))){
						$entry = $dir . '/' . $entry;
						if(!is_dir($entry)){
							unlink($entry);
						}
						else{
							$this->removeDirectory($entry);
						}
					}
				}
			}
			rmdir($dir);
		  }
	
	}
	
	
?>