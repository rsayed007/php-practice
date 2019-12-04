<?php 

/**
 * 
 */
class formet{

	public function validation($valid){
		$valid = trim($valid);
		$valid = stripcslashes($valid);
		$valid = htmlspecialchars($valid);
		return $valid;
	}
	public function formetDate($date){
		return date('F j,Y, g:i a', strtotime($date));
	}
	public function textShort($text,$limit=400){
		$text =$text.'';
		$text =substr($text,0, $limit);
		$text =substr($text,0, strrpos($text, ' '));
		$text =$text.'... ';
		return $text;
	}
}


 ?>