<?php

	function _switch_page () {
		
		global $content;
		
		global $language;
		
		if(!isset( $_GET['page'])) {$page = 'default';} else {$page = $_GET['page'];}
		
		/* CUSTOM */

		switch($page) {
			
			case 'default';

				_include_once('default');

			break;
			
			case 'menu';
			
				_include_once('menu');
		
			break;

			case 'hakkimizda';
			
				_include_once('hakkimizda');
		
			break;

			case 'kosk';
			
				_include_once('kosk');
		
			break;

			case 'osmanli-donem-mutfaklari';
			
				_include_once('osmanli-donem-mutfaklari');
		
			break;
			
			case 'osmanli-donem-mutfaklari-devami';
			
				_include_once('osmanli-donem-mutfaklari-devami');
		
			break;

			case 'osmanli-donem-mutfaklari-2';
			
				_include_once('osmanli-donem-mutfaklari-2');
			
			break;
				
		}
				
		switch($page) {
		

			case 'rename';

				global $rename_path;
				
				_rename($rename_path);
				
			break;	
				
		}		

		switch($page)
		{
			case 'menu';
			
				_include_once('menu');
		
			break;

		}

		
	}
?>




				
