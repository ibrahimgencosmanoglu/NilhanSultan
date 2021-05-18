<?php

	function _header () {
		
		$header_json = $_SERVER['DOCUMENT_ROOT'] . '/json/header.json';
		
		$header_json = _decode_json($header_json); ?>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
		
		<?php		

		foreach ($header_json as $f_title_key => $f_title_value) { 
			
			if (is_array($f_title_value)) { ?>
				
				<li class="dropdown">

					<a style="cursor: default !important;" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false"><?php echo _uppercase(_translate('category', $f_title_key)); ?><span class="caret"></span></a>
					
					<ul class="dropdown-menu">
						
						<?php 
						
							foreach ($f_title_value as $s_title) { ?>
								
								<li><a href="<?php echo DIRECTORY_SEPARATOR . _seo(_translate('subcategory', $s_title)) ?>"><?php echo _uppercase(_translate('subcategory', $s_title)); ?></a></li>
								
							<?php }
						
						?>
					
					</ul>

				</li>
				
			<?php } else { ?>
				
				<li class="dropdown">

					<a href="<?php echo DIRECTORY_SEPARATOR . _seo(_translate('category', $f_title_key)) ?>" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false"><?php echo _uppercase(_translate('category', $f_title_key)); ?></a>

				</li>						
				
			<?php } 

		} ?>
		
		</ul>
	</div>		

<?php } ?>
				
