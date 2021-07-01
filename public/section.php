<!DOCTYPE html>

<html lang="en-US" data-menu="classicmenu">

	<?php include_once 'public/head.php' ?>

	
	<body data-rsssl=1 class="home page-template-default page page-id-3244 woocommerce-no-js">

		<?php include_once 'public/input.php';?>
		<?php include_once 'public/mobile-menu.php'; ?>
		<?php include_once 'public/header.php'; ?>

		<div id="wrapper" class="hasbg">
	
			<?php 

				if(!isset( $_GET['page'])) {$page = 'default';} else {$page = $_GET['page'];}

				switch($page) {
					
					case 'default';

						include_once 'include/landing-page.php';

					break;
					
					case 'menu';
					
						include_once 'include/pages/menu.php';
				
					break;

					case 'hakkimizda';
					
						include_once 'include/pages/hakkimizda.php';
				
					break;

					case 'kosk';
					
						include_once 'include/pages/kosk.php';
				
					break;

					case 'osmanli-donem-mutfaklari';
					
						include_once 'include/pages/osmanli-donem-mutfaklari.php';
				
					break;
					
					case 'osmanli-donem-mutfaklari-devami';
					
						include_once 'include/pages/osmanli-donem-mutfaklari-devami.php';
				
					break;

					case 'osmanli-donem-mutfaklari-2';
					
						include_once 'include/pages/osmanli-donem-mutfaklari-2.php';
					
					break;
						
				}							


			?>

			<?php include_once 'public/footer.php';?>

		</div>

		<div id="overlay_background"></div>

		<?php include_once 'public/script.php';?>
	</body>
</html>