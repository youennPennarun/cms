<?php
	
	namespace Cms\WebSiteBundle\Entity;
	use Symfony\Component\Validator\Constraint;
	use Symfony\Component\Validator\ConstraintValidator;
    
class Error {
	public $line = "";
	
	public function __construct($l){
		$this->line = $this->style($l);
	}
	
	
	
	public function style($l){
		$regexDate = "(\[[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}\])";
		preg_match($regexDate, $l, $matches);
		foreach($matches as $m){
			$new = "<div style='color:#3333FF;display: inline;'>".$m."</div>";
			$l = str_replace($m,$new,$l);
		}
		
		$regexName = "([a-z]+\.[A-Z]+)";
		preg_match($regexName, $l, $matches);
		foreach($matches as $m){
			$new = "<div style='color:#ff0000;display: inline;'>".$m."</div>";
			$l = str_replace($m,$new,$l);
		}
		
		$regexVal = "(No route found)";
		preg_match($regexVal, $l, $matches);
		foreach($matches as $m){
			$new = "<div style='color:#00ff00;display: inline;'>".$m."</div>";
			$l = str_replace($m,$new,$l);
		}
		
		$regexVal = "(GET [^\"]*)";
		preg_match($regexVal, $l, $matches);
		foreach($matches as $m){
			$new = "<div style='color:#00ff00;display: inline;'>".$m."</div>";
			$l = str_replace($m,$new,$l);
		}
		
		$regexVal = "({.*})";
		preg_match($regexVal, $l, $matches);
		foreach($matches as $m){
			$new = "";
			$l = str_replace($m,$new,$l);
		}
		return $l;
	
	}

	
}

?>