<?php 

	$publications_json = _decode_json($_SERVER['DOCUMENT_ROOT'] . '/json/landing-page/publications.json');

	foreach ($publications_json as $key => $value) {

		if ($key == $_SESSION['language']) { ?> 

			<div class="info service-area">
				<div class="txt-frame">
					<ul class="services">
						
					<?php foreach ($value as $f_key => $f_value) { 
						
						if ($f_key == 'category') { 
						
							foreach ($f_value as $s_key => $s_value) { ?>
								
							<li class="wow fadeInUp" data-wow-delay="0.6s">
								<h3>
									<i class="icons-ico-09"></i>
									<a href="<?php echo $s_value[1] ?>"><span><?php echo $s_key ?></span></a>
								</h3>
								<p><?php echo $s_value[0]; ?></p>
							</li>
								
						<?php }

						} 

					} ?>
						
					</ul>
				</div>
				<div class="img-frame wow fadeInRight" data-wow-delay="0.6s">
					<h2 class="tild"><?php echo $value['title'][0] ?></h2>
					<span class="num"><?php echo $value['number'][0] ?></span>
					<a href="<?php echo $value['href'][0] ?>" class="more"><?php echo _uppercase(_translate('word','tümünü gör'))?></a>
				</div>
			</div>
			
		<?php }

	} ?>
