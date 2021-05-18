<?php 

	$datas_json = _decode_json($_SERVER['DOCUMENT_ROOT'] . '/json/landing-page/datas.json');

	foreach ($datas_json as $key => $value) {

		if ($key == 'datas') { ?>

			<ul class="client-area">
				
			<?php foreach ($value as $data_key => $data_value) { ?>

				<li class="wow fadeInUp" data-wow-delay="0.44s">
					<div class="box">
						<i class="<?php echo $data_value[1] ?>"><img src="<?php echo $data_value[2] ?>" alt="image description"></i>
						<strong class="title"><?php echo _translate('title', $data_key) ?></strong>
						<span class="count"><?php echo $data_value[0]?></span>
					</div>
				</li>				
				
			<?php } ?> 

			</ul>

		<?php } 

	}

?>
