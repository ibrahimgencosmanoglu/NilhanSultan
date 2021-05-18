<main id="main" role="main">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-sm-8 col-xs-12 col-lg-push-3 col-sm-push-4 content">
				<div class="post wow fadeInUp" data-wow-delay="0.1s">
					<div class="text-area">
						<h3><?php echo _uppercase(_translate('footer', $article[1])) ?></h3>

						<?php if (array_key_exists($_SESSION['language'], $article[2])) {
	
							echo $article[2][$_SESSION['language']];
	
						} ?>
												
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-4 col-xs-12 col-lg-pull-9 col-sm-pull-8 sidebar">
				<div class="widget wow fadeInUp" data-wow-delay="0.1s">
					<h2><?php echo _uppercase(_translate('footer', $article[1])) ?></h2>
					<ul class="categories">
						
						<?php foreach ($article[0] as $article_key => $article_value) { 
						
							if (array_key_exists($_SESSION['language'], $article_value)) { 
								
								if ($_SERVER['REQUEST_URI'] <> '/' . _seo($article_key)) { ?>
									
								<li><a href="<?php echo '/'. _seo(_translate('footer', $article_key)); ?>"><?php echo _uppercase(_translate('footer', $article_key)); ?></a></li>									
									
							<?php }

							} 
						
						} ?>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</main>

<style>

	.image {float: left; margin-right: 25px; margin-bottom: 25px;}
	p {margin-bottom: 20px !important;}
	
	@media only screen and (max-width: 600px) {
		.nav {margin-top: 50px;}
		.container {margin-top: 25px;}		
		.image {float: left; margin-bottom: 25px; width: 100%;}
	}	
	

</style>