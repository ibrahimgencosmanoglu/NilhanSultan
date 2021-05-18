<?php 

	$year_title = 'yeditepe bienali';

	$json = $_SERVER['DOCUMENT_ROOT'] . '/json/category/category.json';

	$json = _decode_json($json); 

	foreach ($json as $category_key => $category_value) {
						
		if ($page == _seo($category_key)) { ?>
			
		<div class="promo portfolio">
			<div class="max-container">
				<div class="img background-animation">
					<!--<img src="/images/placehold/1770x240.png" alt="image description">-->
				</div>
				<div class="holder">
					<div class="frame">
						<div class="box">
							<div class="heading">
								<h1><?php echo _uppercase(_translate('category', $category_key)) ?></h1>
							</div>
						</div>
					</div>
				</div>
				<ol class="breadcrumb">
					<li class="active"><?php echo _translate('category', $category_key) ?></li>
				</ol>			
			</div>
		</div>

		<main id="main" role="main">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">

					<?php $i = count($category_value);

					foreach ($category_value as $category_date_key => $category_date_value) {

						if ($i > 1) { ?>

						<h4><?php echo _uppercase(_translate('title', $year_title)) . ' ' . $category_date_key; ?></h4>

						<?php } ?>

						<div class="masonry-holder">
							<ul class="masonry grid3" id="masonry-container">

								<?php foreach ($category_date_value as $article_key => $article_value) { 
							
									if (array_key_exists($_SESSION['language'], $article_value)) { 
									
										$path = 'images/articles/' . _seo($category_key) . '/' . $category_date_key . '/' . _seo($article_key) . '/';

										$images = _content ($path);

										if (is_array($images)) {

											$random_background = array_rand($images, 2); 
											$random_image = array_rand($images, 3); 

											$works = 'true';

										} ?>											

										<li class="item <?php echo _seo($article_key) ?> wow fadeInUp" data-wow-delay="0.1s">
											<div class="holder">
												<div class="img">
													<img alt="image description" src="<?php echo $images[$random_background[0]] ?>">
												</div>
												<div class="caption">
													<div class="c1">
														<div class="c2">
															<a href="<?php echo _seo(_translate('article', $article_key) . '-' . $category_date_key)?>"><strong class="title"><?php echo _uppercase(_translate('article', $article_key))?></strong></a>
															
															<?php if (array_key_exists('location', $article_value)) { ?> 

																<a href="<?php echo _seo(_translate('venues', $article_value['location'])); ?>"><p><?php if (array_key_exists('location', $article_value)) {echo _translate('venues', $article_value['location']);} ?></p></a>

															<?php } ?>
															
															<ul class="icons">
																<li><a href="<?php echo $images[$random_background[0]] ?>" class="lightbox"><i class="icon-resize-full-alt"></i> <span>resize</span></a></li>
																<!--<li><a href="portfolio-detail.html"><i class="icon-attach"></i> <span>attach</span></a></li>-->
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
									
									<?php } ?>

								<?php } ?>

							</ul>
						</div>

					<?php } ?>
							
					</div>
				</div>
			</div>
		</main>	

		<style>

		.promo .heading h1 {color: #e8b75f !important; padding-left: 75px; padding-right: 75px; padding-bottom: 5px; padding-top: 15px; border-bottom: 1px solid #e8b75f;}

		</style>

		
	<?php } else { 
		
			foreach ($category_value as $subcategory_key => $subcategory_value) {
								
				if ($page == _seo($subcategory_key)) { ?>

				<div class="promo portfolio">
					<div class="max-container">
						<div class="img background-animation">
							<!--<img src="/images/placehold/1770x240.png" alt="image description">-->
						</div>
						<div class="holder">
							<div class="frame">
								<div class="box">
									<div class="heading">
										<h1><?php echo _uppercase(_translate('subcategory', $subcategory_key)) ?></h1>
										<h2><?php echo _translate('category', $category_key) ?></h2>
									</div>
								</div>
							</div>
						</div>
						<ol class="breadcrumb">
							<li><a><?php echo _translate('category', $category_key) ?></a></li>
							<li class="active"><?php echo _translate('subcategory', $subcategory_key) ?></li>
						</ol>			
					</div>
				</div>
						
				<main id="main" role="main">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								
							<?php $i = count($subcategory_value);

							foreach ($subcategory_value as $subcategory_date_key => $subcategory_date_value) {

								if ($i > 1) { ?>

								<h4><?php echo _uppercase(_translate('title', $year_title)) . ' ' . $subcategory_date_key; ?></h4>

								<?php } ?>

								<div class="masonry-holder">
									<ul class="masonry grid3" id="masonry-container">
										
										<?php foreach ($subcategory_date_value as $article_key => $article_value) { 
									
											if (array_key_exists($_SESSION['language'], $article_value)) { 

												$path = 'images/articles/' . _seo($category_key) . '/' . $subcategory_date_key . '/' .  _seo($subcategory_key) . '/' . _seo($article_key) . '/';

												$images = _content ($path);

												if (is_array($images)) {

													$random_background = array_rand($images, 2); 
													$random_image = array_rand($images, 3); 

													$works = 'true';

												} ?>											
													
												<li class="item <?php echo _seo($article_key) ?> wow fadeInUp" data-wow-delay="0.1s">
													<div class="holder">
														<div class="img">
															<img alt="image description" src="<?php echo $images[$random_background[0]] ?>">
														</div>
														<div class="caption">
															<div class="c1">
																<div class="c2">
																	<a href="<?php echo _seo(_translate('article', $article_key) . '-' . $subcategory_date_key)?>"><strong class="title"><?php echo _uppercase(_translate('article', $article_key))?></strong></a>
																	
																	<?php if (array_key_exists('location', $article_value)) { ?> 
																	
																		<a href="<?php echo _seo(_translate('venues', $article_value['location'])); ?>"><p><?php if (array_key_exists('location', $article_value)) {echo _translate('venues', $article_value['location']);} ?></p></a>
																	
																	<?php } ?>
																	
																	<ul class="icons">
																		<li><a href="<?php echo $images[$random_background[0]] ?>" class="lightbox"><i class="icon-resize-full-alt"></i> <span>resize</span></a></li>
																		<!--<li><a href="portfolio-detail.html"><i class="icon-attach"></i> <span>attach</span></a></li>-->
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</li>
												
											<?php } ?>
											
										<?php } ?>

									</ul>
								</div>

							<?php } ?>
								
								
							</div>
						</div>
					</div>
				</main>									
						
			<?php }

			}
		
		} 

	} 

?>

<style>
	@media only screen and (max-width: 600px) {
		.nav {margin-top: 50px;}
		.container {margin-top: 25px;}
	}	

	@media only screen and (max-width: 1000px) {
		.promo {display: none;}
	}	

	#main a {color:#252525 !important;}
	.breadcrumb {border-radius: 0px !important; font-size: 12px;}
	.breadcrumb a {color:#e8b75f !important;}
	h4 {text-align: center; color: #e8b760; border-bottom: 2px solid #e8b760; padding-top: 5px;  padding-bottom: 5px; margin-bottom: 25px;}
	.promo {margin-bottom: 0px !important; padding: 0px !important;}

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
								