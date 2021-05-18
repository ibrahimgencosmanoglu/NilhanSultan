<?php
	function _content ($directory, $supported_file = null) {

		if (!isset($supported_file)) {

			$files = glob($directory . '*.*');

		} else {

			$files = glob($directory . '*.' . $supported_file);

		}

		if (count($files) <> 0) {

			return $files;

		}

	}


	function _include_all ($path, $type = null) {
		
		if (empty($type)) {
			
			$files = _content ($path, 'php');

			foreach ($files as $file) {

				include_once $path . basename($file);

			}
			
		} else {
			
			$files = _content ($path, $type);

			foreach ($files as $file) {

				include_once $path . basename($file);

			}
			
		}
		
	}

	function _request () {
		
		$url = explode('/', $_SERVER['REQUEST_URI']);
		
		return end($url);
		
	}

	
	function _check_language_in_json ($json) {
		
		$json = _decode_json($json);

		foreach ($json as $key => $value) {

			if ($key == $_SESSION['language']) {
				
				return true;
				
			}
			
		}
		
	}


	function include_if_exist_language ($file) {
		
		$path_php = $_SERVER['DOCUMENT_ROOT'] . '/include/landing-page/' . $file . '.php';
		
		$path_json = $_SERVER['DOCUMENT_ROOT'] . '/json/landing-page/' . $file . '.json';		
				
		$include = _check_language_in_json ($path_json);
		
		if ($include == true) {
			
			include_once $path_php;	
			
		}
		
	}

	function _request_language ($section) {
		
		$page = _request();
			
		$page = str_replace('-', ' ', $page);

		if ($_SESSION['language'] <> 'tr') {

			$page = _translate ($section, $page, 'true');
					
			return $page;			
			
		} else {
			
			return $page;			
			
		}
				
	}

	function _include_once ($section, $article = null) {
		
		$uniqe_pages = $_SERVER['DOCUMENT_ROOT'] . '/include/pages/';

		$page = _request_language($section);

		$php_file = _content ($uniqe_pages, 'php');
		
		foreach ($php_file as $php_file_value) {
			
			$php_file_value = str_replace($uniqe_pages, '', $php_file_value);
			
			$php_file_value = str_replace('.php', '', $php_file_value);
			
			$page = _seo($page);
			
			$file = $uniqe_pages . $page . '.php';

			if (file_exists($file)) {
				
				include_once $file; 				
				
			} else {
				
				if ($section == 'default') {
					
					include_once $_SERVER['DOCUMENT_ROOT'] . '/include/landing-page.php';
					
				} else {
					
					if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/include/' . $section . '.php')) {
						
						include_once $_SERVER['DOCUMENT_ROOT'] . '/include/' . $section . '.php';
						
					}
					
				} 
				
			}

		}	

	} 

?>