<?php 
    setlocale(LC_ALL, 'tr_TR');
	
	header('Content-Type: text/html; charset=utf-8');
	header("Content-Type: text/html; charset=utf-8");
	header("Expires: 0");
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
    
    $request 		= $_SERVER['SERVER_NAME'];
    $header 		= $_SERVER['REQUEST_URI'];
    $directory		= $_SERVER['DOCUMENT_ROOT'];
   
    if (session_status() !== PHP_SESSION_ACTIVE) {
		
		session_start();
		
		ob_start();

			//require_once $directory . '/class/construct/include.php';
			
			//_include_all ($directory . '/class/');		
			//_include_all ($directory . '/class/construct/');	
		
			//$_SESSION ['language'] = _language();
		
			require_once $directory . '/settings.php';
		
			include_once $directory . '/public/section.php';
							
		ob_end_flush();
		
	}

?>




