<?php

	namespace Portfolio\WebSiteBundle\Entity;
	class Reader {

		public function readFile($path,&$line){
			/*Ouverture du fichier en lecture seule*/
			$handle = fopen($path, 'r');
			/*Si on a réussi à ouvrir le fichier*/
			if ($handle)
			{
				/*Tant que l'on est pas à la fin du fichier*/
				while (!feof($handle))
				{
					/*On lit la ligne courante*/
					$buffer = fgets($handle);
					/*On l'affiche*/
					$line = $buffer;
				}
				/*On ferme le fichier*/
				fclose($handle);
			}
		}
	}
?>