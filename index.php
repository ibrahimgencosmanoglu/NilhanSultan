<?php 
	//error_reporting(E_ALL);
	//ini_set('error_reporting', 'E_ALL');
	//ini_set('display_errors', TRUE);
	//ini_set('default_charset', "utf-8");

	//setlocale(LC_ALL, 'tr_TR.UTF-8', 'tr_TR', 'tr', 'turkish');

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

	date_default_timezone_set('Europe/Istanbul');

	//require_once $directory . '/extension/mailer/autoload.php';
	
	if (session_status() !== PHP_SESSION_ACTIVE) {
		
		session_start();
		
		ob_start();

			require_once $directory . '/class/construct/include.php';
			
			_include_all ($directory . '/class/');		
			_include_all ($directory . '/class/construct/');	
		
			$_SESSION ['language'] = _language();
		
			require_once $directory . '/settings.php';		
		
			if ($under_construction == 'true') {
				
				if ((isset($_SESSION['administration']))) {
					
					include_once $directory . '/public/section.php';													
					
				} else {
					
					if (isset($_SESSION['erkajans']) && $_SESSION['erkajans'] == 'true' && $erkajans == 'true') {

						include_once $directory . '/public/section.php';								

					} else {

						if ($header == '/' . _seo(_translate('page', 'yapım aşamasında')) || $header == '/erkajans' || $header == '/administration') {

							_under_construction($erkajans);

						} else {

							header('Location: /' . _seo(_translate('page', 'yapım aşamasında')));

						}

					}
					
				}

			} else {

				include_once $directory . '/section.php';								

			}  
										
		ob_end_flush();
		
	}


		
?>