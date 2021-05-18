<?php

	function _rename ($path) {

		$pathnames = _content ($path);

		foreach ($pathnames as $pathname) {

			$dirname = dirname($pathname);
			$filename = basename($pathname);
			$filename = str_replace('.jpg', '', $filename);

			$new_pathname = $dirname . '/' . str_replace($filename, _seo($filename), $filename);

			$new_pathname = $new_pathname . '.jpg'; 

			rename($pathname, $new_pathname);

		}
		
	}		

?>