
<?php //print_r ($article)?>

<!-- promo -->
<div class="promo portfolio wow fadeInUp">
	<div class="max-container">
		<div class="img background-animation">
			<!--<img src="/images/placehold/1770x240.png" alt="image description">-->
		</div>
		<ol class="breadcrumb">
			<li><a href="<?php echo '/' . _seo(_translate('category', $article[2])) ?>"><?php echo _translate('category', $article[2]) ?></a></li>
			<li class="active"><?php echo _translate('venues', $article[0]) ?></li>
		</ol>			
		<div class="holder">
			<div class="frame">
				<div class="box">
					<div class="heading">
						<h1><?php echo _uppercase(_translate('venues', $article[0])) ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- contain main informative part of the site -->
<main id="main" role="main">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 content">
				<!-- post -->
				<div class="post detail wow fadeInUp" data-wow-delay="0.6s">
					<div class="image-box">
						<div class="blog-slider">
							<div class="slide">
								
								<?php 
	
								$file_types = array ('jpg', 'jpeg', 'png', 'gif');
				   
				   				$image = 'images/articles/mekanlar/' . _seo($article[0]);

								foreach ($file_types as $image_extension) {

									if (file_exists($image . '.' . $image_extension)) { ?>

										<a href="#"><img src="<?php echo $image . '.' . $image_extension ?>" alt="image description"></a>								

									<?php } 

								} ?>
								
							</div>
						</div>
					</div>
					<!-- text-area -->
					<div class="text-area">
						<h2><?php echo _translate('category', $article[2]) ?></h2>
						<h3><?php echo _translate('venues', $article[0]) ?></h3>
							<?php if (array_key_exists($_SESSION['language'], $article[1])) { ?>
							
								<p><?php echo _translate('venues', $article[1][$_SESSION['language']]) ?></h3></p>
								
							<?php } ?>
							<?php if (array_key_exists('iframe', $article[1])) { ?>
							
								<p><iframe frameborder="0" height="360" src="<?php echo $article[1]['iframe'] ?>" width="100%"></iframe></p>
								
							<?php } ?>										
							<?php if (array_key_exists('geo-location', $article[1])) { ?>
							
								<p><iframe src='<?php echo $article[1]['geo-location'] ?>' width='100%' height='450' frameborder='0' style='border:0' allowfullscreen></iframe></p>
								
							<?php } ?>										
				
					</div>
					<!-- blockquote 
					<div class="blockquote" style="background-image: url(http://placehold.it/1170x305);">
						<div class="frame">
							<div class="box-t">
								<div class="box-c">
									<blockquote>
										<q>
											<i class="icon-quote-left"></i>
											<span>I think if you do something and it turns out pretty good, then you should go do something else wonderful, not dwell on it for too long. Just figure out what’s next.</span>
										</q>
										<cite>STEVE JOBS</cite>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
					<div class="txts">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>-->
				</div>
				<!-- comment-form 
				<div class="comment-form wow fadeInUp" data-wow-delay="0.6s">
					<div class="wpcf7">
						<form action="#" class="wpcf7-form" enctype="multipart/form-data">
							<h3>LEAVE A COMMENT</h3>
							<div class="column">
								<div class="rows">
									<span class="wpcf7-form-control-wrap text-field-required">
										<input type="text" name="text-field-required" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-field-class wpcf7-use-title-as-watermark" size="12" placeholder="Name">
									</span>
								</div>
								<div class="rows">
									<span class="wpcf7-form-control-wrap Emailfield">
										<input type="email" name="Emailfield" value="" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email email-class wpcf7-use-title-as-watermark" size="12" placeholder="Email">
									</span>
								</div>
							</div>
							<div class="column">
								<span class="wpcf7-form-control-wrap textarea">
									<textarea name="textarea" class="wpcf7-form-control wpcf7-textarea textarea-class wpcf7-use-title-as-watermark" rows="9" cols="39" placeholder="Your Comment"></textarea>
								</span>
							</div>
							<input type="submit" value="SEND MESSAGES">
						</form>
					</div>
				</div>
				-->
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
	.promo .heading h1 {color: #e8b75f !important; padding-left: 75px; padding-right: 75px; padding-bottom: 5px; padding-top: 15px; border-bottom: 1px solid #e8b75f;}
	
	.container {margin-bottom: 50px;}
	
	.artist {width: 100%; padding-left: 15px; padding-right: 15px;}
	.artist li {width: 25%; float: left; margin-bottom: 7px;}
	.artist li a {font-size: 15px;}
	.artist li a:hover {text-decoration:none !important; border-bottom: 1px solid #e8b75f; }	
	.artist h2 {width: 100%; display: block; float: left; margin-bottom: 25px; margin-top: 25px; color:#e8b75f; border-bottom: 1px solid #e8b75f}

	@media only screen and (max-width: 1000px) {
		.promo {display: none;}
		.artist li {width: 33.33%; float: left;}
	}	
	
	@media only screen and (max-width: 600px) {
		.nav {margin-top: 50px;}
		.container {margin-top: 25px;}
		.artist li {width: 50%; float: left;}
	}
	
	.background-animation {
		height: 10vw; 
		background-position: center; 
		background-repeat: no-repeat; 
		background-size: cover; 
		background-image:url(<?php echo 'images/articles/mekanlar/' . _seo($article[0]) . '.jpg' ?>);
		animation-name: background;
		animation-duration: 250s;
		animation-delay: 0s;
		animation-iteration-count: infinite;
		filter: grayscale(100%) brightness(150%);
		
	}	
	
	@keyframes background {
	  0%   {background-position: center;}
	  50%  {background-position: bottom;}
	  100% {background-position: center;}
	}	
		

</style>

