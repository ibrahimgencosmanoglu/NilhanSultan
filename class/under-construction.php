<?php

	function _under_construction ($erkajans = null) {
		
		global $google_analytics;
		
		$page = isset($_GET['page']) ? $_GET['page'] : null;

		switch($page) {	

			case 'administration';

				$_SESSION ['administration'] = 'true';

				header('Location: /');

			break;

		}
		
		if (!empty($erkajans) || $erkajans == 'true') {	

			switch($page) {	

				case 'erkajans';
					
					$_SESSION ['erkajans'] = 'true';

					header('Location: /');

				break;

			}

		} 

		switch($page) {	
				
			case _seo(_translate('page', 'yapım aşamasında')); ?>
							
				<div class="flex">
					<img src="/images/under-construction-<?php echo $_SESSION['language']?>.jpg" >
				</div>

				<style>

					.flex {
						display: flex;
						align-content: center;
						justify-content: center;
						align-items: center;
						height: 80vh;
					}
					
					@media only screen and (max-width: 1000px) {
						.flex img { max-width: 100%; width: 100%;}
					}	

					
				</style>
							

				<script>
					(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
					})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

					ga('create', '<?php echo $google_analytics ?>', 'auto');
					ga('send', 'pageview');
				</script>

			<?php break;	

		}
		
	}
?>