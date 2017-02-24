<?
	$bad_words = @file("words.txt");
	function censor($text){
	$rop='*'; 
		for ($i=1;$i<strlen($text);$i++){
			$replace .= $rop;
		}
		$text = substr_replace($text, $replace, 1);
		return $text;
	}
?>