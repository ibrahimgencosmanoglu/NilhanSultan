<main style="margin-top: 50px; margin-bottom: 50px;" id="main" role="main">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-7 col-xs-12 wow fadeInLeft" data-wow-delay="0.1s">
				<!-- map -->
				<div class="map">
					
					<?php 
	
						$path = 'images/articles/sanatcilar/';
					
						$image = '/images/artist-' . $_SESSION['language'];

						$file_types = array ('jpg', 'jpeg', 'png', 'gif');

						foreach ($file_types as $artist_image_extension) {

							if (file_exists($path . _seo($article[0]) . '.' . $artist_image_extension)) {

								$image = $path . _seo($article[0]) . '.' . $artist_image_extension;
								
							} 

						}

					?>	
						
					<img src="<?php echo $image ?>" alt="<?php echo $article[0] ?>">
					
				</div>
			</div>
			<div class="col-md-8 col-sm-5 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
				<!-- contact -->
				<div class="contact">
					<h3><?php echo $article[0] ?></h3>
					<p>
						<?php 
						
							if (array_key_exists($_SESSION['language'], $article[1])) {
							
								echo $article[1][$_SESSION['language']];
								
							}
						
						?>
					</p>
					<p>
						<?php 
						
							if (array_key_exists('participation-' . $_SESSION['language'], $article[1])) {
							
								echo $article[1]['participation-' . $_SESSION['language']];
								
							}
						
						?>
					</p>
					<p>
						<?php 
						
							if (array_key_exists('participation', $article[1])) {
							
								echo $article[1]['participation'];
								
							}
						
						?>
					</p>					
					<p>
						<?php 
						
							if (array_key_exists('exhitibitions-' . $_SESSION['language'], $article[1])) {
							
								echo $article[1]['exhitibitions-' . $_SESSION['language']];
								
							}
						
						?>
					</p>
					<p>
						<?php 
						
							if (array_key_exists('exhitibitions-array-' . $_SESSION['language'], $article[1])) {
							
								foreach ($article[1]['exhitibitions-array-' . $_SESSION['language']] as $artist_exhibitions) {
									
									echo $artist_exhibitions . '<br>';
									
								}
								
							}
						
						?>
					</p>
					
					<?php 
					
						$path_artist_images = $path . _seo($article[0]) . '/'; 
					
						if (is_dir($path_artist_images)) { ?>

						<ul class="unnamed-images">
							
						<?php 
							
							$path_artist_images = _content ($path_artist_images); 
							
							foreach ($path_artist_images as $artist_unnamed_images) { ?>
					
									<li><img src="<?php echo $artist_unnamed_images; ?>"></li>
								
							<?php } ?>
							
						</ul>

						<?php }	?>
					
				</div>
			</div>
		</div>
		
		
		<?php include_once 'include/pages/sanatcilar.php' ?>
		
		
		<style>
		
			.unnamed-images li {
				display: flex;
				width: 33.33% !important;
				float: left !important;
				align-items: flex-start;
				margin-bottom: 25px;
			}
			
			.unnamed-images li img {max-width: 100%; height: 150px;}
		
			@media only screen and (max-width: 1000px) {
				.promo {display: none;}
			}	

			@media only screen and (max-width: 600px) {
				.nav {margin-top: 50px;}
				.container {margin-top: 25px;}
				.unnamed-images li {width: 50% !important;}
			}	
			
		</style>
		
		<!--
		<div class="row wow fadeInUp" data-wow-delay="0.6s">
			<div class="col-xs-12">
				<div class="contact">
					<h3>Drop a massage</h3>
					<div class="wpcf7">
						<form enctype="multipart/form-data" class="wpcf7-form" action="#">
							<div class="column">
								<span class="wpcf7-form-control-wrap text-field-required">
									<input type="text" placeholder="Full Name" size="12" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-field-class wpcf7-use-title-as-watermark" value="" name="text-field-required">
								</span>
							</div>
							<div class="column">
								<span class="wpcf7-form-control-wrap text-field-required">
									<input type="tel" name="text-field-required" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-field-class wpcf7-use-title-as-watermark" size="12" placeholder="Phone number">
								</span>
							</div>
							<div class="column">
								<span class="wpcf7-form-control-wrap Emailfield">
									<input type="email" placeholder="Email" size="12" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email email-class wpcf7-use-title-as-watermark" value="" name="Email-address">
								</span>
							</div>
							<div class="column">
								<span class="wpcf7-form-control-wrap textarea">
									<textarea placeholder="Message" cols="39" rows="9" class="wpcf7-form-control wpcf7-textarea textarea-class wpcf7-use-title-as-watermark" name="textarea"></textarea>
								</span>
							</div>
							<input type="submit" value="Submit Massage ">
						</form>
					</div>
				</div>
			</div>
		</div>
		-->
		
	</div>
</main>