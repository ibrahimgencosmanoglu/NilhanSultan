<?php

	function _seo($url) {
		
		$tr = array("ş","Ş","ı","I","İ","ğ","Ğ","ü","Ü","ö","Ö","Ç","ç","â","Â","û","Û","î","Î","î","Î","’","'","(",")","/",":",",");
		$en = array("s","s","i","i","i","g","g","u","u","o","o","c","c","a","a","u","u","i","i","i","i","","","","","-","-","");
		$url = str_replace($tr, $en, $url);
		$url = strtolower($url);
		$url = preg_replace("/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/", "", $url);
		$url = preg_replace("/\s+/", "-", $url);
		$url = preg_replace("|-+|", "-", $url);
		$url = preg_replace("/#/", "", $url);
		$url = preg_replace("/&/", "", $url);
		$url = str_replace(".", "", $url);
		$url = str_replace("--", "-", $url);		
		$url = trim($url, "-");
		
		return $url;
		
	}

?>