<?php
	
	namespace Cms\WebSiteBundle\Entity;
	//use Symfony\Component\HttpFoundation\File\UploadedFile;
    
	class Uploader {
			private $pathList = array(
										"template" => array ("/src/Cms/WebSiteBundle/Resources/views/WebSite","html.twig"),
										"css" => array ("\web\css","css"),
										"javascript" => array ("\web\js","js")
										);
			protected $isTemplate;
			protected $name;
			protected $file;
			protected $fullName;
			protected $absolutePath;
			protected $path;
			protected $root = "./../";
			protected $type;
			
			
			public function setName($name){
				$this->name = $name;
			}
			public function getName(){
				return $this->name;
			}
			public function setFile($file){
				$this->file = $file;
			}
			public function getFile(){
				return $this->file;
			}
			public function getFullName(){
				return $this->fullName;
			}
			public function getAbsolutePath(){
				return $this->absolutePath;
			}
			public function setRoot($root){
				$this->root="./../";
			}
			public function setType($type){
				$this->type=$type;
			}
			public function setPath($path){
				$this->path=$path;
			}
		
		public function uploadTemplate(){
			$this->type = "html.twig";
			$this->fullName = $this->name.'.'.$this->type;
			$this->path = "/src/Cms/WebSiteBundle/Resources/views/WebSite/";
			$this->absolutePath = $this->root."/src/Cms/WebSiteBundle/Resources/views/WebSite/".$this->name.'.'.$this->type;
			
			$this->upload();
		}
		
		public function uploadImage($file){
			$this->file=$file;
			$this->name=$this->file->getClientOriginalName();
			$this->type=$this->file->guessExtension();
			$this->path="web/uploads";
			$this->fullName = $this->name;
			$this->absolutePath = $this->root."".$this->path.$this->name;	
			
			$this->upload();
		}
		
		public function uploadAssets($file,$name,$templateName){
			$this->file = $file;
			$this->fullName = $name;
			
			$tmp = explode(".",$name);
			$extension =  $tmp[count($tmp)-1];
			$this->path = "web/uploads/assets/".$templateName."/".$extension;
			
			if($this->upload()){
				return "web/uploads/assets/".$templateName."/".$extension."/".$name;
			}else{
				return "";
			}
			
		}
		
		public function uploadFile(){
			$this->fullName = $this->name;
			$this->absolutePath = $this->root."".$this->path.$this->name.'.'.$this->type;
			
			$this->upload();
		}
		
		
		
		private function upload()
		{
			$this->root="./../";	// ini the root path ( "." is the app folder )
			if (null !== $this->file) {		// if the file to upload isn't null
				$this->file->move($this->root.$this->path, $this->fullName);

				unset($this->file);
				return true;
			}else{
				return false;
			}
		}
			
	}
	
?>