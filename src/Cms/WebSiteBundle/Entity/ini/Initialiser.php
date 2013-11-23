<?php
	
	namespace Cms\WebSiteBundle\Entity\ini;
	use Symfony\Component\HttpFoundation\File\UploadedFile;
	use Symfony\Component\Yaml\Parser;
	use Symfony\Component\Yaml\Dumper;
	use Cms\WebSiteBundle\Entity\Settings;

	class Initialiser{
	
		private $controller;
		private $parametersFile;
		
			
		public function __construct($controller	){
			$this->controller = $controller;
			$this->parametersFile = $controller->get('kernel')->getRootDir().'/config/parameters.yml';
			
		}
		
		public function autorised(){
			$yaml = new Parser();
			$values = $yaml->parse(file_get_contents($this->parametersFile));
			if(!isset($values["parameters"]["initialised"])){
				$values["parameters"]["initialised"] = false;
				$dumper = new Dumper();
				$yaml = $dumper->dump($values,3);
				file_put_contents($this->parametersFile, $yaml);
			}
			/*if($values["parameters"]["initialised"] == 'false'){
				return true;
			}else{
				return false;
			}*/
				return true;
		}	
		
		public function isInitialized(){
			$yaml = new Parser();
			$values = $yaml->parse(file_get_contents($this->parametersFile));
			$values["parameters"]["initialised"] = true;
			$dumper = new Dumper();
			$yaml = $dumper->dump($values,3);
			file_put_contents($this->parametersFile, $yaml);
			
		
		}
	
		public function setDB(){
			$entityManager = $this->controller->getDoctrine()->getManager();
			$schemaTool = new \Doctrine\ORM\Tools\SchemaTool($entityManager);
			$classes = $entityManager->getMetadataFactory()->getAllMetadata();
			$schemaTool->updateSchema($classes);
		}
		public function setDBParam($data){
        global $kernel;
			$error = !copy($this->parametersFile,$this->parametersFile.".old");
			if(!$error){
				$yaml = new Parser();
				try {
					$values = $yaml->parse(file_get_contents($this->parametersFile));
					$values["parameters"]["database_host"] = $data["database_host"];
					$values["parameters"]["database_port"] = $data["database_port"];
					$values["parameters"]["database_name"] = $data["database_name"];
					$values["parameters"]["database_user"] = $data["database_user"];
					$values["parameters"]["database_password"] = $data["database_password"];
					$values["parameters"]["secret"] = md5(uniqid(rand(), true));
					$dumper = new Dumper();
					$yaml = $dumper->dump($values,3);
					file_put_contents($this->parametersFile, $yaml);
					if ('AppCache' == get_class($kernel)) {
						$kernel = $kernel->getKernel();
					}
					//$kernel->getContainer()->setParameter("database_name",$data["database_name"]);
				} catch (ParseException $e) {
					printf("Unable to parse the YAML string: %s", $e->getMessage());
					$error = true;
				}	
			}
		}
		
		
		
	
	}