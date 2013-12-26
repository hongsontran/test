<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	$phrase = '　'; // note the space
	$textbody = '　';
	
	// $str uses multi-byte chars (isn't English)
	 $specialChars = preg_quote('!@#$%^&*()/*-+=[]{};:\'\S",.<>?', '/');
	 $pattern = '/
		 ^[
		 \w\s
		 ' . $specialChars . '
		 ]*$
		 /xu';
		 //echo strlen($textbody[0]).$phrase[0];
	if($textbody[0] == $phrase[0]){
		$textbody = str_replace('　',"",$textbody[0]);
		echo "[".$textbody."]";
	}
	if (!preg_match($pattern, $textbody)) 
	{ 
		$check = false;
		echo  "警告：ニックネームは、特殊の文字を入力してはいけません。"; 
	}
	function mb_trim($string) { 
	  $rtn = mb_ereg_replace("(^\s+)|(\s+$)/us", "\\\\1", $string); 
	  return $rtn; 
	} 
	
	$trimmed = mb_trim($phrase);
	
	//echo "[".str_replace('　',"",$phrase)."]";
?>
<script>
	var text =  '　　　　a　　　　';
	var text2 = 'ab';
	while(text.charCodeAt(0) == 12288){
		text = text.substr(1,text.length);
	};
	while(text.charCodeAt(text.length - 1) == 12288){
		text = text.substr(0,text.length - 2);
	};
	alert("[" +  text + "]");
</script>
</body>
</html>