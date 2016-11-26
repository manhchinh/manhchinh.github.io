<?php 
	error_reporting(0);
	$html = file_get_contents('http://giacaphe.com/');
	$dom = new DOMDocument();
	$dom->validateOnParse = true; 
	$dom->loadHTML($html);   
	$dom->preserveWhiteSpace = false;
	$belement = $dom->getElementById("gianoidia");
	echo $dom->saveHTML($belement);
?>