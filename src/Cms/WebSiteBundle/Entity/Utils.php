<?php

	namespace Cms\WebSiteBundle\Entity;
	use Symfony\Component\Validator\Constraint;
	use Symfony\Component\Validator\ConstraintValidator;
    
	class Utils {
		public function filelist(){
		$folder = "./../";
		$dossier = opendir($folder);
		while ($Fichier = readdir($dossier)) {
		  if ($Fichier != "." && $Fichier != "..") {
			$nomFichier = $folder."/".$Fichier;
			echo $nomFichier."<BR>";
		  }
		}
		closedir($dossier);
		}
	}

?>