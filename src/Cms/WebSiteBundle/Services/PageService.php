<?php
	namespace Cms\WebSiteBundle\Services;
	use Doctrine\ORM\EntityManager;
	
	class PageService
	{
		protected $em;

		public function __construct(EntityManager $em)
		{
			$this->em = $em;
		}
		public function createVarEditor_NewPage($variableArray){
			$varList = array();
			$varEditor = array();
			$varType = array();
			$i=0;
			$o=0;			
			$regexMenu = "(CMS_MENU_[1-9]+)";
			foreach($variableArray as $varName=>$values){
				$varList[] = $varName; 
				if( $values['type'] == 'text'){
					if(preg_match_all($regexMenu, $varName, $matches)){
						$varEditor[$varName] = "<div class='CMS_MENU_EDITABLE' cmsId='val-".$i."'>ADD A MENU</div>";
					}else{
						$varEditor[$varName] = "<div class='hideBox'><textarea class='ckeditor' id='val-".$i."'><p>".$varName."</p></textarea ></div>";
					}
					$varType[] = "text";
				}else if($values['type'] == 'image'){
					if(isset($values['options']['id'])){
						$id= $values['options']['id'];
					}else{
						$id = '';
					}
					if(isset($values['options']['class'])){
						$class= $values['options']['class'];
					}else{
						$class= '';
					}
					$varEditor[$varName] = "<img src='/img.jpg' class='".$class."' id='".$id."' width='".$values['options']['width']."' height='".$values['options']['height']."' cmsClass='editable-img' cmsId='val-".$i."'>";
					$varType[] = "image";
				}
				$i++;
			}
		return array("varList"=>$varList,"varEditor"=>$varEditor,"varType"=>$varType);
	}
	
	
	
	
	public function createVarEditor_EditPage($page){
		$varList = array();
		$varEditor = array();
		$i=0;
		$o=0;			
		$regexMenu = "(CMS_MENU_[1-9]+)";
		$content = $page->getContent();
		foreach($content as $varName => $id){
			$repo = $this->em->getRepository('CmsWebSiteBundle:Text');
			$text = $repo->findOneBy(array("id"=>$id));
			if( $text->getType() == 'text'){
					if(preg_match_all($regexMenu, $varName, $matches)){
						$content[$varName] = "<div class='CMS_MENU_EDITABLE' cmsId='val-".$i."'>".$text->getValue()."</div>";
					}else{
						$content[$varName] = "<div class='hideBox'><textarea class='ckeditor' id='val-".$i."'>".$text->getValue()."</textarea ></div>";
					}
						
					
				}else if($text->getType() == 'image'){
					$content[$varName] = $text->getValue();
				}
				$i++;
		}
		return $content;
	}
	
	public function createVarEditor_ChangeTemplate($variableArray){
			$varList = array();
			$varEditor = array();
			$varType = array();
			$i=0;
			$o=0;			
			$regexMenu = "(CMS_MENU_[1-9]+)";
			foreach($variableArray as $varName=>$values){
				$varList[] = $varName; 
				if( $values['type'] == 'text'){
					if(preg_match_all($regexMenu, $varName, $matches)){
					echo "<h1>htgrfdx</h1>";
						$varEditor[$varName] = "<div id='droppable' class='CMS_MENU_EDITABLE' cmsId='val-".$i."'>ADD A MENU</div>";
					}else{
						$varEditor[$varName] = "<span id='' class='droppableText varBox'><span class='here'><span class='old'>".$varName."</span></span></span>";
					}
					$varType[] = "text";
				}else if($values['type'] == 'image'){
					if(isset($values['options']['id'])){
						$id= $values['options']['id'];
					}else{
						$id = '';
					}
					if(isset($values['options']['class'])){
						$class= $values['options']['class'];
					}else{
						$class= '';
					}
					$varEditor[$varName] = 	"<span id='' class='droppableImage varBox'  style='display: block'><span class='here'  style='display: block'><span class='old'  style='display: block'>".
											"<img src='/img.jpg' class='".$class."' id='droppable ".$id."' width='".$values['options']['width']."' height='".$values['options']['height']."' cmsClass='editable-img' cmsId='val-".$i."'>".
											"</span></span></span>";
					"";
					$varType[] = "image";
				}
				$i++;
			}
		return array("varList"=>$varList,"varEditor"=>$varEditor,"varType"=>$varType);
	}
}
?>