<?php

	//$city=$_GET['city'];
	//$city=str_replace(" ",'',$city);
	$url=$_GET['url'];
	
	
	$html = file_get_contents($url);
	
	preg_match('/(<body>)(.+?)(<\/body)/s',$html,$m);
	echo $m[0];

?>
