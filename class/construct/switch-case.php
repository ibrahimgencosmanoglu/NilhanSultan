<?php

	function _switch_page () {
		
		global $language;
		
		$header_json = $_SERVER['DOCUMENT_ROOT'] . '/json/header.json';
		
		$header_json = _decode_json($header_json);

		if(!isset( $_GET['page'])) {$page = 'default';} else {$page = $_GET['page'];}
		
		if(!isset( $_GET['panel'])) {$panel = 'default';} else {$panel = $_GET['panel'];}		
		
		
		/* CUSTOM */
				
		switch($page) {

			case 'default';

				_include_once('default');

			break;	
				
		}
				
		switch($page) {

			case 'rename';

				global $rename_path;
				
				_rename($rename_path);
				
			break;	
				
		}		
		
		/* LANGUAGE */ 
		
		foreach ($language as $language_session) {
			
			switch($page) {

				case $language_session;

					$_SESSION['language'] = $language_session;

					header('Location: /');

				break;	

			}		
			
		}
		
		/* HEADER = CATEGORY & SUBCATEGORY */
		
		foreach ($header_json as $category_key => $category_value) {
			
			switch($page) {

				case _seo(_translate('category', $category_key, 'true'));
					
					_include_once('category');

				break;	

			}
			
			if (is_array($category_value)) {

				$biennial_json = $_SERVER['DOCUMENT_ROOT'] . '/json/category/biennial.json';

				$biennial_json = _decode_json($biennial_json); 				
				
				foreach ($category_value as $subcategory) {
					
					foreach ($biennial_json as $biennial_key => $biennial_value) {
						
						if (array_key_exists($subcategory, $biennial_json)) {
							
							switch($page) {
									
								case _seo(_translate('subcategory', $biennial_key));
									
									foreach ($biennial_value as $biennial_article_key => $biennial_article_value) { 
										
										if ($_SERVER['REQUEST_URI'] == '/' . _seo(_translate('subcategory', $biennial_key))) {

											header('Location: /' . _seo(_translate('subcategory', $biennial_key)) . '/' . _seo(_translate('article', $biennial_article_key)));
											
											break;

										} else {
											
											$biennial = [$biennial_key, $biennial_article_key, $biennial_article_value, $biennial_value];

											switch($panel) {

												case _seo(_translate('article', $biennial_article_key));

													_include_once('biennial', $biennial);
													
												break;	

											}
											
										}
									
									}
									
									
								break;	

							}
							
						} else {

							switch($page) {

								case _seo(_translate('subcategory', $subcategory, 'true'));
									
									_include_once('category');

								break;	

							}

						}
						
					}
				
				}
				
			}

		}
		
		/* CATEGORY ARTICLES */
		
		$category_json = $_SERVER['DOCUMENT_ROOT'] . '/json/category/category.json';
		
		$category_json = _decode_json($category_json);
				
		foreach ($category_json as $category_key => $category_value) {
			
			foreach ($category_value as $subcategory_key => $subcategory_value) {
				
				if (is_numeric($subcategory_key)) {
					
					$date_key = $subcategory_key;
					
					foreach ($subcategory_value as $article_key => $article_value) {

						switch($page) {

							case _seo(_translate('category', $article_key, 'true')) . '-' . $date_key;

								$article_array = [$category_key, 'true', $date_key, $article_key, $article_value, $subcategory_value];

								_include_once('article', $article_array);

							break;	

						}						

					}			
					
				} else {
					
					foreach ($subcategory_value as $date_key => $date_value) {

						foreach ($date_value as $article_key => $article_value) {
							
							switch($page) {

								case _seo(_translate('article', $article_key, 'true')) . '-' . $date_key;
									
									$article_array = [$category_key, $subcategory_key, $date_key, $article_key, $article_value, $date_value];

									_include_once('article', $article_array);

								break;	

							}						

						}

					}
					
				}
				
			}
			
		}
		
		/* ARTIST */
		
		$artist_json = $_SERVER['DOCUMENT_ROOT'] . '/json/category/artist.json';

		$artist_json = _decode_json($artist_json);
		
		foreach ($artist_json as $category_key => $category_value) {

			foreach ($category_value as $date_key => $date_value) {
				
				foreach ($date_value as $artist_key => $artist_value) {
					
					switch($page) {

						case _seo($artist_key);

							$artist_array = [$artist_key, $artist_value, $category_key, $date_key, $category_value];

							_include_once('artist', $artist_array);

						break;	

					}	
					
				}
					

			}

		}
		
		
		/* VENUES */
		
		$venues_json = $_SERVER['DOCUMENT_ROOT'] . '/json/category/venues.json';

		$venues_json = _decode_json($venues_json);
		
		foreach ($venues_json as $category_key => $category_value) {

			foreach ($category_value as $date_key => $date_value) {
				
				foreach ($date_value as $venue_key => $venue_value) {
										
					switch($page) {

						case _seo(_translate('venues', $venue_key));

							$venues_array = [$venue_key, $venue_value, $category_key, $date_key, $category_value];

							_include_once('venues', $venues_array);

						break;	

					}	
					
				}
					

			}

		}
		
		/* FOOTER */		
		
		$footer_json = $_SERVER['DOCUMENT_ROOT'] . '/json/footer.json';

		$footer_json = _decode_json($footer_json);
		
		foreach ($footer_json as $footer_key => $footer_value) {
			
			switch($page) {

				case _seo(_translate('footer', $footer_key));

					$footer_array = [$footer_json, $footer_key, $footer_value];

					_include_once('footer', $footer_array);

				break;	

			}			

		}		
		
	}


?>




				
