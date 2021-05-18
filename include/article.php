<?php 

	$path_subcategory_article = 'images/articles/' . _seo($article[0]) . '/' . _seo($article[2]) . '/' . _seo($article[1]) . '/' . _seo($article[3]) . '/';

	$path_category_article = 'images/articles/' . _seo($article[0]) . '/' . _seo($article[2]) . '/' . _seo($article[3]) . '/';

	if (is_dir($path_category_article)) { $path = $path_category_article; } else { $path = $path_subcategory_article; }

	$images = _content ($path); 

	$works = '';

	if (is_array($images)) {
	
		$random_background = array_rand($images, 2); 
		$random_image = array_rand($images, 3); 
		
		$works = 'true';
		
	} 


?>

<div class="promo portfolio wow fadeInUp">
	<div class="max-container">
		<div class="img background-animation">
			<!--<img src="<?php // echo $images[$random_background[0]] ?>" alt="image description">-->
		</div>
		<ol class="breadcrumb">
			<li><a><?php echo _translate('category', $article[0]) ?></a></li>
			
			<?php if ($article[1] <> 'true') { ?>

				<li><a href="<?php echo '/' . _seo(_translate('subcategory', $article[1])) ?>"><?php echo _translate('subcategory', $article[1]) ?></a></li>			
	
			<?php } ?>
			
			<li class="active"><?php echo _translate('article', $article[3]) ?></li>
		</ol>			
		<div class="holder">
			<div class="frame">
				<div class="box">
					<div class="heading">
						<?php if ($article[1] <> 'true') { ?> 
						
							<h1><?php echo _uppercase(_translate('subcategory', $article[1])) ?></h1>
						
						<?php } ?>
						<h2><?php echo _translate('category', $article[0]) ?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<main id="main" role="main">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<!-- gallery -->
				<div class="gallery">
					
					<?php if (file_exists($images[$random_image[0]])) { ?>
	
						<div class="img wow fadeInDown"><img src="<?php echo $images[$random_image[0]] ?>" alt="image description"></div>	
	
					<?php } else { ?>
	
						<img class="img" src="/images/placehold/770x570.png" alt="image description">
	
					<?php } ?>
					
					<div class="text">
						<h2 class="wow fadeInUp"><?php echo _uppercase(_translate('article', $article[3])) ?></h2>
						<dl class="wow fadeInUp">
							
							<?php if (array_key_exists('date', $article[4])) { 
							
								if (is_array($article[4]['date'])) { ?>
							
								<?php foreach ($article[4]['date'] as $date_key => $date_value) {} { ?>
							
									<?php if (array_key_exists('0', $article[4]['date'])) { ?>

										<dt><span style="color:#e8b75f;" class="material-icons md-18">event</span></dt>
										<dd><time><?php echo $article[4]['date'][0] ?></time></dd>
										
									<?php } ?>
									
									<?php if (array_key_exists('1', $article[4]['date'])) { ?>
							
										<dt><span style="color:#e8b75f;" class="material-icons md-18">notifications_none</span></dt>
										<dd><time><?php echo $article[4]['date'][1] ?></time></dd>
							
									<?php } ?>
	
								<?php } 
							
								} else { ?>
									
									<dt><span style="color:#e8b75f;" class="material-icons md-18">event</span></dt>
									<dd><time><?php echo $article[4]['date'] ?></time></dd>
									
								<?php } ?>
	
							<?php } if (array_key_exists('location', $article[4])) { ?> 
							
								<dt><span style="color:#e8b75f;" class="material-icons md-18">place</span></dt>
								<dd><a target="_blank" href="<?php echo _seo(_translate('venues', $article[4]['location'])) ?>"><?php echo _translate('venues', $article[4]['location']) ?></a></dd>
							
							<?php } if (array_key_exists('artist', $article[4])) { ?> 
							
								<dt><span style="color:#e8b75f;" class="material-icons md-18">filter_vintage</span></dt>
								<dd><?php foreach ($article[4]['artist'] as $artist) { ?><a target="_blank" href="<?php echo _seo($artist) ?>"><?php echo $artist ?></a>
								<?php } ?></dd>
							
							<?php } ?>
						</dl>
						
						<?php if (array_key_exists($_SESSION['language'], $article[4])) {?>
	
							<p class="wow fadeInUp"><?php echo $article[4][$_SESSION['language']]; ?>
	
						<?php } if (array_key_exists('participation' . '-' .  $_SESSION['language'], $article[4])) { ?>

							<?php echo $article[4]['participation' . '-' .  $_SESSION['language']] ?> </p>
						
						<?php } if (array_key_exists('participation', $article[4])) { ?>
						
							<?php if (is_array($article[4]['participation'])) { ?>
	
								<p class="wow fadeInUp"><?php foreach ($article[4]['participation'] as $student) {echo ' • ' . $student;}  ?></p>
						
							<?php } else { ?>
	
								<p class="wow fadeInUp"><?php echo $article[4]['participation'] ?></p>	
						
							<?php } ?>
	
						<?php } ?>
						
						<!--<ul class="social">
							<li>
								<ul class="social-networks">
									<li><a href="#" class="facebook"><i class="icon-facebook"></i><span>facebook</span></a></li>
									<li><a href="#" class="twitter"><i class="icon-twitter"></i><span>twitter</span></a></li>
									<li><a href="#" class="instagram"><i class="icon-instagram"></i><span>instagram</span></a></li>
									<li><a href="#" class="pinterest-circled"><i class="icon-pinterest-circled"></i><span>pinterest-circled</span></a></li>
								</ul>
							</li>
						</ul>-->
					</div>
				</div>
								
				<?php if ($works == 'true') { ?>
				
				<div class="masonry-holder">
					<h2><?php if ($article[0] == 'sergiler') { echo _uppercase(_translate('title', 'eserler')); } else { echo _uppercase(_translate('title', 'fotoğraflar')); }  ?></h2>
					<ul class="masonry grid3" id="masonry-container">

					<?php 

					if (array_key_exists('images', $article[4])) {

						foreach ($article[4]['images'] as $image_key) {

							$image_title = $image_key;

							$image_key = _seo($image_key) . '.jpg';
														
							foreach ($images as $image) {

								if ($image_key == basename($image)) { ?>

									<li class="item wow fadeInUp" data-wow-delay="0.1s">
										<div class="holder">
											<div class="img">
												<img src="<?php echo $image ?>" alt="image description">
											</div>
											<div class="caption">
												<div class="c1">
													<div class="c2">
														
														<?php $image_artist_word = explode(' - ', $image_title);
																																													 
															if (count($image_artist_word) > 1) { ?>
																
																<a><strong class="title"><?php echo _uppercase($image_artist_word[1]); ?></strong></a>
																<a><p><?php echo $image_artist_word[0]; ?></p></a>
														
															<?php } else { ?>

																<a><strong class="title"><?php echo _uppercase($image_title) ?></strong></a>
																
															<?php }
																	 
														?>
														
														<ul class="icons">
															<!--<li><a href="#"><i class="icon-resize-full-alt"></i> <span>resize</span></a></li>-->
															<!--<li><a href="#"><i class="icon-attach"></i> <span>attach</span></a></li>-->
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>	

							<?php }

							}

						} 

					} else {
						
						foreach ($images as $unnamed_images) { ?>
						
								<li class="item wow fadeInUp" data-wow-delay="0.1s">
									<div class="holder">
										<div class="img wow fadeInUp">
											<img src="<?php echo $unnamed_images;?>" alt="image description">
										</div>
									</div>
								</li>						
						
						
						<?php }
						
					} ?>

					</ul>
				</div>								
				
				<?php } $i = 0; $count = count($article[5]); ?>
				
				<?php /* BURAYA BAK */ ?> 
				
				<?php if ($count > 1) { ?> 
				
				<div class="masonry-holder">
					
					<?php if($article[1] <> 'true') { ?>
	
						<h2><?php echo _uppercase(_translate('subcategory', $article[1])) ?></h2>
	
					<?php } else { ?>
				
						<h2><?php echo _uppercase(_translate('category', $article[0])) ?></h2>
				
					<?php } ?>
					
					<ul class="masonry grid3" id="masonry-container-two">
						
						<?php foreach ($article[5] as $related_key => $related_value) { 

							$path_subcategory_article = 'images/articles/' . _seo($article[0]) . '/' . _seo($article[2]) . '/' . _seo($article[1]) . '/' . _seo($related_key) . '/';

							$path_category_article = 'images/articles/' . _seo($article[0]) . '/' . _seo($article[2]) . '/' . _seo($related_key) . '/';

							if (is_dir($path_category_article)) { $path = $path_category_article; } else { $path = $path_subcategory_article; }	

							$related_images = _content ($path); 
	
							if (array_key_exists($_SESSION['language'], $related_value)) {
								
							if (_translate('article', $related_key) <> _translate('article', $article[3])) { ?>

								<?php $i++; if ($i < 7) { ?>

									<li class="item wow fadeInUp" data-wow-delay="0.1s">
										<div class="holder">
											<div class="img wow fadeInUp">
												<a href="<?php echo '/' . _seo($related_key) . '-' . _seo($article[2]) ?>"><img src="<?php echo $related_images[0] ?>" alt="image description"></a>
											</div>
											<div class="caption">
												<div class="c1">
													<div class="c2">
														<a href="<?php echo _seo(_translate('article', $related_key) . '-' . _seo($article[2])); ?>"><strong class="title"><?php echo _uppercase(_translate('article', $related_key)); ?></strong></a>
														
														<?php if (array_key_exists('location', $related_value)) { ?>

															<a href="<?php echo _seo(_translate('venues', $related_value['location'])) ?>"><p><?php echo _translate('venues', $related_value['location']); ?></p></a>
								
														<?php } ?>
														
														<ul class="icons">
															<li><a href="<?php echo _seo(_translate('article', $related_key) . '-' . _seo($article[2])); ?>"><i class="icon-resize-full-alt"></i> <span>resize</span></a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>						

								<?php } 

								}
								
							}

						} ?>						
							
					</ul>
				</div>
				
				<?php } ?>
				
			</div>
		</div>
	</div>
</main>

<style>
	#main a {color:#252525 !important;}
	.breadcrumb {border-radius: 0px !important; font-size: 12px;}
	.breadcrumb a {color:#e8b75f !important;}

	.promo {margin-bottom: 0px !important; padding: 0px !important; margin-top: 0px;}
	.promo .heading {overflow: visible !important;}
	.promo .heading h1 {color: #e8b75f !important; padding-left: 75px; padding-right: 75px; padding-bottom: 5px; padding-top: 15px; border-top: 1px solid #e8b75f;}
	
	.gallery dl dt {padding: 0px !important;}
	.gallery p {margin-bottom: 10px !important;}

	h4 {text-align: center; color: #e8b760; border-bottom: 2px solid #e8b760; padding-top: 5px;  padding-bottom: 5px; margin-bottom: 25px;}
	
	@media only screen and (max-width: 1000px) {
		.promo {display: none;}
	}	
	
	@media only screen and (max-width: 600px) {
		.nav {margin-top: 50px;}
		.container {margin-top: 25px;}
	}	

	.background-animation {
		height: 10vw; 
		background-position: center; 
		background-repeat: no-repeat; 
		background-size: cover; 
		background-image:url(<?php echo $images[$random_background[0]] ?>);
		animation-name: background;
		animation-duration: 250s;
		animation-delay: 0s;
		animation-iteration-count: infinite;
		filter: blur(0px);
		
	}	
	
	@keyframes background {
	  0%   {background-position: center;}
	  50%  {background-position: bottom;}
	  100% {background-position: center;}
	}	
	

</style>
