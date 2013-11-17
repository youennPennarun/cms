<?php
	
	namespace Cms\WebSiteBundle\Entity\utils;
	use Symfony\Component\Validator\Constraint;
	use Symfony\Component\Validator\ConstraintValidator;
    
class UtilsTemplate {
	
	public function creatVarEditor_NewPage($variableArray){
		$varList = array();
		$varEditor = array();
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
				
			}
			$i++;
		}
	return array("varList"=>$varList,"varEditor"=>$varEditor);
	}
	
}

?>