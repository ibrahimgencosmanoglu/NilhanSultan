<main id="main" role="main">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-sm-8 col-xs-12 col-lg-push-3 col-sm-push-4 content">
				<div class="post wow fadeInUp" data-wow-delay="0.1s">
					<!--<div class="image-box">
						<div class="blog-slider">
							<div class="slide">
								<img src="<?php echo $article[2]['image']; ?>" alt="image description">
							</div>
						</div>
					</div>-->
					<div class="text-area">
						<?php if (array_key_exists('date-' . $_SESSION['language'], $article[2])) { ?> 
							<h2><?php echo $article[2]['date-' . $_SESSION['language']] ?></h2>
						<?php } ?>
						
						<h3><?php echo _uppercase(_translate('article', $article[1])); ?></h3>

						<?php if (array_key_exists($_SESSION['language'], $article[2])) { ?> 

						<?php if (array_key_exists('image', $article[2])) { ?> 
							<img class="image" src="<?php echo $article[2]['image']; ?>" alt="image description">
						<?php } ?>
							<?php echo $article[2][$_SESSION['language']] ?>
						<?php } ?>
						<?php if (array_key_exists('image-' . $_SESSION['language'], $article[2])) { ?> 
							<img src="<?php echo $article[2]['image-' . $_SESSION['language']]; ?>" alt="image description">
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-4 col-xs-12 col-lg-pull-9 col-sm-pull-8 sidebar">
				<div class="widget wow fadeInUp" data-wow-delay="0.1s">
					<h2><?php echo _uppercase(_translate('subcategory', $article[0])) ?></h2>
					<ul class="categories">
						
						<?php $header = explode('/', $_SERVER['REQUEST_URI']); $header = end($header); ?>
						
						<?php foreach ($article[3] as $article_key => $article_value) { ?>
						
							<?php if (array_key_exists($_SESSION['language'], $article_value) || array_key_exists('image', $article_value) || array_key_exists('image-' . $_SESSION['language'], $article_value)) { ?>

								<?php if ($header == _seo(_translate('article', $article_key))) { ?>
	
									<li><a class="active" href="<?php echo '/'.  _seo(_translate('subcategory', $article[0])) . '/' .  _seo(_translate('article', $article_key)); ?>"><?php echo _translate('article', $article_key); ?></a></li>		
	
								<?php } else { ?>
	
									<li><a href="<?php echo '/'.  _seo(_translate('subcategory', $article[0])) . '/' .  _seo(_translate('article', $article_key)); ?>"><?php echo _translate('article', $article_key); ?></a></li>		
	
								<?php } ?>

							<?php }	?>
						
						<?php } ?>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</main>

<style>

	.active {font-weight: 700; color: #e8b760 !important;}
	.image {float: left; margin-right: 25px; margin-bottom: 25px;}
	p {margin-bottom: 20px !important;}
	
	@media only screen and (max-width: 600px) {
		.nav {margin-top: 50px;}
		.container {margin-top: 25px;}		
		.image {float: left; margin-bottom: 25px; width: 100%;}
	}	
	

</style>