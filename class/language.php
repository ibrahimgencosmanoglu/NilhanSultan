<?php

	function _language () {

		if (!empty($_COOKIE["language"])) {

			$language = $_COOKIE["language"];

		} else {

			if (empty($_SESSION ['language'])) {

				$_SESSION ['language'] = 'tr';

				$language = $_SESSION ['language'];

			} else {

				$language = $_SESSION ['language'];	

			}

		}

		return $language;

	}

	$_SESSION ['language'] = _language();

	function _uppercase ($word) {
		
		if ($_SESSION['language'] == 'tr') {
			
			$word = str_replace('i', 'İ', $word);
			$word = str_replace('ı', 'I', $word);
			
		}
		
		$word = mb_strtoupper($word);
		
		return $word;
		
	}

	function _translate ($section, $word, $language = null, $file = null) {
		
		$global_json = $_SERVER['DOCUMENT_ROOT'] . '/json/language/global.json';
		
		if (empty($file)) {
			
			$file = _decode_json ($global_json);	
			
		} else {
			
			$file = _decode_json ($_SERVER['DOCUMENT_ROOT'] . $file);
			
		}		

		if ($_SESSION['language'] == 'tr') {
			
			return $word;
			
		} else {
			
			if (array_key_exists($section, $file)) {

				foreach ($file as $section_key => $section_value) {

					if ($section == $section_key) {

						if (array_key_exists($word, $section_value)) {

							foreach ($section_value as $word_key => $word_value) {

								if ($word == $word_key) {

									if (array_key_exists($_SESSION['language'], $word_value)) { 

										foreach ($word_value as $language_key => $language_value) {

											if ($_SESSION['language'] == $language_key) {

												return $language_value[0];

											}

										}

									} else {

										return $_SESSION['language'] . ' (undefined) ' . $section . ' ' . $word;

									}

								} 

							}

						} else {
									
							if ($_SESSION['language'] <> 'tr' && $language == 'true') {

								foreach ($file as $section_key => $section_value) {

									foreach ($section_value as $word_key => $word_value) {

										foreach ($word_value as $language_key => $language_value) {

											if ($_SESSION['language'] == $language_key) {

												if ($language_value[0] == $word) {

													return _seo($word_key);

												}

											}

										}

									}

								}							

							}	
							
							return $word . ' (undefined)';

						}

					}

				}

			} else {

				return $section . ' (undefined) ' . $word;

			}
			
		}
		
	}

?>