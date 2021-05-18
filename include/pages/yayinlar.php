<?php

	$publications = $_SERVER['DOCUMENT_ROOT'] . '/json/category/publications.json';

	$publications = _decode_json($publications);

	$sort = array();

	foreach ($publications as $category_key => $category_value) {

		foreach ($category_value as $date_key => $date_value) {
			
			foreach ($date_value as $publications_key => $publications_value) {
			
				$sort[$publications_key] = $publications = array ($publications_key, $publications_value, $date_key);
				
			}			

		}

	}

	$collator = new Collator('tr_TR');	
			
	$collator->sort($sort);

	$number = count($sort);

?>


<div class="promo portfolio wow fadeInUp">
	<div class="max-container">
		<div class="img background-animation">
			<img src="/images/yayinlar.jpg" alt="image description">
		</div>
		<ol class="breadcrumb">
			<!--<li><a></a></li>
			<li><a href="<?php echo '/' . _seo(_translate('subcategory', $article[1])) ?>"><?php echo _translate('subcategory', $article[1]) ?></a></li>-->
			<li class="active"><?php echo _translate('category', $category_key) ?></li>
		</ol>			
		<div class="holder">
			<div class="frame">
				<div class="box">
					<div class="heading">
						<h1><?php echo _uppercase(_translate('category', $category_key)) ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<main id="main" role="main">
	<div class="container">
		<div class="row">
			<ul class="publications">

				<?php 
	
					function _color ($key) {

						if ($key == 'tr') {

							return 'style="background-color:#ed060d"';

						} else if ($key == 'en') {

							return 'style="background-color:#012a66"';

						} else {

							return 'style="background-color:#b7b7b7"';

						}


					}
	
	
					$tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç');

					for ($i = 0; $i < $number; $i++) {

						$substr = substr($sort[$i][0], 0, 2);

						if ($i == 0) {

							echo '<h2>' . $sort[$i][0][0] . '</h2>';

						} else if ($sort[$i - 1][0][0] <> $sort[$i][0][0]) {

							if (in_array($substr, $tr)) {

								echo '<h2>' . $substr . '</h2>';

							} else {

								echo '<h2>' . $sort[$i][0][0] . '</h2>';

							}				

						} 
						
						?>
				
						
						<li>
							<p><?php echo $sort[$i][0]?><span class="year"><?php echo $sort[0][2] ?></span></p>							
							
							<?php foreach ($sort[$i][1] as $publications_key => $publications_value ) { ?>

								<ul>
									<li><a href="/downloads/yayinlar/<?php echo $sort[0][2] ?>/pdf/<?php echo $publications_key ?>/<?php echo _seo($publications_value) . '.pdf'?>" download><span style="color:#e8b75f;" class="material-icons md-18">file_download</span></li></a>
									<li><a href="/downloads/yayinlar/<?php echo $sort[0][2] ?>/pdf/<?php echo $publications_key ?>/<?php echo _seo($publications_value) . '.pdf'?>" target="_blank"><?php echo $publications_value; if ($_SESSION['language'] <> $publications_key) { echo '<span ' . _color($publications_key)  . ' class="language">' . _uppercase($publications_key) . ' </span>';}  ?></a></li>
								</ul>
															
							
							<?php } ?>
															
						</li>

					<?php }

				?>			
		
			</ul>
		</div>	
	</div>	
</main>


<style>
	#main a {color:#252525}
	.breadcrumb {border-radius: 0px !important; font-size: 12px;}
	.breadcrumb a {color:#e8b75f !important;}
	
	.year {
		font-size: 9px !important;
		color: #ffffff;
		margin-left: 5px;
		background-color: #e8b75f;
		padding-left: 3px;
		padding-right: 10px;		
	}

	.language {
		font-size: 9px !important;
		color: #ffffff;
		margin-left: 5px;
		padding-left: 3px;
		padding-right: 3px;
	}
	
	
	.promo {margin-bottom: 0px !important; padding: 0px !important; margin-top: 0px;}
	.promo .heading {overflow: visible !important;}
	.promo .heading h1 {color: #e8b75f !important; padding-left: 75px; padding-right: 75px; padding-bottom: 5px; padding-top: 15px; border-bottom: 1px solid #e8b75f;}
	
	.container {margin-bottom: 50px;}
	
	.publications p {width: 100%; font-size: 21px; float: left; margin-bottom: 5px;}
	.publications {width: 100%; padding-left: 15px; padding-right: 15px;}	
	.publications > li {width: 50%; float: left; margin-bottom: 7px;}
	.publications > li ul {width: 100%; float: left;}	
	.publications > li ul li {width: 25px; float: left;}
	.publications > li ul li:last-child {width: calc(100% - 50px);}	
	.publications li a {font-size: 15px;}
	.publications li a:hover {text-decoration:none !important; border-bottom: 1px solid #e8b75f; }	
	.publications h2 {width: 100%; display: block; float: left; margin-bottom: 25px; margin-top: 25px; color:#e8b75f; border-bottom: 1px solid #e8b75f}
	.publications > li ul li:last-child a {color:#e8b75f !important;}		

	
	@media only screen and (max-width: 1000px) {
		.promo {display: none;}
		.publications li {width: 100%; float: left;}
	}	
	
	@media only screen and (max-width: 600px) {
		.nav {margin-top: 50px;}
		.container {margin-top: 25px;}
		.publications li {width: 100%; float: left;}
	}	

</style>
