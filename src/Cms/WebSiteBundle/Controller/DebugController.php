<?php
	namespace Cms\WebSiteBundle\Controller;
	 
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Session\Session;
	use Cms\WebSiteBundle\Entity\Error;
	 
	class DebugController extends BaseController 
	{
		public function getLogAction(){
			$errorList = array();
			$prodLogPath = $this->get('kernel')->getRootDir()."/logs/prod.log";
			$str = "";
			$file_handle = fopen($prodLogPath, "r");
			while (!feof($file_handle)) {
			   $line = fgets($file_handle);
			   if($line != "" || $line != " " ){
					array_push($errorList,new Error($line));
				}
			}
			fclose($file_handle);
			

			
			return $this->render('CmsWebSiteBundle:WebSite:default/settings/debug/getLog.html.twig',array ("errorList"=> $errorList));
		
		}
		
		public function clearLogAction(){
			$prodLogPath = $this->get('kernel')->getRootDir()."/logs/prod.log";
			 $arr = file($prodLogPath);
			echo $lines."<br>";
			$fh = fopen($prodLogPath, 'w');
			$i = 0;
			
		//while ($i < $lines) {
			   fwrite($fh,"");
			   $i++;
			//}

			return $this->redirect($this->generateUrl('Settings-getLog'));
			
		}
	
	
	
	}
	
?>