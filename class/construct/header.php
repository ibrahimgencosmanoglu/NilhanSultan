<?php

	function _header () { global $content; 

		global $contact_us;
			
		?>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
		
		<?php		

		foreach ($content['header'] as $f_title_key => $f_title_value) { 
			
			if (is_array($f_title_value)) { ?>
				
				<li class="dropdown">

					<a style="cursor: default !important;" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false"><?php echo _uppercase(_translate('category', $f_title_key)); ?><span class="caret"></span></a>
					
					<ul class="dropdown-menu">
						
						<?php 
						
							foreach ($f_title_value as $s_title) { ?>

								<li><a href="<?php echo DIRECTORY_SEPARATOR . _seo(_translate('subcategory', $s_title)) ?>"><?php echo _uppercase(_translate('subcategory', $s_title)); ?></a></li>
								
						<?php } ?>
					
					</ul>

				</li>
				
			<?php } else {
				
				if ($contact_us == true) { ?>
				
					<li class="dropdown">

						<a href="<?php echo DIRECTORY_SEPARATOR . _seo(_translate('category', $f_title_key)) ?>" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false"><?php echo _uppercase(_translate('category', $f_title_key)); ?></a>

					</li>		
				
				<?php } else {
										
					if ($f_title_key <> 'iletişim') { ?>
				
						<li class="dropdown">

							<a href="<?php echo DIRECTORY_SEPARATOR . _seo(_translate('category', $f_title_key)) ?>" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false"><?php echo _uppercase(_translate('category', $f_title_key)); ?></a>

						</li>					
					
					<?php }
					
				}
				
			} 
				
		} ?>
		
		</ul>
	</div>		

<?php } ?>
				
